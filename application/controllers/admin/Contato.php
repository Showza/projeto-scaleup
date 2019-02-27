<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contato extends CI_Controller {

	public function __construct(){
		parent::__construct();
		if(!$this->session->userdata('logado')){
			redirect(base_url('admin/login'));
		}

		$this->load->model('contato_model','modelcontato');
	}

	public function index()
	{
		$this->load->library('table');
		$dados['contato']= $this->modelcontato->mostrar_contato();

		//Dados a serem enviados para o Cabeçalho
		$dados['titulo'] = 'Painel de Controle';
		$dados['subtitulo'] = 'Contato';

		$this->load->view('backend/template/html-header', $dados);
		$this->load->view('backend/template/template');
		$this->load->view('backend/contato');
		$this->load->view('backend/template/html-footer');
	}

	public function inserir()
   {
	   $this->load->library('form_validation');
	   $this->form_validation->set_rules('txt-nome','Nome',
		   'required|min_length[3]');
	   $this->form_validation->set_rules('txt-email','email',
		   'required|valid_email');

	   if($this->form_validation->run() == FALSE){
		   $this->index();
	   }
	   else{
		   $nome = $this->input->post('txt-nome');
		   $email = $this->input->post('txt-email');

        if($this->modelcontato->adicionar($nome, $email)){
        	   redirect(base_url('admin/contato'));
           }
        else{
           echo "Houve um erro no sistema!";
           echo $this->upload->display_errors();
        }
	  }
   }

   public function alterar($id)
   {
	   $this->load->library('table');
	   $dados['contato'] = $this->modelcontato->listar_contato($id); // Traz os dados do model noticias_model.
	   $dados['titulo']= 'Painel Administrativo';
	   $dados['subtitulo'] = 'Contato';

	   $this->load->view('backend/template/html-header', $dados);
	   $this->load->view('backend/template/template');
	   $this->load->view('backend/alterar-contato');
	   $this->load->view('backend/template/html-footer');
   }

   public function salvar_alteracoes($id)
   {
	   $this->load->library('form_validation');
	   $this->form_validation->set_rules('txt-nome','Nome','required|min_length[3]');
	   $this->form_validation->set_rules('txt-email','email','required|valid_email');

	   if($this->form_validation->run() == FALSE){
		   $this->alterar($id);
	   }
	   else{
		   $nome = $this->input->post('txt-nome');
		   $email = $this->input->post('txt-email');

		   if($this->modelcontato->alterar($id, $nome, $email)){
			   redirect(base_url('admin/contato'));
		   }
		   else{
			   echo "Houve um erro no sistema!";
		   }
	   }
   }

   public function remover($id)
   {
	   if($this->modelcontato->remover($id)){
		   redirect(base_url('admin/contato'));
	   }
	   else{
		   echo "Houve um erro no sistema!";
	   }

   }
}
