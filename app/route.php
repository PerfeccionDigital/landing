<?php
require_once 'controller/FrontController.php';
require_once 'controller/HomeController.php';
require_once 'controller/Landing1Controller.php';
require_once 'controller/Landing2Controller.php';

// $front = new FrontController();
$home = new HomeController();
// Flight::route('GET /', array($home, 'index'));
Flight::route('GET /reporte', array($home, 'report'));

$landing1 = new Landing1Controller();
Flight::route('GET /remodelacion', array($landing1, 'index'));
Flight::route('GET /remodelacion/gracias', array($landing1, 'thanks'));
Flight::route('POST /remodelacion/gracias', array($landing1, 'thanks'));

$landing2 = new Landing2Controller();
Flight::route('GET /', array($landing2, 'index'));
Flight::route('GET /gracias', array($landing2, 'thanks'));
Flight::route('POST /gracias', array($landing2, 'thanks'));