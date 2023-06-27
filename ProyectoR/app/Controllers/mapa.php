<?php

namespace App\Controllers;

class mapa extends BaseController
{
    public function index()
    {
        $page= view('shared/encabezado') . 
                view('mapa_view').
                view('shared/pie');
        return $page;
    }
}
