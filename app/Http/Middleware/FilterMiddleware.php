<?php


namespace App\Http\Middleware;


use Closure;
use Illuminate\Http\Request;

class FilterMiddleware
{

    /**
     * 过滤所有参数
     * @param Request $request
     * @param Closure $next
     * @return mixed
     * @author thanatos thanatos915@163.com
     */
    public function handle(Request $request, Closure $next)
    {
        $data = $request->all();

        $data = collect($data)->map(function ($item){
            if (empty($item) || $item === 'null' || $item === 'undefined')
                return '';
            else
                return $item;
        });

        // 删除空属性
        foreach ($data as $k => $item) {
            if (empty($item))
                unset($data[$k]);
        }

        $request->replace($data->toArray());
        return $next($request);
    }

}
