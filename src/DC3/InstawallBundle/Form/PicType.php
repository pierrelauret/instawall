<?php

namespace DC3\InstawallBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class PicType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('url')
            ->add('likeCount')
            ->add('comment')
            ->add('userName')
            ->add('userPic')
            ->add('created')
            ->add('pictureId')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'DC3\InstawallBundle\Entity\Pic'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'dc3_instawallbundle_pic';
    }
}
