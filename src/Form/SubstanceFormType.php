<?php

namespace App\Form;

use App\Entity\Substance;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormTypeInterface;

class SubstanceFormType extends AbstractType implements FormTypeInterface
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', TextType::class, [
                'label' => 'Nom du produit'
            ])
            ->add('quantityType', ChoiceType::class, [
                'label' => 'Le type de quantité de produit',
                'choices'  => [
                    'grammes' => 'grammes',
                    'milligrammes' => 'milligrammes',
                    'millilitres' => 'millilitres',
                    'litres' => 'litres'
                ]
            ])
            ->add('quantity', NumberType::class, [
                'label' => 'La quantité de produit',
            ])
            ->add('price', NumberType::class, [
                'label' => 'Prix que ça vous coûte par jour'
            ])
            ->add('createdAt', HiddenType::class)
            ->add('type', TextType::class, ['label' => 'Type de produit (exemple : caféine)']);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Substance::class,
        ]);
    }
}
