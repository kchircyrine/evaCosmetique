<?php

namespace Eva\ClientBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class AddressType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('street','textarea')
            ->add('zipCode')
            
           ->add('governorate', 'entity', array(
  'class' => 'EvaAdminBundle:Governorate',
  'query_builder' => function(\Eva\AdminBundle\Entity\GovernorateRepository $er) {
    return $er->createQueryBuilder('b')
      ->addOrderBy('b.name', 'ASC');
   },
    'empty_value' => 'Please select your country',
   'expanded' => false,
   'multiple' => false
   ));
                
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Eva\AdminBundle\Entity\Address'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'eva_clientbundle_address';
    }
}
