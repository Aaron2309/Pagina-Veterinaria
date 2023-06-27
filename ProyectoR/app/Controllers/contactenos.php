<?php

namespace App\Controllers;

class contactenos extends BaseController
{
    public function index()
    {
        $page= view('shared/encabezado') . 
                view('contactenos_view').
                view('shared/pie');
        return $page;
    }
}
