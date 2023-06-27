<?php

namespace App\Controllers;

class inicio extends BaseController
{
    public function index()
    {
        $page= view('shared/encabezado') . 
                view('inicio_sesion_view').
                view('shared/pie');
        return $page;
    }
}
