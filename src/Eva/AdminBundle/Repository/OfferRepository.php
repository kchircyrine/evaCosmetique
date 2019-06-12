<?php

namespace Eva\AdminBundle\Repository;
use Doctrine\ORM\EntityRepository;;



class OfferRepository extends EntityRepository {
    
    
      public function getAvailableOffers(){
        
        $qb=$this->createQueryBuilder('o')
                 //->join('Eva\AdminBundle\Entity\Product', 'p')
              //  ->where('o.dateEnd > :date')
               // ->setParameter('date', 'now()')
                ; 
        

          return  $qb->getQuery()->getResult();                
    } 
    
    
    public function getAvailableOfferByProduct($product){
        
         $qb=$this->createQueryBuilder('o')
                  ->innerJoin('o.products', 'p')
                  ->where('p.id = :group_id')
                  ->andWhere('o.dateEnd > :today')
                  ->setParameter('group_id', $product->getId())
                 ->setParameter('today', new \DateTime())
                 ;
         
         return  $qb->getQuery()->getOneOrNullResult(); 
        
    }
    
    
  
}
