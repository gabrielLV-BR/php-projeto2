<?php

namespace App\Controllers;

class Client extends BaseController
{
    public function index($index)
    {
        $clienteModel = model("App\\Models\\ClientModel");
        $dadosCliente = $clienteModel->get_client($index)[0];

        return
            view("parts/header.php", ["CSS" => ["client_view.css"]])
            . view("client_view.php", $dadosCliente)
            . view("parts/footer.php");
    }

    public function edit($id) {
        $clienteModel = model("App\Models\ClientModel");
        $dadosCliente = $clienteModel->get_client($id)[0];

        return
            view("parts/header.php", ["CSS" => ["client_edit.css"]])
            . view("client_edit.php", $dadosCliente)
            . view("parts/footer.php");
    }

    public function create() {
        return
            view("parts/header.php", ["CSS" => ["client_new.css"]])
            . view("client_new.php")
            . view("parts/footer.php");
    }
}
