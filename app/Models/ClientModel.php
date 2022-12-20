<?php

namespace App\Models;

use CodeIgniter\Model;

class ClientModel extends Model
{
    protected $table = "cliente";
    protected $allowedFields = ["id", "nome", "email", "telefone", "local_nascimento", "data_nascimento", "tipo_plano", "endereco", "empresa"];
    protected $id = "id";

    function get_all_clients()
    {
        return $this
            ->select("*, cliente.id as cliente_id, planos.tipo_plano as plano")
            ->join("planos", "cliente.tipo_plano = planos.id")
            ->findAll();
    }

    function get_client($id)
    {
        return $this
            ->select("*, cliente.id as cliente_id, planos.tipo_plano as plano")
            ->where("cliente.id", $id)
            ->join("planos", "cliente.tipo_plano = planos.id")
            ->findAll();
    }
}
