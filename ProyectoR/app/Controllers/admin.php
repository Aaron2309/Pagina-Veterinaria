<?php

namespace App\Controllers;

class admin extends BaseController
{
    public function index()
    {
        $page=
                view('admin_view')
                ;
        return $page;
    }
}