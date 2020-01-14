<pre><?php

require "vendor/autoload.php";
require "config/doctrine.php";

use Ecommerce\Controller\ControleUsuario;
use Ecommerce\Controller\ControleEndereco;
use Ecommerce\Controller\Acesso;
use Ecommerce\Entity\Usuario;
use Ecommerce\Entity\Endereco;

$usuario = new Usuario;
$endereco = new Endereco;
$controle = new ControleUsuario;
$ce = new ControleEndereco;


$endereco->setLogradouro('Rua Parana');
$endereco->setNumero(254);
$endereco->setBairro('Nacoes');
$endereco->setCidade('Curitiba');
$endereco->setUf('Parana');
$endereco->setCep(11562508);

//$usuario->setId(1);
$usuario->setNome('Castro');
$usuario->setEmail('castro@mail.com');
$usuario->setSenha(123456);
$usuario->setCpf(11122233399);
//$usuario->setEndereco(1);
//$usuario->setPedido(4);

//$entityManager->persist($usuario);
//$entityManager->flush();

//$controle->salvar($usuario);
$ce->salvar($endereco);

//var_dump($usuario);



/*
use Biblioteca\Entity\Livro;

$qb = $entityManager->createQueryBuilder();

$livro = new Livro;

dump($livro);*/