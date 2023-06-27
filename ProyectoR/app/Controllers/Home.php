<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $page= view('shared/encabezado') . 
                view('index_view').
                view('shared/pie');
        return $page;
    }
}
