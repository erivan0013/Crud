<?php

include_once '../conexao.php';

class Curso{
	
	protected $id_curso;
	protected $nome;

	

	
	public function getIdCurso()
	{
		return $this->id_curso; 
	}
	  
	public function setIdCurso($id_curso)
	{
		$this->id_curso = $id_curso; 
	}  
	
	public function getNome()
	{
		return $this->nome;
	}
	 
	public function setNome($nome)
	{
		$this->nome = $nome;
	}


	
	public function inserir($dados)
	{
		$nome = $dados['nome'];
		
		$sql = "insert into curso (nome) 
						   values ('$nome')";
		
		$conexao = new Conexao();
		return $conexao->executar($sql);
	}
	
	public function alterar($dados)
	{
		$nome = $dados['nome'];
		$id_curso = $dados['id_curso'];
		
		$sql = "update curso set
					nome = '$nome'
				where id_curso = $id_curso ";
		
		$conexao = new Conexao();
		return $conexao->executar($sql);
	}
	
	public function excluir($id_curso)
	{
		$sql = "delete from curso where id_curso = $id_curso";
		
		$conexao = new Conexao();
		return $conexao->executar($sql);
	}
	
	public function recuperarTodos()
	{
		$conexao = new Conexao();
		
		$sql = "select * from curso";
		return $conexao->recuperarTodos($sql);
	}


	public function carregarPorId($id_curso)
	{
		$conexao = new Conexao();
	
		$sql = "select * from curso where id_curso = $id_curso";
		$dados = $conexao->recuperarTodos($sql);
		
		$this->id_curso = $dados[0]['id_curso'];
		$this->nome = $dados[0]['nome'];
		;
	}	
}