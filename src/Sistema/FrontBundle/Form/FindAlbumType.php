<?php

namespace Sistema\FrontBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

use Ivory\GoogleMap\Places\AutocompleteComponentRestriction;
use Ivory\GoogleMap\Places\AutocompleteType;

/**
 * AlbumType form.
 * @author Nombre Apellido <name@gmail.com>
 */
class FindAlbumType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('lugar')
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
            ->add('lat', "hidden")
            ->add('lng', "hidden")
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
