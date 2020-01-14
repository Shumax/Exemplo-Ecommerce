<?php

namespace Ecommerce\Controller;

use Ecommerce\Entity\Usuario as UsuarioEntity;

class ControleUsuario extends Acesso
{

	public function salvar(UsuarioEntity $u): void{
    	var_dump($u);
    	//$this->getEntityManager()->persist($u);
    	//$this->getEntityManager()->flush();
    	$this->em->persist($u);
        $this->em->flush();
    }
}