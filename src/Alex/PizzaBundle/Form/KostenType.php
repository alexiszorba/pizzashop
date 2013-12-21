<?php

namespace Alex\PizzaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class KostenType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('bedrag')
            ->add('gratistarief')
            ->add('postnr')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Alex\PizzaBundle\Entity\Kosten'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'alex_pizzabundle_kosten';
    }
}
