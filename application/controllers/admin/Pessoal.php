<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pessoal extends CI_Controller {

	public function __construct(){
		parent::__construct();
		if(!$this->session->userdata('logado')){
			redirect(base_url('admin/login'));
		}

		$this->load->model('pessoal_model','modelpessoal');
	}

	public function index()
	{
		$this->load->library('table');
		$dados['pessoal']= $this->modelpessoal->mostrar_pessoal();

		//Dados a serem enviados para o Cabeçalho
		$dados['titulo'] = 'Painel de Controle';
		$dados['subtitulo'] = 'Equipe';

		$this->load->view('backend/template/html-header', $dados);
		$this->load->view('backend/template/template');
		$this->load->view('backend/pessoal');
		$this->load->view('backend/template/html-footer');
	}

	public function inserir()
   {
	   $this->load->library('form_validation');
	   $this->form_validation->set_rules('txt-nome','Nome',
		   'required|min_length[3]');
	   $this->form_validation->set_rules('txt-descricao','Descricao',
		   'required|min_length[10]');
	   $this->form_validation->set_rules('txt-imagem','Imagem');

	   if($this->form_validation->run() == FALSE){
		   $this->index();
	   }
	   else{
		   $nome = $this->input->post('txt-nome');
		   $descricao = $this->input->post('txt-descricao');

		   $imagem =  $_FILES['txt-imagem'];
					   $original_name = $_FILES['txt-imagem']['name'];
					   $new_name = strtr(utf8_decode($original_name), utf8_decode(' àáâãäçèéêëìíîïñòóôõöùúûüýÿÀÁÂÃÄÇÈÉÊËÌÍÎÏÑÒÓÔÕÖÙÚÛÜÝ()@#$!%¨&*?+="[]{}-<>;^~§º¬°¢£³²¹ª|'), '_aaaaaceeeeiiiinooooouuuuyyAAAAACEEEEIIIINOOOOOUUUUY___________________________________');;
					   $configuracao['upload_path'] = './assets/frontend/img/pessoal';
					   $configuracao['allowed_types'] = 'png|jpeg|jpg';
					   $configuracao['file_name'] = $new_name;
					   $this->load->library('upload', $configuracao);
					   $this->upload->initialize($configuracao);

					   if($this->upload->do_upload('txt-imagem')){
						   if($this->modelpessoal->adicionar($nome, $descricao, $new_name)){
							   redirect(base_url('admin/pessoal'));
						   }
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
	   $dados['pessoal'] = $this->modelpessoal->listar_pessoal($id); // Traz os dados do model noticias_model.
	   $dados['titulo']= 'Painel Administrativo';
	   $dados['subtitulo'] = 'Serviços';

	   $this->load->view('backend/template/html-header', $dados);
	   $this->load->view('backend/template/template');
	   $this->load->view('backend/alterar-pessoal');
	   $this->load->view('backend/template/html-footer');
   }

   public function salvar_alteracoes($id)
   {
	   $this->load->library('form_validation');
	   $this->form_validation->set_rules('txt-nome','Nome','required|min_length[3]');
	   $this->form_validation->set_rules('txt-descricao','Descricao','required|min_length[10]');

	   if($this->form_validation->run() == FALSE){
		   $this->alterar($id);
	   }
	   else{
		   $nome = $this->input->post('txt-nome');
		   $descricao = $this->input->post('txt-descricao');

		   if($this->modelpessoal->alterar($id, $nome, $descricao)){
			   redirect(base_url('admin/pessoal'));
		   }
		   else{
			   echo "Houve um erro no sistema!";
		   }
	   }
   }

   public function remover($id, $imagem=null)
   {
	   $caminhoArquivo = './assets/frontend/img/pessoal/'.$imagem;
	   if (!unlink($caminhoArquivo)){
		   echo 'Não foi possível excluir o arquivo antigo';
	   }
	   if($this->modelpessoal->remover($id,$imagem)){
		   redirect(base_url('admin/pessoal'));
	   }
	   else{
		   echo "Houve um erro no sistema!";
	   }

   }

   public function nova_foto($id, $imagem){
	   /*Exclusão do arquivo antigo*/
	   $this->load->helper('file');

	   $caminhoArquivo = './assets/frontend/img/pessoal/'.$imagem;

	   $extensoes_permitidas = array('.png', '.jpeg', '.jpg');
	   // Faz a verificação da extensão do arquivo enviado
	   $extensao = strrchr($_FILES['txt-imagem']['name'], '.');

	   if(in_array($extensao, $extensoes_permitidas) == true)
	   {
		   if (!unlink($caminhoArquivo)){
			   echo 'Não foi possível excluir o arquivo antigo';
		   }
		   $imagem = $_FILES['txt-imagem'];
		   $original_name = $_FILES['txt-imagem']['name'];
		   $new_name = strtr(utf8_decode($original_name), utf8_decode(' àáâãäçèéêëìíîïñòóôõöùúûüýÿÀÁÂÃÄÇÈÉÊËÌÍÎÏÑÒÓÔÕÖÙÚÛÜÝ()@#$!%¨&*?+="[]{}-<>;^~§º¬°¢£³²¹ª|'), '_aaaaaceeeeiiiinooooouuuuyyAAAAACEEEEIIIINOOOOOUUUUY___________________________________');;
		   $configuracao['upload_path'] = './assets/frontend/img/pessoal';
		   $configuracao['allowed_types'] = 'png|jpeg|jpg';
		   $configuracao['file_name'] = $new_name;
		   $configuracao['overwrite'] = TRUE;
		   $this->load->library('upload', $configuracao);
		   $this->upload->overwrite = true;
		   $this->upload->initialize($configuracao);
		   if($this->upload->do_upload('txt-imagem')){
			   if($this->modelpessoal->nova_foto($id, $new_name)){
				   redirect(base_url('admin/pessoal/alterar/'.$id));
			   }
		   }else{
			   echo "Houve um erro no sistema!";
			   echo $this->upload->display_errors();
		   }
	   }
	   else{
		   echo "Selecione apenas arquivos de imagem !";
	   }
   }
}
