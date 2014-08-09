<?php

namespace Sistema\FrontBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ImagenAlbumType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('file', 'mws_field_file', array(
                'required'  => false,
                'file_path' => 'webPath',
                'label'     => 'Imagen'
            ))
            ->add('descripcion')
            // ->add('album')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Sistema\FrontBundle\Entity\ImagenAlbum'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'sistema_frontbundle_imagenalbum';
    }
}
