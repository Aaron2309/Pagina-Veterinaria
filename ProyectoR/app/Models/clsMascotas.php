<?php

namespace App\Models;

use CodeIgniter\Model;

class clsMascotas extends model
{
    protected $table      = 'mascotas';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = false;

    protected $returnType     = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = [
        'id', 'Nombre', 'Edad', 'Raza','Dueño', 'Estado',
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
    public $Edad;
    public $Raza;
    public $Dueño;
    public $Estado;


    public static function constructorParametro(
        $id,
        $Nombre,
        $Edad,
        $Raza,
        $Dueño,
        $Estado
    ) {
        $v = new clsMascotas();
        $v->id = $id;
        $v->Nombre = $Nombre;
        $v->Edad = $Edad;
        $v->Raza = $Raza;
        $v->Dueño = $Dueño;
        $v->Estado = $Estado;
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
                                <td scope='col'>$m[Edad]</td>
                                <td scope='col'>$m[Raza]</td>
                                <td scope='col'>$m[Dueño]</td>
                                <td scope='col'>$m[Estado]</td>
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
