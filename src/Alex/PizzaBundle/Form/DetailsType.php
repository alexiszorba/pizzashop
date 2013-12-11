<?php

namespace Alex\PizzaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class DetailsType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('aantal')
            ->add('prijs')
            ->add('bestelling')
            ->add('type')
            ->add('size')
            ->add('pizza')                
            ->add('promotie')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Alex\PizzaBundle\Entity\Details'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'alex_pizzabundle_details';
    }
}
