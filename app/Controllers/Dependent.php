<?php

namespace App\Controllers;

class Dependent extends BaseController
{
    public function create($id) {
        $model = model("App\Models\ClientModel");
        $dados = $model->get_client($id)[0];

        return view("parts/header", [ "CSS" => ["client_edit.css"] ])
            .view("dependent_new", $dados)
            .view("parts/footer");
    }
}
