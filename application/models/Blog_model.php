<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog_model extends CI_Model {

    public $id;
    public $titulo;
    public $subtitulo;
    public $conteudo;
    public $autor;
    public $data;
    public $imagem;

	public function __construct(){
		parent::__construct();
	}

    public function publicacao($id){
        $this->db->select('postagem.id, postagem.titulo,
            postagem.subtitulo, postagem.autor, postagem.data,
            postagem.imagem, postagem.conteudo');
        $this->db->from('postagem');
        $this->db->where('postagem.id ='.$id);
        return $this->db->get()->result();
    }

    public function listar_titulo($id){
        $this->db->select('id, titulo');
        $this->db->from('postagem');
        $this->db->where('id ='.$id);
        return $this->db->get()->result();
    }

    public function mostrar_publicacao($pular = null, $post_por_pagina = null){
        $this->db->order_by('data', 'DESC');

        if($pular && $post_por_pagina){
            $this->db->limit($post_por_pagina, $pular);
        }
        else {
            $this->db->limit(4);
        }
        return $this->db->get('postagem')->result();
    }

    public function listar_publicacao($id){
        $this->db->where('md5(id)', $id);
        return $this->db->get('postagem')->result();
    }

    public function adicionar($titulo, $subtitulo, $conteudo, $autor, $datapub, $imagem){
        $dados['titulo']= $titulo;
        $dados['subtitulo']= $subtitulo;
        $dados['conteudo']= $conteudo;
        $dados['autor']= $autor;
        $dados['data']= $datapub;
        $dados['imagem']= $imagem;
        return $this->db->insert('postagem', $dados);
    }

    public function remover($id){
        $this->db->where('md5(id)', $id);
        return $this->db->delete('postagem');
    }

    public function alterar($id, $titulo, $subtitulo, $conteudo, $autor, $datapub){
        $dados['titulo']= $titulo;
        $dados['subtitulo']= $subtitulo;
        $dados['conteudo']= $conteudo;
        $dados['autor']= $autor;
        $dados['data']= $datapub;
        $this->db->where('md5(id)', $id);
        return $this->db->update('postagem', $dados);
    }

    public function nova_foto($id, $imagem){
    	$dados['imagem'] = $imagem;
      	$this->db->where('md5(id)',$id);
      	return $this->db->update('postagem',$dados);
    }

    public function contar(){
        return $this->db->count_all('postagem');
    }
}
