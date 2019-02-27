<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contato_model extends CI_Model {

    public $id;
    public $nome;
    public $email;

	public function __construct(){
		parent::__construct();
	}

    public function mostrar_contato(){
        $this->db->select('id, nome, email');
        $this->db->from('contato');
        return $this->db->get()->result();
    }

    public function listar_contato($id){
        $this->db->select('id, nome, email');
        $this->db->from('contato');
        $this->db->where('md5(id)',$id);
        return $this->db->get()->result();
    }

	public function adicionar($nome, $email){
        $dados['nome'] = $nome;
        $dados['email'] = $email;

        return $this->db->insert('contato',$dados);
    }

    public function alterar($id, $nome, $email){
        $dados['nome'] = $nome;
        $dados['email'] = $email;

        $this->db->where('md5(id)',$id);
        return $this->db->update('contato',$dados);
    }

    public function remover($id){
        $this->db->where('md5(id)',$id);
        return $this->db->delete('contato');
    }
}
