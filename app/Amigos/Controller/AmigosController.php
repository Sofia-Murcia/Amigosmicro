<?php
namespace App\Amigos\Controllers;

use App\Amigos\Models\Contacto;
use Exception;

class AmigosController {

    function getAmigos(){
        $rows = Amigo::all();
        return $rows->toJson();
    }
    
    function guardarAmigo($data){
        $amigo = new Amigo();
        $amigo->nombre = $data['nombre'];
        $amigo->email = $data['email'];
        $amigo->telefono = $data['telefono'];
        $amigo->save();
        return $amigo->toJson();
    }

    function getAmigo($id){
        $amigo = Amigo::find($id);
        if(empty($amigo)){
            throw new Exception("El amigo $id no existe", 1);
        }
        return $amigo;
    }

    function modificarAmigo($id, $data){
        $amigo = $this->getAmigo($id);
        $amigo->nombre = $data['nombre'];
        $amigo->email = $data['email'];
        $amigo->telefono = $data['telefono'];
        $amigo->save();
        return $amigo;
    }

    function borrarAmigo($id){
        $amigo = $this->getAmigo($id);
        $amigo->delete();
    }
}