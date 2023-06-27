<?php

namespace App\Models;

use CodeIgniter\Model;

class clsCrudExpediente extends model
{
    protected $table      = 'expediente';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = false;

    protected $returnType     = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = [
        'id', 'Mascota', 'Veterinario', 'Fecha','Diagnostico', 'Tratamiento',
    ];

    protected $useTimestamps = false;
    /*protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';*/

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;



    public $id;
    public $Mascota;
    public $Veterinario;
    public $Fecha;
    public $Diagnostico;
    public $Tratamiento;


    public static function constructorParametro(
        $id,
        $Mascota,
        $Veterinario,
        $Fecha,
        $Diagnostico,
        $Tratamiento
    ) {
        $v = new clsCrudExpediente();
        $v->id = $id;
        $v->Mascota = $Mascota;
        $v->Veterinario = $Veterinario;
        $v->Fecha = $Fecha;
        $v->Diagnostico = $Diagnostico;
        $v->Tratamiento = $Tratamiento;
        return $v;
    }


    public function crearFilasCrud()
    {
        $filas = "";
        $consulta = $this->findAll();

        foreach ($consulta as $key => $m) {
            $filas .= "<tr>
                                <td scope='col'>$m[id]</td>
                                <td scope='col'>$m[Mascota]</td>
                                <td scope='col'>$m[Veterinario]</td>
                                <td scope='col'>$m[Fecha]</td>
                                <td scope='col'>$m[Diagnostico]</td>
                                <td scope='col'>$m[Tratamiento]</td>
                                <td scope='col'>
                                    <a href=" . base_url("index.php/Crud_Expe/modificar?id=$m[id]")  . " <button type=button></button><img src='http://localhost/ProyectoR/assets/img/editar.png' class='imagenFoto card-img-top' ></a>
                                    <a href=" . base_url("index.php/Crud_Expe/eliminar?id=$m[id]")  . " <button type=button></button></i><img src='http://localhost/ProyectoR/assets/img/Borrar.png' class='imagenFoto card-img-top' ></a>
                                    <a href=" . base_url("index.php/PDF?id=$m[id]")  . " <button type=button></button></i><img src='http://localhost/ProyectoR/assets/img/PDF.png' class='imagenFoto card-img-top' ></a>
                                    </td>
                            </tr>";
        }

        return $filas;
    }
}
