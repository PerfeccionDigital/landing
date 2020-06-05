<?php 

require_once 'Database/conexion.php';

class FrontController 
{
    // public function __construct() {
    //     $vModel = new Conexion();
    // }

    public function index() 
    {
        $this->authenticate();
    }

    public static function isEnviromentRemote() {
        if (ENV == 'prod' || ENV == 'dev') 
            return true;
        return false;
    }

    public static function isProduction() {
        if (ENV == 'prod') 
            return true;
        return false;
    }

    public function report() 
    {
        $this->validate();
        $vModel = new Conexion();
        $customers = $vModel->getCustomers();

        Flight::render('home/report.php', array('customers' => $customers));
    }

    public function authenticate() {
        if (ENV == 'dev') {
            if (!isset($_SERVER['PHP_AUTH_USER'])) {
                header('WWW-Authenticate: Basic realm="Mi dominio"');
                header('HTTP/1.0 401 Unauthorized');
                echo '<a href="/">Ir la pagina</a>';
                exit;
            }else {
                if (isset ($_SERVER['PHP_AUTH_USER']) and isset($_SERVER['PHP_AUTH_PW'])) {
                    if (!($_SERVER['PHP_AUTH_USER']  == USER_DOWNLOAD and $_SERVER['PHP_AUTH_PW'] == PASS_DOWNLOAD)) {
                        header('WWW-Authenticate: Basic realm="Mi dominio"');
                        header('HTTP/1.0 401 Unauthorized');
                        echo '<a href="/">Ir la pagina</a>';
                        exit;
                    }
                }
            }
        }
    }

    public function validate() {
        if (!isset($_SERVER['PHP_AUTH_USER'])) {
            header('WWW-Authenticate: Basic realm="Mi dominio"');
            header('HTTP/1.0 401 Unauthorized');
            echo '<a href="/">Ir la pagina</a>';
            exit;
        }else {
            if (isset ($_SERVER['PHP_AUTH_USER']) and isset($_SERVER['PHP_AUTH_PW'])) {
                if (!($_SERVER['PHP_AUTH_USER']  == USER_DOWNLOAD and $_SERVER['PHP_AUTH_PW'] == PASS_DOWNLOAD)) {
                    header('WWW-Authenticate: Basic realm="Mi dominio"');
                    header('HTTP/1.0 401 Unauthorized');
                    echo '<a href="/">Ir la pagina</a>';
                    exit;
                }
            }
        }
    }

    public function dataValueForm() {
        return array(
            '1' => 'Sala',
            '2' => 'Cocina',
            '3' => 'Dormitorio',
            '4' => 'Comedor',
            '5' => 'Baño',
            '6' => 'Preparación de estructuras de tu casa para casos de sismos.',
            '7' => 'Filtración de lluvias, fugas en tanques, piscinas o cisternas',
            '8' => 'Impermeabilización de techos',
        );
    }

    public function gallery()
    {
        $gallery = array(
            array(
                'name' => 'SALAS', 
                'icon' => 'fa-couch',
                'photos' => array(
                    array('name' => 'Foto 1', 'image' => 'SALA-1.png'),
                    array('name' => 'Foto 2', 'image' => 'SALA-2.png'),
                    array('name' => 'Foto 3', 'image' => 'SALA-3.png'),
                )
            ),
            array(
                'name' => 'COCINA', 
                'icon' => 'fa-blender', 
                'photos' => array(
                    array('name' => 'Foto 1', 'image' => 'COCINA-1.png'),
                    array('name' => 'Foto 2', 'image' => 'COCINA-2.png'),
                    array('name' => 'Foto 3', 'image' => 'COCINA-3.png'),
                    array('name' => 'Foto 4', 'image' => 'COCINA-4.png'),
                )
            ),
            array(
                'name' => 'DORMITORIO', 
                'icon' => 'fa-bed', 
                'photos' => array(
                    array('name' => 'Foto 1', 'image' => 'DORMITORIO-1.png'),
                    array('name' => 'Foto 2', 'image' => 'DORMITORIO-2.png'),
                    array('name' => 'Foto 3', 'image' => 'DORMITORIO-3.png'),
                )
            ),
            array(
                'name' => 'COMEDOR', 
                'icon' => 'fa-coffee',       
                'photos' => array(
                    array('name' => 'Foto 1', 'image' => 'COMEDOR-1.png'),
                    array('name' => 'Foto 2', 'image' => 'COMEDOR-2.png'),
                    array('name' => 'Foto 3', 'image' => 'COMEDOR-3.png'),
                )
            ),
            array(
                'name' => 'BAÑO', 
                'icon' => 'fa-bath', 
                'photos' => array(
                    array('name' => 'Foto 1', 'image' => 'BANO-1.png'),
                    array('name' => 'Foto 2', 'image' => 'BANO-2.png'),
                    array('name' => 'Foto 3', 'image' => 'BANO-3.png'),
                )
            )
        );

        return $gallery;
    }

}
