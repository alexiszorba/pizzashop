<?php

namespace Alex\PizzaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class PizzaType extends AbstractType {

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
                ->add('naam')
                ->add('omschrijving')
                ->add('basisprijs')
                ->add('extras', 'entity', array(
                    'class' => 'AlexPizzaBundle:Extras',
                    'property' => 'omschrijving',
                    'multiple' => true,
                    'expanded' => true,
                ));
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'Alex\PizzaBundle\Entity\Pizza'
        ));
    }

    /**
     * @return string
     */
    public function getName() {
        return 'alex_pizzabundle_pizza';
    }

}
