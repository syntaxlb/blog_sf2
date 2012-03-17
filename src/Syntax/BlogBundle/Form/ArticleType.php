<?php

namespace Syntax\BlogBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;
use Syntax\BlogBundle\Form\TagType;

class ArticleType extends AbstractType {

    public function buildForm(FormBuilder $builder, array $options) {
        $builder
                ->add('date')
                ->add('titre')
                ->add('contenu')
                ->add('auteur', 'entity', array(
                    'class' => 'SyntaxUserBundle:User',
                ))
                ->add('tags', 'collection', array('type' => new TagType,
                    'prototype' => true,
                    'allow_add' => true))
        ;
    }

    public function getName() {
        return 'syntax_blogbundle_articletype';
    }

    public function getDefaultOptions(array $options) {
        return array(
            'data_class' => 'Syntax\BlogBundle\Entity\Article',
        );
    }

}
