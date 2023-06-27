<?php

namespace App\Controllers;

class expediente extends BaseController
{
    public function index()
    {
        $page=  
                view('expediente_view');
        return $page;
    }
}
