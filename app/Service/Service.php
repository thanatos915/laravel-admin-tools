<?php


namespace App\Service;

use Illuminate\Pagination\LengthAwarePaginator;
use Symfony\Component\HttpKernel\Exception\BadRequestHttpException;
use Validator;

/**
 * Class Service
 * @property string $sort_key
 * @property string $sort_value
 * @property string $sortField
 * @property string $sortOrder
 * @package App\Service
 * @author thanatos thanatos915@163.com
 */
class Service
{
    public static $attributes = [];

    private $_attributes = [];

    private $messages = [];

    /**
     * 过滤传输数据
     * @param $params
     * @return array|\Illuminate\Http\Request
     * @author thanatos thanatos915@163.com
     */
    public static function parseParams($params)
    {
        $data = [];
        if (is_array($params)) {
            $data = $params;
        }

        if ($params instanceof \Illuminate\Http\Request) {
            $data = $params->all();
        }
        return $data;
    }

    /**
     * 初始化类属性
     * @param array $params 传入数据
     * @param array $rules 验证的数组
     * @param array $message 错误消息
     * @param array $attributes 字段名称
     * @return Service
     * @author thanatos thanatos915@163.com
     */
    public static function loadParams($params, $rules = null, $message = [], $attributes = [])
    {
        $model = new static();
        $data = static::parseParams($params);
        // 验证数据
        if ($rules) {
            $attributes = $attributes ?: static::$attributes;
            $data = Validator::make($data, $rules, $message, $attributes)->validate();
        }

        $model->load($data);

        return $model;
    }

    /**
     * 初始化类属性
     * @param $data
     * @author thanatos thanatos915@163.com
     */
    public function load($data)
    {
        collect($data)->each(function ($item, $key) {
            $this->$key = $item;
        });
    }

    public function getSortDir()
    {
        return $this->sortOrder === 'ascend' ? 'asc' : 'desc';
    }

    public function getAttributes()
    {
        return $this->_attributes;
    }

    public function __set($name, $value)
    {
        $this->_attributes[$name] = $value;
    }

    public function __get($name)
    {
        return isset($this->_attributes[$name]) ? $this->_attributes[$name] : null;
    }

}
