<?php namespace Controladores;

use Configuracion\Controlador;

class Login extends Controlador
{
    public function __construct()
    {
        parent::__construct();
        $this->idioma->cargar('Login');
    }

    public function ingresar()
    {

    }
}