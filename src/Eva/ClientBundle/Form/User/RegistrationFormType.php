<?php

namespace Eva\ClientBundle\Form\User;

use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Form\FormBuilderInterface;
use FOS\UserBundle\Form\Type\RegistrationFormType as BaseType;
use Eva\ClientBundle\Form\AddressType;

class RegistrationFormType extends BaseType {

    public function buildForm(FormBuilderInterface $builder, array $options) {
        parent::buildForm($builder, $options);
        $builder
                ->remove('username')
                ->add('firstName')
                ->add('lastName')
                ->add('telephone')
                ->add('address', new AddressType());
    }

    public function getName() {
        return 'acme_user_registration';
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'Eva\AdminBundle\Entity\User'
        ));
    }

}
