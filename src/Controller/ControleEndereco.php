<?php

namespace Ecommerce\Controller;

use Ecommerce\Entity\Endereco as EnderecoEntity;

class ControleEndereco extends Acesso
{

	public function salvar(EnderecoEntity $e): void{
    	var_dump($this->em->persist());
    	$this->em->persist($e);
        $this->em->flush();
        
    }
}