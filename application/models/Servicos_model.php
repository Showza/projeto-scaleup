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

    public function listar_servico($id){
        $this->db->select('id, nome, descricao, imagem');
        $this->db->from('servicos');
        $this->db->where('md5(id)',$id);
        return $this->db->get()->result();
    }

	public function adicionar($nome, $descricao, $imagem){
        $dados['nome'] = $nome;
        $dados['descricao'] = $descricao;
        $dados['imagem'] = $imagem;

        return $this->db->insert('servicos',$dados);
    }

    public function alterar($id, $nome, $descricao){
        $dados['nome'] = $nome;
        $dados['descricao'] = $descricao;

        $this->db->where('md5(id)',$id);
        return $this->db->update('servicos',$dados);
    }

    public function remover($id, $imagem){
        $this->db->where('md5(id)',$id);
        return $this->db->delete('servicos');
    }

    public function nova_foto($id, $imagem){
    	$dados['imagem'] = $imagem;
      	$this->db->where('md5(id)',$id);
      	return $this->db->update('servicos',$dados);
    }
}
