<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Postagens extends CI_Controller {

	public function __construct(){
		parent::__construct();
        if(!$this->session->userdata('logado')){
			redirect(base_url('admin/login'));
		}

		$this->load->model('blog_model', 'modelblog');
	}

	public function index($pular=null, $post_por_pagina=null)
	{
        $this->load->library('table');
		$this->load->library('pagination');

		$config['base_url'] = base_url("admin/postagens");
		$config['total_rows'] = $this->modelblog->contar();
		$post_por_pagina = 4;
		$config['per_page'] = $post_por_pagina;

		$this->pagination->initialize($config);

		$dados['links_paginacao'] = $this->pagination->create_links();

		$dados['publicacoes'] = $this->modelblog->mostrar_publicacao($pular, $post_por_pagina);
		//Dados a serem enviados para o Cabeçalho
		$dados['titulo'] = 'Painel de Controle';
		$dados['subtitulo'] = 'Postagens';

		$this->load->view('backend/template/html-header', $dados);
		$this->load->view('backend/template/template');
		$this->load->view('backend/postagens');
		$this->load->view('backend/template/html-footer');
	}

	public function inserir()
   {
	   $this->load->library('form_validation');
	   $this->form_validation->set_rules('txt-titulo','Título','required|min_length[3]');
	   $this->form_validation->set_rules('txt-subtitulo','Subtítulo','required|min_length[3]');
	   $this->form_validation->set_rules('txt-conteudo','Conteúdo','required|min_length[20]');
       $this->form_validation->set_rules('txt-autor','Autor','required|min_length[3]');
	   $this->form_validation->set_rules('txt-imagem','Imagem');

	   if($this->form_validation->run() == FALSE){
		   $this->index();
	   }
	   else{
		   $titulo = $this->input->post('txt-titulo');
		   $subtitulo = $this->input->post('txt-subtitulo');
		   $conteudo = $this->input->post('txt-conteudo');
           $autor = $this->input->post('txt-autor');
           $datapub= $this->input->post('txt-data');

		   $imagem =  $_FILES['txt-imagem'];
					   $original_name = $_FILES['txt-imagem']['name'];
					   $new_name = strtr(utf8_decode($original_name), utf8_decode(' àáâãäçèéêëìíîïñòóôõöùúûüýÿÀÁÂÃÄÇÈÉÊËÌÍÎÏÑÒÓÔÕÖÙÚÛÜÝ()@#$!%¨&*?+="[]{}-<>;^~§º¬°¢£³²¹ª|'), '_aaaaaceeeeiiiinooooouuuuyyAAAAACEEEEIIIINOOOOOUUUUY___________________________________');;
					   $configuracao['upload_path'] = './assets/frontend/img/publicacao';
					   $configuracao['allowed_types'] = 'png|jpeg|jpg';
					   $configuracao['file_name'] = $new_name;
					   $this->load->library('upload', $configuracao);
					   $this->upload->initialize($configuracao);

					   if($this->upload->do_upload('txt-imagem')){
						   if($this->modelblog->adicionar($titulo, $subtitulo, $conteudo, $autor, $datapub, $new_name)){
							   redirect(base_url('admin/postagens'));
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
	   $dados['publicacoes'] = $this->modelblog->listar_publicacao($id); // Traz os dados do model noticias_model.
	   $dados['titulo']= 'Painel Administrativo';
	   $dados['subtitulo'] = 'Blog';

	   $this->load->view('backend/template/html-header', $dados);
	   $this->load->view('backend/template/template');
	   $this->load->view('backend/alterar-postagens');
	   $this->load->view('backend/template/html-footer');
   }

   public function salvar_alteracoes($id)
   {
	   $this->load->library('form_validation');
       $this->form_validation->set_rules('txt-titulo','Título','required|min_length[3]');
	   $this->form_validation->set_rules('txt-subtitulo','Subtítulo','required|min_length[3]');
	   $this->form_validation->set_rules('txt-conteudo','Conteúdo','required|min_length[20]');
       $this->form_validation->set_rules('txt-autor','Autor','required|min_length[3]');

	   if($this->form_validation->run() == FALSE){
		   $this->alterar($id);
	   }
	   else{
           $titulo = $this->input->post('txt-titulo');
		   $subtitulo = $this->input->post('txt-subtitulo');
		   $conteudo = $this->input->post('txt-conteudo');
           $autor = $this->input->post('txt-autor');
           $datapub= $this->input->post('txt-data');

		   if($this->modelblog->alterar($id, $titulo, $subtitulo, $conteudo, $autor, $datapub)){
			   redirect(base_url('admin/postagens'));
		   }
		   else{
			   echo "Houve um erro no sistema!";
		   }
	   }
   }

   public function remover($id, $imagem=null)
   {
	   $caminhoArquivo = './assets/frontend/img/publicacao/'.$imagem;
	   if (!unlink($caminhoArquivo)){
		   echo 'Não foi possível excluir o arquivo antigo';
	   }
	   if($this->modelblog->remover($id,$imagem)){
		   redirect(base_url('admin/postagens'));
	   }
	   else{
		   echo "Houve um erro no sistema!";
	   }

   }

   public function nova_foto($id, $imagem=null){
	   /*Exclusão do arquivo antigo*/
	   $this->load->helper('file');

	   $caminhoArquivo = './assets/frontend/img/publicacao/'.$imagem;

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
		   $configuracao['upload_path'] = './assets/frontend/img/publicacao';
		   $configuracao['allowed_types'] = 'png|jpeg|jpg';
		   $configuracao['file_name'] = $new_name;
		   $configuracao['overwrite'] = TRUE;
		   $this->load->library('upload', $configuracao);
		   $this->upload->overwrite = true;
		   $this->upload->initialize($configuracao);
		   if($this->upload->do_upload('txt-imagem')){
			   if($this->modelblog->nova_foto($id, $new_name)){
				   redirect(base_url('admin/postagens/alterar/'.$id));
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
