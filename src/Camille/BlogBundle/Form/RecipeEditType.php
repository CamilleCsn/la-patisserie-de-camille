<?php

namespace Camille\BlogBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class RecipeEditType extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
      
    }

    public function getName()
    {
        return 'camille_blogbundle_recipe_edit';
    }

    // retourne le formulaire parent 
    public function getParent()
    {
      return new RecipeType();
    }
}
