<?php

namespace App\Form;

use App\Form\IdentiteType as FormIdentiteType;
use App\Form\VieAquariumType as FormVieAquariumType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;

class IdentiteVieAquariumType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('identite', FormIdentiteType::class,[
                'label' => false,
                'constraints' => [
                    new NotBlank(['groups' => 'register'])
                ]
            ])
            ->add('aquarium', FormVieAquariumType::class,[
                'label' => false,
                'constraints' => [
                    new NotBlank(['groups' => 'register'])
                ]
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'validation_groups' => 'register'
        ]);
    }
}
