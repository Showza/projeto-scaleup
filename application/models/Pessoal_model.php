<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pessoal_model extends CI_Model {

    public $id;
    public $nome;
    public $cargo;
    public $imagem;

	public function __construct(){
		parent::__construct();
	}

    public function listar_pessoal(){
        $this->db->select('id, nome, cargo, imagem');
        $this->db->from('pessoal');
        return $this->db->get()->result();
    }
}
