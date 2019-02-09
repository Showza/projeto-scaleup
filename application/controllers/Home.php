<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function __construct(){
        parent::__construct();

        $this->load->model('pessoal_model', 'modelpessoal');
        $this->load->model('slider_model', 'modelslider');
        $this->load->model('servicos_model', 'modelservicos');
    }

	public function index()
	{
        $dados['pessoal'] = $this->modelpessoal->mostrar_pessoal();
        $dados['slider'] = $this->modelslider->mostrar_slides();
        $dados['servicos'] = $this->modelservicos->listar_servicos();

        //Dados a serem enviados para o Cabeçalho
		$dados['titulo'] = 'Scale Up';
		$dados['subtitulo'] = 'Empresa Júnior de Química';

		$this->load->view('frontend/template/html-header', $dados);
        $this->load->view('frontend/template/header');
        $this->load->view('frontend/home');
        $this->load->view('frontend/template/footer');
        $this->load->view('frontend/template/html-footer');
	}
}
