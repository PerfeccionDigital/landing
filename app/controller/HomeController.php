<?php 

class HomeController extends FrontController
{
    public $vModel;

    public function index() 
    {
        Flight::render('home/index.php');
    }
}
