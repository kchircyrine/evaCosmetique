<?php



namespace Eva\AdminBundle\Repository;
use Doctrine\ORM\EntityRepository;


class ImageProductRepository extends EntityRepository {
   
    
    public function getDefautImage($product){
        
        $qb=$this->createQueryBuilder('i')
                ->where('i.product = :product')
                ->andwhere('i.isDefault = :default')
                ->setParameter('product', $product)
                ->setParameter('default', 1)
                ; 

          return  $qb->getQuery()->getSingleResult();                
    }
    
    
     public function getImage($product){
        
        $qb=$this->createQueryBuilder('i')
                ->where('i.product = :product')
                ->andwhere('i.isDefault = :default')
                ->setParameter('product', $product)
                ->setParameter('default', 0)
                ; 

          return  $qb->getQuery()->getSingleResult();                
    }
    
    
    
    
}
