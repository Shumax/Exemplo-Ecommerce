<?php

namespace Ecommerce\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
* @ORM\Entity
* @ORM\Table(name="usuarios")
*/
class Usuario{

	/**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
	private $id;

	/**
	* @ORM\Column(type="string", length=255)
	*/
	private $nome;

	/**
	* @ORM\Column(type="string", length=255, unique=true)
	*/
	private $email;

	/**
	* @ORM\Column(type="integer", length=12, unique=true)
	*/
	private $cpf;

	/**
	* @ORM\Column(type="date")
	*/
	private $criado_em;

	/**
	* @ORM\OneToOne(targetEntity="Endereco", inversedBy="usuario")
	*/
	private $endereco;

	/**
	* @ORM\OneToMany(targetEntity="Pedido", mappedBy="usuarios")
	*/
	private $pedido;

	public function __construct(){ 
		$this->criado_em = new \DateTime;
	}
}