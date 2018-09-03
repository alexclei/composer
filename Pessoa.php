<?php
	
	namespace Projeto;

	/**
	* 
	*/
	class Pessoa
	{
		protected $nome, $idade, $altura;
		function __construct($nome,$idade,$altura)
		{
			$this->nome = $nome;
			$this->idade = $idade;
			$this->altura = $altura;
		}
		public function andar()
		{
			echo 'correndo...';
		}
		public function indentificação()
		{
			return "nome: {$this->nome} idade: {$this->idade} altura: {$this->altura}";
		}
	}