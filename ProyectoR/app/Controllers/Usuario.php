<?php

namespace App\Controllers;

use App\Models\clsUsuario;

class Usuario extends BaseController
{
    public function __construct()
    {

        helper("form");
    }

    public function index()
    {
        $m = new clsUsuario();
        $datos = array("filas" => $m->crearFilasCrud());
        $page= view('cruds/Usuario',$datos);
        return $page;
    }

    public function nuevo()
    {

        $datos = array(
            "accion" => "guardar",
            'id' => "",
            'Nombre' => "",
            'Apellido1' => "",
            'Apellido2' => "",
            'Telefono' => "",
            'Direccion' => "",
            'Email' => "",
            'Nombre_Usuario' => "",
            'Contraseña' => ""



        );

        $page = view('cruds/ModificarMas_view', $datos);    
        return $page;
    }

    public function eliminar()
    {
        $request = \config\Services::request();
        if ($request->getGet("id")) {
            $m = new clsUsuario();
            $res = $m->find($request->getGet("id"));
            $datos = array(
                "accion" => "modificarMascota",
                'id' => $res["id"],
                'Nombre' => $res["Nombre"],
                'Apellido1' => $res["Apellido1"],
                'Apellido2' => $res["Apellido2"],
                'Telefono' => $res["Telefono"],
                'Direccion' => $res["Direccion"],
                'Email' => $res["Email"],
                'Nombre_Usuario' => $res["Nombre_Usuario"],
                'Contraseña' => $res["Contraseña"],

            );
            $page =view('cruds/EliminarMas', $datos);
            return $page;
        }
    }

    public function modificar()
    {

        $datos = array(
            "accion" => "modificarMascota",
            'id' => "",
            'Nombre' => "",
            'Apellido1' => "",
            'Apellido2' => "",
            'Telefono' => "",
            'Direccion' => "",
            'Email' => "",
            'Nombre_Usuario' => "",
            'Contraseña' => ""

        );
        $request = \config\Services::request();
        if ($request->getGet("id")) {
            $m = new clsUsuario();
            //obtener la informacion del registr
            $res = $m->find($request->getGet("id"));
            $datos = array(
                "accion" => "modificarMascota",
                'id' => $res["id"],
                'Nombre' => $res["Nombre"],
                'Apellido1' => $res["Apellido1"],
                'Apellido2' => $res["Apellido2"],
                'Telefono' => $res["Telefono"],
                'Direccion' => $res["Direccion"],
                'Email' => $res["Email"],
                'Nombre_Usuario' => $res["Nombre_Usuario"],
                'Contraseña' => $res["Contraseña"],


            );
        }
        $page = view('cruds/ModificarMas_view', $datos) ;
        return $page;
    }

    public function guardar()
    {
        $m = new clsUsuario();
        //obtener los datos de la peticion
        $request = \config\Services::request();
        //almacenar en un arreglo los valores del frm
        $datos = array(
            'id' => $request->getPost("id"),
            'Nombre' => $request->getPost("Nombre"),
            'Apellido1' => $request->getPost("Apellido1"),
            'Apellido2' => $request->getPost("Apellido2"),
            'Telefono' => $request->getPost("Telefono"),
            'Direccion' => $request->getPost("Direccion"),
            'Email' => $request->getPost("Email"),
            'Nombre_Usuario' => $request->getPost("Nombre_Usuario"),
            'Contraseña' => $request->getPost("Contraseña"),


        );

        //insertar en la bd
        $m->insert($datos);

        //datos de la respuesta
        $respuesta = array(
            "msj" => "Datos Guardados Correctamente",
            "filas" => $m->crearFilasCrud()
        );

        //cargamos la vista
        $page =view('cruds/Mascotas_view', $respuesta) ;
        return $page;
    }

    public function modificarMascota()
    {
        $m = new clsUsuario();
        $request = \config\Services::request();
        $datos = array(
            'id' => $request->getPost("id"),
            'Nombre' => $request->getPost("Nombre"),
            'Edad' => $request->getPost("Edad"),
            'Raza' => $request->getPost("Raza"),
            'Dueño' => $request->getPost("Dueño"),
            'Estado' => $request->getPost("Estado")

        );

        $m->update($datos["id"], $datos); 

        $respuesta = array(
            "msj" => "Datos modificados Correctamente",
            "filas" => $m->crearFilasCrud()
        );

        //cargamos la vista
        $page = view('cruds/Mascotas_view', $respuesta);
        return $page;
    }

    public function eliminarMascota()
    {
        $m = new clsUsuario();
        //obtener los datos de la peticion
        $request = \config\Services::request();

        $m->delete($request->getGet("id"));
        $respuesta = array(
            "msj" => "Datos Guardados Correctamente",
            "filas" => $m->crearFilasCrud()
        );
        //cargamos la vista
        $page =view('cruds/Mascotas_view', $respuesta) ;
        return $page;
    }
}