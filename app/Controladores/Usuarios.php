<?php namespace Controladores;

use Configuracion\Vistas;
use Configuracion\Controlador;

class Usuarios extends Controlador{

    public function __construct()
    {
        parent::__construct();
        $this->idioma->cargar('Usuarios');
    }

    public function index()
    {
        $data['titulo'] = $this->idioma->obtener('inicio_titulo');
        $data['inicio_mensaje'] = $this->idioma->obtener('inicio_mensaje');

        Vistas::mostrarPlantilla('encabezado', $data);
        Vistas::mostrar('usuarios/inicio', $data);
        Vistas::mostrarPlantilla('piedepagina', $data);
    }

}
