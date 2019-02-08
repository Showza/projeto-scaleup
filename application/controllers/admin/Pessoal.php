<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pessoal extends CI_Controller {

	public function __construct(){
		parent::__construct();
		if(!$this->session->userdata('logado')){
			redirect(base_url('admin/login'));
		}
	}

	public function index()
	{
		$this->load->library('table');
		$this->load->model('pessoal_model', 'modelpessoal');
		$dados['pessoal']= $this->modelpessoal->mostrar_pessoal();

		//Dados a serem enviados para o Cabeçalho
		$dados['titulo'] = 'Painel de Controle';
		$dados['subtitulo'] = 'Equipe';

		$this->load->view('backend/template/html-header', $dados);
		$this->load->view('backend/template/template');
		$this->load->view('backend/pessoal');
		$this->load->view('backend/template/html-footer');
	}

    public function alterar($id){
		$this->load->model('pessoal_model', 'modelpessoal');
        $dados['pessoal'] = $this->modelpessoal->listar_pessoal($id);
		//Dados a serem enviados para o Cabeçalho
		$dados['titulo'] = 'Painel de Controle';
		$dados['subtitulo'] = 'Equipe';

		$this->load->view('backend/template/html-header', $dados);
		$this->load->view('backend/template/template');
		$this->load->view('backend/alterar-pessoal');
		$this->load->view('backend/template/html-footer');
    }

    public function salvar_alteracoes($id){

		$this->load->model('pessoal_model', 'modelpessoal');
        $this->load->library('form_validation');
		$this->form_validation->set_rules('txt-nome','Nome do Membro', 'required|min_length[3]');
		$this->form_validation->set_rules('txt-cargo','Cargo', 'required|min_length[3]');

        if($this->form_validation->run() == FALSE){
            $this->alterar($id);
        }
        else {
    		$nome= $this->input->post('txt-nome');
    		$cargo= $this->input->post('txt-cargo');
            $id= $this->input->post('txt-id');
            if($this->modelpessoal->alterar($nome, $cargo, $id)){
                redirect(base_url('admin/pessoal'));
            }
            else {
                echo "Houve um erro no sistema!";
            }
        }
    }

    public function nova_foto(){

		$this->load->model('pessoal_model', 'modelpessoal');

		$id= $this->input->post('id');
		$config['upload_path']= './assets/frontend/img/pessoal';
		$config['allowed_types']= 'jpg';
		$config['file_name']= $id.".jpg";
		$config['overwrite']= TRUE;
		$this->load->library('upload', $config);

		if(!$this->upload->do_upload()){
			echo $this->upload->display_errors();
		}
		else {
			$config2['source_image']= './assets/frontend/img/pessoal/'.$id.'.jpg';
			$config2['create_tumb']= FALSE;
			$this->load->library('image_lib', $config2);
			if($this->image_lib->resize()){
				if($this->modelpessoal->alterar_img($id)){
	                redirect(base_url('admin/pessoal/alterar/'.$id));
	            }
	            else {
	                echo "Houve um erro no sistema!";
	            }
			}
			else {
				echo $this->image_lib->display_errors();
			}
		}
    }

	public function inserir(){
		$this->load->model('pessoal_model', 'modelpessoal');
		$this->load->library('form_validation');
		$this->form_validation->set_rules('txt-nome', 'Nome do Membro',
			'required|min_length[3]');
		$this->form_validation->set_rules('txt-cargo', 'Cargo',
			'required|min_length[3]');
		if($this->form_validation->run() == FALSE){
			$this->index();
		}
		else {
			$nome= $this->input->post('txt-nome');
			$cargo= $this->input->post('txt-cargo');
			if($this->modelpessoal->adicionar($nome, $cargo)){
				redirect(base_url('admin/pessoal'));
			}
			else {
				echo "Houve um erro no sistema!";
			}
		}
	}

	public function excluir($id){
		$this->load->model('pessoal_model', 'modelpessoal');
		if($this->modelpessoal->excluir($id)){
			redirect(base_url('admin/pessoal'));
		}
		else {
			echo "Houve um erro no sistema!";
		}
	}

}
