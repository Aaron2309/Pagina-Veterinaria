<?php

namespace App\Controllers;

use App\Models\clsVeterinario;


class Veterinarios extends BaseController
{
public function __construct()
{

    helper("form");
}

public function index()
{
    $m = new clsVeterinario();
    $datos = array("filas" => $m->crearFilasCrud());
    $page= view('cruds/Veterinarios_view',$datos);
    return $page;
}

public function nuevo()
{

    $datos = array(
        "accion" => "guardar",
        'id' => "",
        'Nombre' => "",
        'Apellido_1' => "",
        'Apellido_2' => "",
        'Telefono' => "",
        'Direccion' => ""

    );

    $page = view('cruds/ModificarVeterinario_view', $datos);    
    return $page;
}

public function eliminar()
{
    $request = \config\Services::request();
    if ($request->getGet("id")) {
        $m = new clsVeterinario();
        $res = $m->find($request->getGet("id"));
        $datos = array(
            "accion" => "modificarVeterinario",
            'id' => $res["id"],
            'Nombre' => $res["Nombre"],
            'Apellido_1' => $res["Apellido_1"],
            'Apellido_2' => $res["Apellido_2"],
            'Telefono' => $res["Telefono"],
            'Direccion' => $res["Direccion"],
        );
        $page =view('cruds/EliminarVeterinario_view', $datos);
        return $page;
    }
}

public function modificar()
{

    $datos = array(
        "accion" => "modificarVeterinario",
        'id' => "",
        'Nombre' => "",
        'Apellido_1' => "",
        'Apellido_2' => "",
        'Telefono' => "",
        '' => ""

    );
    $request = \config\Services::request();
    if ($request->getGet("id")) {
        $m = new clsVeterinario();
        //obtener la informacion del registr
        $res = $m->find($request->getGet("id"));
        $datos = array(
            "accion" => "modificarVeterinario",
            'id' => $res["id"],
            'Nombre' => $res["Nombre"],
            'Apellido_1' => $res["Apellido_1"],
            'Apellido_2' => $res["Apellido_2"],
            'Telefono' => $res["Telefono"],
            'Direccion' => $res["Direccion"],
        );
    }
    $page = view('cruds/ModificarVeterinario_view', $datos) ;
    return $page;
}

public function guardar()
{
    $m = new clsVeterinario();
    //obtener los datos de la peticion
    $request = \config\Services::request();
    //almacenar en un arreglo los valores del frm
    $datos = array(
        'id' => $request->getPost("id"),
        'Nombre' => $request->getPost("Nombre"),
        'Apellido_1' => $request->getPost("Apellido_1"),
        'Apellido_2' => $request->getPost("Apellido_2"),
        'Telefono' => $request->getPost("Telefono"),
        'Direccion' => $request->getPost("Direccion"),

    );

    //insertar en la bd
    $m->insert($datos);

    //datos de la respuesta
    $respuesta = array(
        "msj" => "Datos Guardados Correctamente",
        "filas" => $m->crearFilasCrud()
    );

    //cargamos la vista
    $page =view('cruds/Veterinarios_view', $respuesta) ;
    return $page;
}

public function modificarVeterinario()
{
    $m = new clsVeterinario();
    $request = \config\Services::request();
    $datos = array(
        'id' => $request->getPost("id"),
        'Nombre' => $request->getPost("Nombre"),
        'Apellido_1' => $request->getPost("Apellido_1"),
        'Apellido_2' => $request->getPost("Apellido_2"),
        'Telefono' => $request->getPost("Telefono"),
        '   ' => $request->getPost("Direccion")

    );

    $m->update($datos["id"], $datos); 

    $respuesta = array(
        "msj" => "Datos modificados Correctamente",
        "filas" => $m->crearFilasCrud()
    );

    //cargamos la vista
    $page = view('cruds/Veterinarios_view', $respuesta);
    return $page;
}

public function eliminarVeterinario()
{
    $m = new clsVeterinario();
    //obtener los datos de la peticion
    $request = \config\Services::request();

    $m->delete($request->getGet("id"));
    $respuesta = array(
        "msj" => "Datos Guardados Correctamente",
        "filas" => $m->crearFilasCrud()
    );
    //cargamos la vista
    $page =view('cruds/Veterinarios_view', $respuesta) ;
    return $page;
}
}
