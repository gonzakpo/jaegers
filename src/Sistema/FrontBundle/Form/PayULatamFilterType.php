<?php

namespace Sistema\FrontBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\Form\FormError;

/**
 * PayULatamFilterType filtro.
 * @author Nombre Apellido <name@gmail.com>
 */
class PayULatamFilterType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('merchantId', 'filter_text_like',array(
                'attr'=> array('class'=>'form-control')
            ))
            ->add('accountId', 'filter_text_like',array(
                'attr'=> array('class'=>'form-control')
            ))
            ->add('description', 'filter_text_like',array(
                'attr'=> array('class'=>'form-control')
            ))
            ->add('referenceCode', 'filter_text_like',array(
                'attr'=> array('class'=>'form-control')
            ))
            ->add('amount', 'filter_text_like',array(
                'attr'=> array('class'=>'form-control')
            ))
            ->add('tax', 'filter_text_like',array(
                'attr'=> array('class'=>'form-control')
            ))
            ->add('taxReturnBase', 'filter_text_like',array(
                'attr'=> array('class'=>'form-control')
            ))
            ->add('shipmentValue', 'filter_text_like',array(
                'attr'=> array('class'=>'form-control')
            ))
            ->add('currency', 'filter_text_like',array(
                'attr'=> array('class'=>'form-control')
            ))
            ->add('lng', 'filter_text_like',array(
                'attr'=> array('class'=>'form-control')
            ))
            ->add('sourceUrl', 'filter_text_like',array(
                'attr'=> array('class'=>'form-control')
            ))
            ->add('buttonType', 'filter_text_like',array(
                'attr'=> array('class'=>'form-control')
            ))
            ->add('signature', 'filter_text_like',array(
                'attr'=> array('class'=>'form-control')
            ))
        ;

        $listener = function(FormEvent $event)
        {
            // Is data empty?
            foreach ((array)$event->getForm()->getData() as $data) {
                if ( is_array($data)) {
                    foreach ($data as $subData) {
                        if (!empty($subData)) {
                            return;
                        }
                    }
                } else {
                    if (!empty($data)) {
                        return;
                    }    
                }
            }
            $event->getForm()->addError(new FormError('Filter empty'));
        };
        $builder->addEventListener(FormEvents::POST_SUBMIT, $listener);
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
        return 'sistema_frontbundle_payulatamfiltertype';
    }
}
