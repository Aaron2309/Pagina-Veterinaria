<?php

namespace App\Controllers;

use App\Models\clsCrudExpediente;


class Crud_Expe extends BaseController
{
    public function __construct()
    {

        helper("form");
    }

    public function index()
    {
        $m = new clsCrudExpediente();
        $datos = array("filas" => $m->crearFilasCrud());
        $page= view('cruds/Crud_Expe_view',$datos);
        return $page;
    }

    public function nuevo()
    {

        $datos = array(
            "accion" => "guardar",
            'id' => "",
            'Mascota' => "",
            'Veterinario' => "",
            'Fecha' => "",
            'Diagnostico' => "",
            'Tratamiento' => ""

        );

        $page = view('cruds/Modificar_Expe_view', $datos);    
        return $page;
    }

    public function eliminar()
    {
        $request = \config\Services::request();
        if ($request->getGet("id")) {
            $m = new clsCrudExpediente();
            $res = $m->find($request->getGet("id"));
            $datos = array(
                "accion" => "modificarExpediente",
                'id' => $res["id"],
                'Mascota' => $res["Mascota"],
                'Veterinario' => $res["Veterinario"],
                'Fecha' => $res["Fecha"],
                'Diagnostico' => $res["Diagnostico"],
                'Tratamiento' => $res["Tratamiento"],
            );
            $page =view('cruds/Eliminar_Expe_view', $datos);
            return $page;
        }
    }

    public function modificar()
    {

        $datos = array(
            "accion" => "modificarExpediente",
            'id' => "",
            'Mascota' => "",
            'Veterinario' => "",
            'Fecha' => "",
            'Diagnostico' => "",
            'Tratamiento' => ""

        );
        $request = \config\Services::request();
        if ($request->getGet("id")) {
            $m = new clsCrudExpediente();
            //obtener la informacion del registr
            $res = $m->find($request->getGet("id"));
            $datos = array(
                "accion" => "modificarExpediente",
                'id' => $res["id"],
                'Mascota' => $res["Mascota"],
                'Veterinario' => $res["Veterinario"],
                'Fecha' => $res["Fecha"],
                'Diagnostico' => $res["Diagnostico"],
                'Tratamiento' => $res["Tratamiento"],
            );
        }
        $page = view('cruds/Modificar_Expe_view', $datos) ;
        return $page;
    }

    public function guardar()
    {
        $m = new clsCrudExpediente();
        //obtener los datos de la peticion
        $request = \config\Services::request();
        //almacenar en un arreglo los valores del frm
        $datos = array(
            'id' => $request->getPost("id"),
            'Mascota' => $request->getPost("Mascota"),
            'Veterinario' => $request->getPost("Veterinario"),
            'Fecha' => $request->getPost("Fecha"),
            'Diagnostico' => $request->getPost("Diagnostico"),
            'Tratamiento' => $request->getPost("Tratamiento"),

        );

        //insertar en la bd
        $m->insert($datos);

        //datos de la respuesta
        $respuesta = array(
            "msj" => "Datos Guardados Correctamente",
            "filas" => $m->crearFilasCrud()
        );

        //cargamos la vista
        $page =view('cruds/Crud_Expe_view', $respuesta) ;
        return $page;
    }

    public function modificarExpediente()
    {
        $m = new clsCrudExpediente();
        $request = \config\Services::request();
        $datos = array(
            'id' => $request->getPost("id"),
            'Mascota' => $request->getPost("Mascota"),
            'Veterinario' => $request->getPost("Veterinario"),
            'Fecha' => $request->getPost("Fecha"),
            'Diagnostico' => $request->getPost("Diagnostico"),
            'Tratamiento' => $request->getPost("Tratamiento")

        );

        $m->update($datos["id"], $datos); 

        $respuesta = array(
            "msj" => "Datos modificados Correctamente",
            "filas" => $m->crearFilasCrud()
        );

        //cargamos la vista
        $page = view('cruds/Crud_Expe_view', $respuesta);
        return $page;
    }

    public function eliminarExpediente()
    {
        $m = new clsCrudExpediente();
        //obtener los datos de la peticion
        $request = \config\Services::request();

        $m->delete($request->getGet("id"));
        $respuesta = array(
            "msj" => "Datos Guardados Correctamente",
            "filas" => $m->crearFilasCrud()
        );
        //cargamos la vista
        $page =view('cruds/Crud_Expe_view', $respuesta) ;
        return $page;
    }
}
