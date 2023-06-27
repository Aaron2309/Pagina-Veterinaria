<?php

namespace App\Controllers;

use App\Models\cslperfil;

class perfil extends BaseController
{
    public function index()
    {
        $page= view('shared/encabezado') . 
                view('perfil_view').
                view('shared/pie');
        return $page;
    }

    public function add(){
        if ($_POST) {
        $datos = [
            'id' => $_POST['Nombre'],
            'Nombre' => $_POST['Nombre'],
            'Apellido1' => $_POST['Apellido1'],
            'Apellido2' => $_POST['Apellido2'],
            'Telefono' => $_POST['Telefono'],
            'Direccion' => $_POST['Nombre'],
            'Email' => $_POST['correo'],
            'Nombre_Usuario' => $_POST['Usuario'],
            'Contraseña' => $_POST['Nombre'],

        ];

        $model = new cslperfil();
        $model->add($datos);
        }

        echo view('shared/encabezado');
        echo view('perfil_view');
        echo view('shared/pie');


    }
}
