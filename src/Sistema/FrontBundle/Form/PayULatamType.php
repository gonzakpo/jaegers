<?php

namespace Sistema\FrontBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

/**
 * PayULatamType form.
 * @author Nombre Apellido <name@gmail.com>
 */
class PayULatamType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder                                      
            ->add('merchantId', 'hidden', array(
                    'data' => '123456',
                    ) 
                )
            ->add('accountId', 'hidden', array(
                    'data' => '9',
                    ) 
                )
            ->add('description')
            ->add('referenceCode')
            ->add('amount')
            ->add('tax')
            ->add('taxReturnBase')
            ->add('shipmentValue')
            ->add('currency')
            ->add('lng')
            ->add('sourceUrl')
            ->add('signature')
            ->add('urlOrigen', 'hidden', array())
            ->add('buttonType', 'hidden', array(                
                'mapped' => false,
                'data'   => 'SIMPLE',
                )
            )
            ->add('responseUrl', 'hidden', array(
                'required' => false,
                )
            )
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Sistema\FrontBundle\Entity\PayULatam'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return '';
    }
}
