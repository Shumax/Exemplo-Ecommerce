<?php 

namespace Ecommerce\Controller;

class Acesso {
    /**
     * @var EntityManager
     */
    protected $em = null;

    public function setEntityManager($em) 
    {
        $this->em = $em;
    }

    protected function getEntityManager() 
    {
        if (! $this->em) 
        {
            $this->em = require __DIR__ . '/../../config/doctrine.php';
        }   
        return $this->em;    
    } 
}