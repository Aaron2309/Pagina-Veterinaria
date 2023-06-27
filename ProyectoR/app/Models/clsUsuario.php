<?php

namespace App\Models;

use CodeIgniter\Model;

class clsUsuario extends model
{
    protected $table      = 'mascotas';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = false;

    protected $returnType     = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = [
        'id', 'Nombre', 'Apellido1', 'Apellido2','Telefono','Direccion','Email','Nombre_Usuario', 'Contraseña',
    ];

    protected $useTimestamps = false;
    /*protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';*/

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;



    public $id;
    public $Nombre;
    public $Apellido1;
    public $Apellido2;
    public $Telefono;
    public $Direccion;
    public $Email;
    public $Nombre_Usuario;
    public $Contraseña;


    public static function constructorParametro(
        $id,
        $Nombre,
        $Apellido1,
        $Apellido2,
        $Telefono,
        $Direccion,
        $Email,
        $Nombre_Usuario,
        $Contraseña
    ) {
        $v = new clsUsuario();
        $v->id = $id;
        $v->Nombre = $Nombre;
        $v->Apellido1 = $Apellido1;
        $v->Apellido2 = $Apellido2;
        $v->Telefono = $Telefono;
        $v->Direccion = $Direccion;
        $v->Email = $Email;
        $v->Nombre_Usuario = $Nombre_Usuario;
        $v->Contraseña = $Contraseña;
        return $v;
    }


    public function crearFilasCrud()
    {
        $filas = "";
        $consulta = $this->findAll();

        foreach ($consulta as $key => $m) {
            $filas .= "<tr>
                                <td scope='col'>$m[id]</td>
                                <td scope='col'>$m[Nombre]</td>
                                <td scope='col'>$m[Apellido1]</td>
                                <td scope='col'>$m[Apellido2]</td>
                                <td scope='col'>$m[Telefono]</td>
                                <td scope='col'>$m[Direccion]</td>
                                <td scope='col'>$m[Email]</td>
                                <td scope='col'>$m[Nombre_Usuario]</td>
                                <td scope='col'>$m[Contraseña]</td>
                                <td scope='col'>
                                    <a href=" . base_url("index.php/Mascotas/modificar?id=$m[id]")  . " <button type=button></button><img src='http://localhost/ProyectoR/assets/img/editar.png' class='imagenFoto card-img-top' ></a>
                                    <a href=" . base_url("index.php/Mascotas/eliminar?id=$m[id]")  . " <button type=button></button></i><img src='http://localhost/ProyectoR/assets/img/Borrar.png' class='imagenFoto card-img-top' ></a>
                                    <a href=" . base_url("index.php/PDF?id=$m[id]")  . " <button type=button></button></i><img src='http://localhost/ProyectoR/assets/img/PDF.png' class='imagenFoto card-img-top' ></a>
                                </td>
                            </tr>";
        }

        return $filas;
    }
}