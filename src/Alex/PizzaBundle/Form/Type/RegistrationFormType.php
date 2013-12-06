<?php

namespace Alex\PizzaBundle\Form\Type;

use Symfony\Component\Form\FormBuilderInterface;
use FOS\UserBundle\Form\Type\RegistrationFormType as BaseType;

class RegistrationFormType extends BaseType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        parent::buildForm($builder, $options);

        // add your custom field
        $builder->add('name');
        $builder->add('surname');
        $builder->add('address');
        $builder->add('postnr');
        $builder->add('telnr');
     
    }

    public function getName()
    {
        return 'alex_user_registration';
    }
}
