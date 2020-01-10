<?php

namespace Ecommerce\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
* @ORM\Entity
* @ORM\Table(name="pedidos")
*/
class Pedido{

	/**
	* @ORM\Id
	* @ORM\Column(type="integer")
	* @ORM\GeneratedValue
	*/
	private $id;

	/**
	* @ORM\Column(type="float", length=255)
	*/
	private $valor;

	/**
	* @ORM\Column(type="date")
	*/
	private $date;

	/**
	* @ORM\ManyToOne(targetEntity="Usuario", inversedBy="pedido")
	* @ORM\JoinColumn(name="usuario_id", referencedColumnName="id")
	*/
	private $usuarios;

	/**
	* @ORM\ManyToMany(targetEntity="Produto", inversedBy="pedidos")
	* @ORM\JoinColumn(name="produto_id", referencedColumnName="id")
	*/
	private $produtos;
}