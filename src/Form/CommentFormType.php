<?php

namespace App\Form;

use App\Entity\User;
use App\Entity\Comment;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;

class CommentFormType extends AbstractType
{
      public function buildForm(FormBuilderInterface $builder, array $options)
    {
    
        $builder
            ->add('title')
            ->add('message')
            ->add('user', HiddenType::class,[
                'data' => null
            ])
            ->add('createdAt', HiddenType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Comment::class,
        ]);
    }
}
