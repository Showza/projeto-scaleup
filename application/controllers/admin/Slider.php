<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Slider extends CI_Controller {

	public function __construct(){
		parent::__construct();
		if(!$this->session->userdata('logado')){
			redirect(base_url('admin/login'));

		}

		$this->load->model('slider_model', 'modelslider');
	}

	public function index()
	{
		$this->load->library('table');
		$dados['slider']= $this->modelslider->mostrar_slides();

		//Dados a serem enviados para o Cabeçalho
		$dados['titulo'] = 'Painel de Controle';
		$dados['subtitulo'] = 'Slider';

		$this->load->view('backend/template/html-header', $dados);
		$this->load->view('backend/template/template');
		$this->load->view('backend/slider');
		$this->load->view('backend/template/html-footer');
	}

    public function alterar($id){

		$this->load->library('table');
        $dados['slider'] = $this->modelslider->listar_slides($id);
		//Dados a serem enviados para o Cabeçalho
		$dados['titulo'] = 'Painel de Controle';
		$dados['subtitulo'] = 'Slider';

		$this->load->view('backend/template/html-header', $dados);
		$this->load->view('backend/template/template');
		$this->load->view('backend/alterar-slider');
		$this->load->view('backend/template/html-footer');
    }

    public function salvar_alteracoes($id){

        $this->load->library('form_validation');
		$this->form_validation->set_rules('txt-titulo','Título do Slider', 'required|min_length[3]');
		$this->form_validation->set_rules('txt-subtitulo','Subtítulo', 'required|min_length[3]');
		$this->form_validation->set_rules('txt-link','Link', 'required|min_length[3]');

        if($this->form_validation->run() == FALSE){
            $this->alterar($id);
        }
        else {
    		$titulo= $this->input->post('txt-titulo');
    		$subtitulo= $this->input->post('txt-subtitulo');
    		$link= $this->input->post('txt-link');
            $id= $this->input->post('txt-id');
            if($this->modelslider->alterar($titulo, $subtitulo, $link, $id)){
                redirect(base_url('admin/slider'));
            }
            else {
                echo "Houve um erro no sistema!";
            }
        }
    }

	public function nova_foto($id, $imagem=null){
 	   /*Exclusão do arquivo antigo*/
 	   $this->load->helper('file');

 	   $caminhoArquivo = './assets/frontend/img/slider/'.$imagem;

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
 		   $configuracao['upload_path'] = './assets/frontend/img/slider';
 		   $configuracao['allowed_types'] = 'png|jpeg|jpg';
 		   $configuracao['file_name'] = $new_name;
 		   $configuracao['overwrite'] = TRUE;
 		   $this->load->library('upload', $configuracao);
 		   $this->upload->overwrite = true;
 		   $this->upload->initialize($configuracao);
 		   if($this->upload->do_upload('txt-imagem')){
 			   if($this->modelslider->nova_foto($id, $new_name)){
 				   redirect(base_url('admin/slider/alterar/'.$id));
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
