<?php

namespace Ecommerce\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
* @ORM\Entity
* @ORM\Table(name="enderecos")
*/
class Endereco{

	/**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
	private $id;

	/**
	* @ORM\Column(type="string", length=255)
	*/
	private $logradouro;

	/**
	* @ORM\Column(type="integer", length=10)
	*/
	private $numero;

	/**
	* @ORM\Column(type="string", length=255)
	*/
	private $bairro;

	/**
	* @ORM\Column(type="string", length=255)
	*/
	private $cidade;

	/**
	* @ORM\Column(type="string", length=255)
	*/
	private $uf;

	/**
	* @ORM\Column(type="integer", length=8)
	*/
	private $cep;

	/**
	* @ORM\OneToOne(targetEntity="Usuario", mappedBy="endereco")
	*/
	private $usuario;

}