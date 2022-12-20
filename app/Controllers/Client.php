<?php

namespace App\Controllers;

class Client extends BaseController
{
    public function index($id)
    {
        $clienteModel = model("App\Models\ClientModel");
        $dependenteModel = model("App\Models\DependenteModel");
        $dadosCliente = $clienteModel->get_client($id)[0];
        $dadosDependentes = $dependenteModel->get_dependentes($id);

        $dados = [...$dadosCliente, "dependentes" => $dadosDependentes];
        return
            view("parts/header.php", ["CSS" => ["client_view.css"]])
            . view("client_view.php", $dados)
            . view("parts/footer.php");
    }

    public function edit($id) {
        $clienteModel = model("App\Models\ClientModel");
        $dependenteModel = model("App\Models\DependenteModel");
        $dadosCliente = $clienteModel->get_client($id)[0];
        $dadosDependentes = $dependenteModel->get_dependentes($id);

        $dados = [...$dadosCliente, "dependentes" => $dadosDependentes];
        return
            view("parts/header.php", ["CSS" => ["client_edit.css"]])
            . view("client_edit.php", $dados)
            . view("parts/footer.php");
    }

    public function create() {
        return
            view("parts/header.php", ["CSS" => ["client_new.css"]])
            . view("client_new.php")
            . view("parts/footer.php");
    }
}
