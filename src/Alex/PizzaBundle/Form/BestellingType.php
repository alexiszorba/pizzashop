<?php

namespace Alex\PizzaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class BestellingType extends AbstractType {

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
        ->add('datum', null, array('required' => true, 'data' => new \DateTime('now')))
        ->add('levering', null, array('required' => true, 'data' => (new \DateTime('now'))->add(new \DateInterval('PT1H'))))
        ->add('leveringskost')
        ->add('user')
        ;
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'Alex\PizzaBundle\Entity\Bestelling'
        ));
    }

    /**
     * @return string
     */
    public function getName() {
        return 'alex_pizzabundle_bestelling';
    }

}
