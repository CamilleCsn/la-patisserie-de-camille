<?php

namespace Camille\BlogBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class RecipeType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
      $builder
        // ->add('date',      'date')
        ->add('title',     'text')
        ->add('author',    'text')
        ->add('content',   'textarea')
        ->add('ingredients', 'textarea')

        ->add('thumbnail', new ThumbnailType())
        ->add('images', 'collection', array(
          'type' => new ImageType(),
          'allow_add'    => true,
          'allow_delete' => true,
          'by_reference' => false
        ))
        ->add('categories', 'entity', array(
          'class' => 'CamilleBlogBundle:Category',
          'property' => 'name',
          'multiple' => true
        ))
        // ->add('published', 'checkbox', array('required' => false))
        ->add('save',      'submit')
      ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Camille\BlogBundle\Entity\Recipe'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'camille_blogbundle_recipe';
    }
}
