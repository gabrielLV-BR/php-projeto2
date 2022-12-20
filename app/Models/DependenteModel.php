<?php

namespace App\Models;

use CodeIgniter\Model;

class DependenteModel extends Model
{
    protected $table = "dependentes";
    protected $allowedFields = ["id", "nome", "titular"];
    protected $id = "id";

    public function get_dependentes($id) {
        return $this->select("dependentes.id, dependentes.nome, dependentes.titular")
            ->join("cliente", "cliente.id = dependentes.titular")
            ->where("cliente.id", $id)
            ->findAll();
    }
}
