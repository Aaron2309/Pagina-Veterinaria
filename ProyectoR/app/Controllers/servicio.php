<?php

namespace App\Controllers;

class servicio extends BaseController
{
    public function index()
    {
        $page= view('shared/encabezado') . 
                view('servicios_view').
                view('shared/pie');
        return $page;
    }
}
