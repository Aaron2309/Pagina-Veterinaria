<?php

namespace App\Controllers;

class acerca extends BaseController
{
    public function index()
    {
        $page= view('shared/encabezado') . 
                view('acerca_view').
                view('shared/pie');
        return $page;
    }
}
