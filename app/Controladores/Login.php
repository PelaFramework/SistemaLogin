<?php namespace Controladores;

use Configuracion\Controlador,
    Configuracion\Sesiones,
    Configuracion\Url,
    Configuracion\Vistas;

class Login extends Controlador
{
    private $_modelo;

    public function __construct()
    {
        parent::__construct();
        $this->idioma->cargar('Login');
        $this->_modelo = new \Modelos\Login();
    }

    public function ingresar()
    {
        if (Sesiones::obtenerValor('logueadoAdmin')) {
            Url::redirigir('Admin');
        }
        if (Sesiones::obtenerValor('logueadoUsuario')) {
            Url::redirigir('Usuarios');
        }

        $data['titulo'] = $this->idioma->obtener('login_titulo');

        if (isset($_POST['submit']))
        {
            $usuario = $_POST['usuario'];
            $password = $_POST['password'];
            $consultaModelo = $this->_modelo->obtenerUsuario($_POST['usuario']);

            if ($password == $consultaModelo['password'] && $password == !null)
            {
                Sesiones::establecer('logueadoUsuario', true);
                Sesiones::establecer('emailUsuario', $usuario);
                Url::redirigir('Usuarios');
            }

            else
            {
                $error[] = $this->idioma->obtener('error_login');
            }
        }

        Vistas::mostrarPlantilla('encabezado', $data);
        Vistas::mostrar('login/ingresar', $data, $error);
        Vistas::mostrarPlantilla('piedepagina', $data);
    }

    public function desconectar()
    {
        Sesiones::terminarSesion();
        Url::redirigir('Login');
    }
}