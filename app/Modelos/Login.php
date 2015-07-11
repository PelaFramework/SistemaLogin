<?php namespace Modelos;

use Configuracion\Modelo;

class Login extends Modelo{

    public function obtenerUsuario($usuario){
        $data = $this->db->select("SELECT password FROM ".PREFIX."Usuarios WHERE emailUsuario = :usuario", array(':usuario' => $usuario));
        return array('password'=>$data[0]->password);
    }

}