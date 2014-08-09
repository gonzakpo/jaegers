<?php

namespace Sistema\FrontBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

/**
 * AlbumType form.
 * @author Nombre Apellido <name@gmail.com>
 */
class AlbumType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('titulo')
            ->add('lugar')
            // ->add('lugar', null, array(
            //     // 'label' => 'pagina.tabla.direccion',
            //     // 'translation_domain' => 'MWSBundle',
            //     'attr' => array(
            //         'class'       => 'span5 mwstooltip',
            //         'data-toggle' => "tooltip",
            //         'title'       => "Ej: San Martín 879 - Resistencia Chaco",
            //     ),
            //     // 'required' => false,
            // ))
            ->add('anio', 'bootstrapdatetime', array(
                'required'   => true,
                'label'      => 'Anio',
                'read_only'  => true,
                'label_attr' => array(
                    'class' => 'col-lg-2 col-md-2 col-sm-2',
                ),
                'attr'       => array(
                    'class' => 'col-lg-4 col-md-4 col-sm-4',
                ),'widget_type'=>'date'
            ))
            ->add('imagenes', 'collection', array(
                'type'         => new ImagenAlbumType(),
                'allow_add'    => true,
                'allow_delete' => true,
                'by_reference' => false,
                'label'        => false,               
            ))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Sistema\FrontBundle\Entity\Album'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'sistema_frontbundle_album';
    }
}
