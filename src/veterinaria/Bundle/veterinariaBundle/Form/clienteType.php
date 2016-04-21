<?php

namespace veterinaria\Bundle\veterinariaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class clienteType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nombreCL')
            ->add('appatCL')
            ->add('apmatCL')
            ->add('calle')
            ->add('noExt')
            ->add('noInt')
            ->add('colonia')
            ->add('delegacion')
            ->add('telefono')
            ->add('correo')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'veterinaria\Bundle\veterinariaBundle\Entity\cliente'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'veterinaria_bundle_veterinariabundle_cliente';
    }
}
