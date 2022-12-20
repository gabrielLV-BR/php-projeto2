<?php
namespace App\Controllers;

class Actions extends BaseController
{
    public function update_client() {
        $model = model("App\Models\ClientModel");

        $update = [
            "nome" => $this->request->getPost("nome"),
            "sexo" => $this->request->getPost("sexo"),
            "email" => $this->request->getPost("email"),
            "telefone" => $this->request->getPost("telefone"),
            "tipo_plano" => $this->request->getPost("tipo_plano"),
        ];

        $id = $this->request->getPost();

        $model->update($id, $update);

        return redirect()->to("/");
    }

    public function delete_client($id) {
        $model = model("App\Models\ClientModel");
        $model->delete($id);
        return redirect()->to("/");
    }

    public function create_client() {
        $data = [
            "nome" => $this->request->getPost("nome"),
            "sexo" => $this->request->getPost("sexo"),
            "email" => $this->request->getPost("email"),
            "telefone" => $this->request->getPost("telefone"),
            "tipo_plano" => $this->request->getPost("tipo_plano"),
            "data_nascimento" => $this->request->getPost("data_nascimento"),
            "empresa" => $this->request->getPost("empresa"),
            "local_nascimento" => $this->request->getPost("local_nascimento"),
            "endereco" => $this->request->getPost("endereco"),
        ];

        $model = model("App\Models\ClientModel");
        $model->insert($data);
        return redirect()->to("/");
    }
}
