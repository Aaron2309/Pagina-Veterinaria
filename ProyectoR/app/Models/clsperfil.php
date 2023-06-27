<?php
namespace app\Models;

use CodeIgniter\Model;


class cslperfil extends Model{
    protected $table = 'usuario';

    protected $allowedFields = ['id', 'Nombre', 'Apellido1', 'Apellido2', 'Telefono', 'Direcion', 'Email', 'Nombre_Usuario', 'Contraseña'];


    public function add($dato){
        
        return $this-> save($dato);
    }
}


