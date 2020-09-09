<?php


namespace App\System\traits;


trait Paginatable
{

    public $pageSizeLimit = 100;

    public function getPerPage()
    {
        $pageSize = app('request')->input('pageSize', $this->perPage);
        return min($pageSize, $this->getPageSizeLimit());
    }

    public function getPageSizeLimit()
    {
        return $this->pageSizeLimit;
    }

}
