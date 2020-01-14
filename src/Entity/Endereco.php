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

	public function getLogradouro()
	{
	    return $this->logradouro;
	}
	
	public function setLogradouro($logradouro)
	{
	    return $this->logradouro = $logradouro;
	}

	public function getNumero()
	{
	    return $this->numero;
	}
	
	public function setNumero($numero)
	{
	    return $this->numero = $numero;
	}

	public function getBairro()
	{
	    return $this->bairro;
	}
	
	public function setBairro($bairro)
	{
	    return $this->bairro = $bairro;
	}

	public function getCidade()
	{
	    return $this->cidade;
	}
	
	public function setCidade($cidade)
	{
	    return $this->cidade = $cidade;
	}

	public function getUf()
	{
	    return $this->uf;
	}
	
	public function setUf($uf)
	{
	    return $this->uf = $uf;
	}

	public function getCep()
	{
	    return $this->cep;
	}
	
	public function setCep($cep)
	{
	    return $this->cep = $cep;
	}
}