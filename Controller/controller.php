<?php

require "Model/model.php";
require "View/TelaLogin/view.php";


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