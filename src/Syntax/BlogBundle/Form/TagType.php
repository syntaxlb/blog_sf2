<?php

namespace Syntax\BlogBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class TagType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('nom');
    }

    public function getName()
    {
        return 'syntax_blogbundle_tagtype';
    }
    
    public function getDefaultOptions(array $options)
    {
        return array(
            'data_class' => 'Syntax\BlogBundle\Entity\Tag',
        );
    }
}
