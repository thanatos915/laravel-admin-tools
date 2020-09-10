<?php


namespace App\Http\Controllers;


class IndexController extends Controller
{

    public function index()
    {
        $app = app();
        return $app->version();
    }

}
