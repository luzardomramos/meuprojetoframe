<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Contato extends CI_Controller {

    function __construct() {
        parent::__construct();
        if (!$this->session->userdata('estou_logado')) {
            redirect('login');
        }
        $this->load->model('Contatos_model', 'contatos');
        $this->load->model('Funcao_model', 'funcao');
        //contatos Ã© um alias para o Contatos_model 
    }

    public function index() {
        $this->load->view('template/header');
        $dados['acronico'] = "PF";
        $dados['completo'] = "Projeto Frame";
        $dados['contatos'] = $this->contatos->listar();
        $dados['funcao'] = $this->funcao->listar();
        $this->load->view('contato', $dados);
        $this->load->view('template/footer');
    }

    public function inserir() {
        $dados['nome'] = mb_convert_case($this->input->post('nome'), MB_CASE_UPPER);
        $dados['email'] = mb_convert_case($this->input->post('email'), MB_CASE_LOWER);
        $dados['idfuncao'] = $this->input->post('idfuncao');
        $result = $this->contatos->inserir($dados);

        if ($result == true) {


            $this->session->set_flashdata('sucesso', 'msg');
            redirect('contato');
        } else {
            $this->session->set_flashdata('falha', 'msg');
            redirect('contato');
        }
    }

    public function excluir($id) {
        $result = $this->contatos->deletar($id);

        if ($result == true) {
            $this->session->set_flashdata('excluirS', 'msg');
            redirect('contato');
        } else {
            $this->session->set_flashdata('excluirF', 'msg');
            redirect('contato');
        }
    }

    public function editar($id) {
        $data['acronico'] = "MPF";
        $data['completo'] = "Meu Projeto Frame";
        $data['contatoEditar'] = $this->contatos->editar($id);
        $data['funcao'] = $this->funcao->listar();
        $this->load->view('template/header');
        $this->load->view('contatoEditar', $data);
        $this->load->view('template/footer');
    }

    public function atualizar() {
        $data['id'] = $this->input->post('id');
        $data['nome'] = $this->input->post('nome');
        $data['email'] = $this->input->post('email');
        $result = $this->contatos->atualizar($data);

        if ($result == true) {
            $this->session->set_flashdata('sucessoA', 'msg');
            redirect('contato');
        } else {
            $this->session->set_flashdata('falhaA', 'msg');
            redirect('contato');
        }
    }

}
