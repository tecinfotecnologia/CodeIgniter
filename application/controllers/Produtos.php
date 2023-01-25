<?php
defined('BASEPATH') OR exit ('No direct scriot access allowed');

class Produtos extends CI_Controller {
    public function index()
    {
        $texto = "Voce esta usando o controller PRODUTOS";

        $dados = array("mensagem" => $texto);

        $this->load->view("produtos/lista", $dados);
    }

    public function listar_array()
    {
        $this->load->model("ProdutosModel", "produtos");

        $resultado = $this->produtos->listar_todos();

        echo '<pre>';

        var_dump($resultado);
    }

    public function listar_tabela()
    {
        $this->load->model("ProdutosModel", "produtos");

        $resultado = $this->produtos->listar_todos();

        $dados = array("produtos"=> $resultado);

        $this->load->view("produtos/lista_tabela", $dados);
    }
}