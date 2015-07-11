<?php namespace Configuracion;

class Configuracion
{
    public function __construct()
    {
        ob_start();
        define('DIR', 'http://localhost/');
        define('CONTROLADOR_INICIAL', 'Inicio');
        define('METODO_INICIAL', 'index');
        define('PLANTILLA', 'default');
        define('SIGLAS_LENGUAJE', 'es');

        define('DB_TYPE', 'mysql');
        define('DB_HOST', 'localhost');
        define('DB_NAME', 'NombreBaseDeDatos');
        define('DB_USER', 'root');
        define('DB_PASS', '');
        define('PREFIX', 'Pela_');

        /**
         * Se recomienda utilizar un 'prefix'
         * para poder especificar que tablas utilizarán con este framework
         * sin modificar las que actualmente se usen.
         */
        define('SESSION_PREFIX', 'Pela_');

        /**
         * Para definir el titulo de la web a todas las páginas
         * Luego pueden utilizar $data['titulo'] = 'Nombre pagina';
         * y el titulo se visualizará: "Nombre pagina - TITULO_WEB
         */
        define('TITULO_WEB', 'Pela Framework');
        define('EMAIL_DEFAULT', 'mail@mail.com');

        Sesiones::iniciar();
    }
}
