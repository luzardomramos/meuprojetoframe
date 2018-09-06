<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Contato extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('Contatos_model', 'contatos');
        //contatos Ã© um alias para o Contatos_model 
    }

    public function index() {
        $this->load->view('template/header');
        $dados['acronico'] = "PF";
        $dados['completo'] = "Projeto Frame";
        $dados['contatos'] = $this->contatos->listar();
        $this->load->view('contato', $dados);
        $this->load->view('template/footer');
    }

    public function inserir() {
        $dados['nome'] = $this->input->post('nome');
        $dados['email'] = $this->input->post('email');
        $this->contatos->inserir($dados);
        redirect('contato');
    }

    public function excluir($id) {
        $this->contatos->deletar($id);
        redirect('contato');
    }

    public function editar($id) {
    $data['acronico'] = "MPF";    
    $data['completo'] = "Meu Projeto Frame";    
    $data['contatoEditar'] = $this->contatos->editar($id);
    $this->load->view('contatoEditar', $data);    
    }

    public function atualizar() {
        $data['id'] = $this->input->post('id');
        $data['nome'] = $this->input->post('nome');
        $data['email'] = $this->input->post('email');
        $this->contatos->atualizar($data);
        redirect('contato');
    }
}

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */



