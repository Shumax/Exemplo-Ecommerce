<?php

namespace Ecommerce\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
* @ORM\Entity
* @ORM\Table(name="produtos")
*/
class Produto{

	/**
	* @ORM\Id
	* @ORM\Column(type="integer")
	* @ORM\GeneratedValue
	*/
	private $id;

	/**
	* @ORM\Column(type="string", length=255)
	*/
	private $nome_produto;

	/**
	* @ORM\Column(type="float", length=255)
	*/
	private $preco;

	/**
	* @ORM\Column(type="integer", length=255)
	*/
	private $quantidade;

	/**
	* @ORM\Column(type="date")
	*/
	private $criado_em;

	/**
	* @ORM\ManyToMany(targetEntity="Pedido", mappedBy="produtos")
	*/
	private $pedidos;

	public function __construct(){
		$this->criado_em = new \DateTime; 
	}

}	