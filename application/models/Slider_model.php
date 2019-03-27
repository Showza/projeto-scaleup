<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Slider_model extends CI_Model {

    public $id;
    public $imagem;
    public $titulo;
    public $subtitulo;
    public $link;

	public function __construct(){
		parent::__construct();
	}

    public function mostrar_slides(){
        $this->db->select('id, imagem, titulo, subtitulo, link');
        $this->db->from('slider');
        $this->db->limit(3);
        return $this->db->get()->result();
    }

    public function listar_slides($id){
        $this->db->select('id, imagem, titulo, subtitulo, link');
        $this->db->from('slider');
        $this->db->where('md5(id)', $id);
        return $this->db->get()->result();
    }

    public function alterar($titulo, $subtitulo, $link, $id){
        $dados['titulo']= $titulo;
        $dados['subtitulo']= $subtitulo;
        $dados['link']= $link;

        $this->db->where('md5(id)', $id);
        return $this->db->update('slider', $dados);
    }

    public function nova_foto($id, $imagem){
    	$dados['imagem'] = $imagem;
      	$this->db->where('md5(id)',$id);
      	return $this->db->update('slider',$dados);
    }
}
