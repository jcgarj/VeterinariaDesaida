<?php

namespace veterinaria\Bundle\veterinariaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class productosType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nombreProd')
            ->add('costo')
            ->add('precio')
            ->add('fechaEntrega')
            ->add('proveedores')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'veterinaria\Bundle\veterinariaBundle\Entity\productos'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'veterinaria_bundle_veterinariabundle_productos';
    }
}
