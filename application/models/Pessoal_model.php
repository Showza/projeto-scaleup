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
        $this->db->where('md5(id)',$id);
        return $this->db->get()->result();
    }

	public function adicionar($nome, $cargo, $imagem){
        $dados['nome'] = $nome;
        $dados['cargo'] = $cargo;
        $dados['imagem'] = $imagem;

        return $this->db->insert('pessoal',$dados);
    }

    public function alterar($id, $nome, $cargo){
        $dados['nome'] = $nome;
        $dados['cargo'] = $cargo;

        $this->db->where('id',$id);
        return $this->db->update('pessoal',$dados);
    }

    public function remover($id, $imagem){
        $this->db->where('md5(id)',$id);
        return $this->db->delete('pessoal');
    }

    public function nova_foto($id, $imagem){
    	$dados['imagem'] = $imagem;
      	$this->db->where('md5(id)',$id);
      	return $this->db->update('pessoal',$dados);
    }
}
