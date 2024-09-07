<?php

require "Model/model.php";
require "View/TelaLogin/view.php";
require "View/TelaNovoPedido/view.php";


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

     public function Registra_Pedidos()
    {
        $view = new View();
        $view->PaginaPedidos();
    }




}



?>
