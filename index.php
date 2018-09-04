<?php

require_once 'Pessoa.php';
require_once 'Pessoa2.php';
require_once 'vendor/autoload.php';
use Projeto\Pessoa;
$pessoa = new Pessoa('Joao',34, '1.70');
$pessoa->andar();
