<?php


namespace Avahuer\WebBundle\Form\Type;


use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class ContactoType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nombre', 'text', array(
                    'attr' => array(
                        'class' => 'form-control'
                    )
                ))
            ->add('compannia', 'text', array(
                    'label' => 'Compañía',
                    'attr' => array(
                        'class' => 'form-control'
                    )
                ))
            ->add('email', 'email', array(
                    'attr' => array(
                        'class' => 'form-control'
                    )
                ))
            ->add('telefono', 'text', array(
                    'label' => 'Teléfono',
                    'attr' => array(
                        'class' => 'form-control'
                    )
                ))
            ->add('asunto', 'text', array(
                    'attr' => array(
                        'class' => 'form-control'
                    )
                ))
            ->add('descripcion', 'textarea', array(
                    'label' => false,
                    'attr' => array(
                        'class' => 'form-control',
                        'rows' => 6
                    )
                ));
    }


    /**
     * Returns the name of this type.
     *
     * @return string The name of this type
     */
    public function getName()
    {
        return 'contact_type';
    }

} 