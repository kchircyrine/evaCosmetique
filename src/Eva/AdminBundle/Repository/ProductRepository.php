<?php

namespace Eva\AdminBundle\Repository;
use Doctrine\ORM\EntityRepository;


class ProductRepository extends EntityRepository {
    
    
    
    public function getNewestProducts(){
        
        $qb=$this->createQueryBuilder('p')
                 ->orderBy('p.dateCreation', 'DESC')
                 ->setMaxResults(8); 

        return  $qb->getQuery()->getResult();                
    }
    
    
    
     public function getbestSellerProducts(){
        
        $qb=$this->createQueryBuilder('p')
                 ->orderBy('p.nbSales', 'DESC')
                 ->setMaxResults(8); 

        return  $qb->getQuery()->getResult();                
    }
    
     public function findArray($array){
         $qb=$this->createQueryBuilder('p')
                 ->where('p.id in (:array)')
                 ->setParameter('array', $array)
                 
                 ;
         
                 
         return  $qb->getQuery()->getResult(); 
     }
    
  
   
    
    
    
}
