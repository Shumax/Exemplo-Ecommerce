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
	* @ORM\Column(type="string", length=255)
	*/
	private $senha;

	/**
	* @ORM\Column(type="string", length=255, unique=true)
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

	public function getId()
	{
	    return $this->id;
	}
	
	public function setId($id)
	{
	    return $this->id = $id;
	}
	
	public function getNome()
	{
	    return $this->nome;
	}
	
	public function setNome($nome)
	{
	    return $this->nome = $nome;
	}

	public function getEmail()
	{
	    return $this->email;
	}
	
	public function setEmail($email)
	{
	    return $this->email = $email;
	}

	public function getSenha()
	{
	    return $this->senha;
	}
	
	public function setSenha($senha)
	{
	    return $this->senha = $senha;
	}

	public function getCpf()
	{
	    return $this->cpf;
	}
	
	public function setCpf($cpf)
	{
	    return $this->cpf = $cpf;
	}

	public function getEndereco()
	{
	    return $this->endereco;
	}
	
	public function setEndereco($endereco)
	{
	    return $this->endereco = $endereco;
	}

	public function getPedido()
	{
	    return $this->pedido;
	}
	
	public function setPedido($pedido)
	{
	    return $this->pedido = $pedido;
	}
}