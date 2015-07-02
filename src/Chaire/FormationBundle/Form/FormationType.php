<?php

namespace Chaire\FormationBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class FormationType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('student_escp')
            ->add('student_exte')
            ->add('executive')
            ->add('name')
            ->add('nameEn')
            ->add('concept')
            ->add('conceptEn')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Chaire\FormationBundle\Entity\Formation'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'chaire_formationbundle_formation';
    }
}
