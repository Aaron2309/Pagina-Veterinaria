<?php

namespace App\Models;

use CodeIgniter\Model;

class clsVeterinario extends model
{
    protected $table = 'veterinario';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = false;

    protected $returnType     = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = [
        'id', 'Nombre', 'Apellido_1', 'Apellido_2','Telefono', 'Direccion',
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
    public $Apellido_1;
    public $Apellido_2;
    public $Telefono;
    public $Direccion;


    public static function constructorParametro(
        $id,
        $Nombre,
        $Apellido_1,
        $Apellido_2,
        $Telefono,
        $Direccion
    ) {
        $v = new clsVeterinario();
        $v->id = $id;
        $v->Nombre = $Nombre;
        $v->Apellido_1 = $Apellido_1;
        $v->Apellido_2 = $Apellido_2;
        $v->Telefono = $Telefono;
        $v->Direccion = $Direccion;
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
                                <td scope='col'>$m[Apellido_1]</td>
                                <td scope='col'>$m[Apellido_2]</td>
                                <td scope='col'>$m[Telefono]</td>
                                <td scope='col'>$m[Direccion]</td>
                                <td scope='col'>
                                    <a href=" . base_url("index.php/Veterinarios/modificar?id=$m[id]")  . " <button type=button></button><img src='http://localhost/ProyectoR/assets/img/editar.png' class='imagenFoto card-img-top' ></a>
                                    <a href=" . base_url("index.php/Veterinarios/eliminar?id=$m[id]")  . " <button type=button></button><img src='http://localhost/ProyectoR/assets/img/Borrar.png' class='imagenFoto card-img-top' ></a>
                                    <a href=" . base_url("index.php/PDF?id=$m[id]")  . " <button type=button></button></i><img src='http://localhost/ProyectoR/assets/img/PDF.png' class='imagenFoto card-img-top' ></a>
                                    </td>
                            </tr>";
        }

        return $filas;
    }
}
