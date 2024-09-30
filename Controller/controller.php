<?php

require "Model/model.php";
require "index.php";
require "View/PaginaPedidos.php";


class Controller
{

    private $view;
    private $conn;

    public $model;


    public function Monta_Home()
    {
        $view = new View();
        $view->MontaHome();
    }






}



?>
