<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Servicos_model extends CI_Model {

    public $id;
    public $nome;
    public $descricao;
    public $imagem;

	public function __construct(){
		parent::__construct();
	}

    public function listar_servicos(){
        $this->db->select('id, nome, descricao, imagem');
        $this->db->from('servicos');
        return $this->db->get()->result();
    }
}
