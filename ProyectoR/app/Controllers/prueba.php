<?php

namespace App\Controllers;

class acerca extends BaseController
{
    public function index()
    {
        $page= view('shared/encabezado') . 
                view('prueba').
                view('shared/pie');
        return $page;
    }
}