<?php

namespace App\Controllers;

use App\Models\clsMascotas;

class Mascotas extends BaseController
{
    public function __construct()
    {

        helper("form");
    }

    public function index()
    {
        $m = new clsMascotas();
        $datos = array("filas" => $m->crearFilasCrud());
        $page= view('cruds/Mascotas_view',$datos);
        return $page;
    }

    public function nuevo()
    {

        $datos = array(
            "accion" => "guardar",
            'id' => "",
            'Nombre' => "",
            'Edad' => "",
            'Raza' => "",
            'Dueño' => "",
            'Estado' => ""

        );

        $page = view('cruds/ModificarMas_view', $datos);    
        return $page;
    }

    public function eliminar()
    {
        $request = \config\Services::request();
        if ($request->getGet("id")) {
            $m = new clsMascotas();
            $res = $m->find($request->getGet("id"));
            $datos = array(
                "accion" => "modificarMascota",
                'id' => $res["id"],
                'Nombre' => $res["Nombre"],
                'Edad' => $res["Edad"],
                'Raza' => $res["Raza"],
                'Dueño' => $res["Dueño"],
                'Estado' => $res["Estado"],
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
            'Edad' => "",
            'Raza' => "",
            'Dueño' => "",
            'Estado' => ""

        );
        $request = \config\Services::request();
        if ($request->getGet("id")) {
            $m = new clsMascotas();
            //obtener la informacion del registr
            $res = $m->find($request->getGet("id"));
            $datos = array(
                "accion" => "modificarMascota",
                'id' => $res["id"],
                'Nombre' => $res["Nombre"],
                'Edad' => $res["Edad"],
                'Raza' => $res["Raza"],
                'Dueño' => $res["Dueño"],
                'Estado' => $res["Estado"],
            );
        }
        $page = view('cruds/ModificarMas_view', $datos) ;
        return $page;
    }

    public function guardar()
    {
        $m = new clsMascotas();
        //obtener los datos de la peticion
        $request = \config\Services::request();
        //almacenar en un arreglo los valores del frm
        $datos = array(
            'id' => $request->getPost("id"),
            'Nombre' => $request->getPost("Nombre"),
            'Edad' => $request->getPost("Edad"),
            'Raza' => $request->getPost("Raza"),
            'Dueño' => $request->getPost("Dueño"),
            'Estado' => $request->getPost("Estado"),

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
        $m = new clsMascotas();
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
        $m = new clsMascotas();
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
