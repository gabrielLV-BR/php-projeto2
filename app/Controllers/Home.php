<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $clienteModel = model("App\\Models\\ClientModel");
        $clientes = $clienteModel->get_all_clients();

        return
            view("parts/header.php", [ "CSS" => ["home.css"] ])
            . view("home.php", ["clientes" => $clientes])
            . view("parts/footer.php");
    }
}
