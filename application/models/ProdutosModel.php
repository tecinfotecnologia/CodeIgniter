<?php
defined('BASEPATH') OR exit ('No direct scriot access allowed');

class ProdutosModel extends CI_Model {
    public function listar_todos()
    {
        $this->db->select("codigo, nome, preco");

        $resultado = $this->db->get("produtos")->result();

        return $resultado;
    }
}