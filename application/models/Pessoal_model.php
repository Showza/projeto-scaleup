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

    public function mostrar_pessoal(){
        $this->db->select('id, nome, cargo, imagem');
        $this->db->from('pessoal');
        return $this->db->get()->result();
    }

    public function listar_pessoal($id){
        $this->db->select('id, nome, cargo, imagem');
        $this->db->from('pessoal');
        $this->db->where('md5(id)', $id);
        return $this->db->get()->result();
    }

    public function alterar($nome, $cargo, $id){
        $dados['nome']= $nome;
        $dados['cargo']= $cargo;
        $this->db->where('id', $id);
        return $this->db->update('pessoal', $dados);
    }

    public function alterar_img($id){
        $dados['imagem']= 1;
        $this->db->where('md5(id)', $id);
        return $this->db->update('pessoal', $dados);
    }

    public function adicionar($nome, $cargo){
        $dados['nome']= $nome;
        $dados['cargo']= $cargo;
        return $this->db->insert('pessoal', $dados);
    }

    public function excluir($id){
        $this->db->where('md5(id)', $id);
        return $this->db->delete('pessoal');
    }
}
