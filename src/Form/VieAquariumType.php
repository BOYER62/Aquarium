<?php

namespace App\Form;

use App\Entity\VieAquarium;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;

class VieAquariumType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('maintenance',TextType::class,[
                'attr' => [
                    'class' => 'form-control form-control-sm',
                ],
                'constraints' => [
                    new NotBlank(),
                    new Length([
                        'min' => 5,
                        'max' => 200,
                    ])
                ],
            ])
            ->add('ph',TextType::class,[
                'attr' => [
                    'class' => 'form-control form-control-sm',
                ],
                'constraints' => [
                    new NotBlank(),
                    new Length([
                        'min' => 5,
                        'max' => 200,
                    ])
                ],
            ])
            ->add('th',TextType::class,[
                'attr' => [
                    'class' => 'form-control form-control-sm',
                ],
                'constraints' => [
                    new NotBlank(),
                    new Length([
                        'min' => 5,
                        'max' => 200,
                    ])
                ],
            ])
            ->add('observations',TextType::class,[
                'attr' => [
                    'class' => 'form-control form-control-sm',
                ],
                'constraints' => [
                    new NotBlank(),
                    new Length([
                        'min' => 5,
                        'max' => 200,
                    ])
                ],
            ])
            ->add('temperature',TextType::class,[
                'attr' => [
                    'class' => 'form-control form-control-sm',
                ],
                'constraints' => [
                    new NotBlank(),
                    new Length([
                        'min' => 5,
                        'max' => 200,
                    ])
                ],
            ])
            ->add('eau',TextType::class,[
                'attr' => [
                    'class' => 'form-control form-control-sm',
                ],
                'constraints' => [
                    new NotBlank(),
                    new Length([
                        'min' => 5,
                        'max' => 200,
                    ])
                ],
            ])
            ->add('nourriture',TextType::class,[
                'attr' => [
                    'class' => 'form-control form-control-sm',
                ],
                'constraints' => [
                    new NotBlank(),
                    new Length([
                        'min' => 5,
                        'max' => 200,
                    ])
                ],
            ])
            ->add('reproduction',TextType::class,[
                'attr' => [
                    'class' => 'form-control form-control-sm',
                ],
                'constraints' => [
                    new NotBlank(),
                    new Length([
                        'min' => 5,
                        'max' => 200,
                    ])
                ],
            ])
            ->add('compatibilite',TextType::class,[
                'attr' => [
                    'class' => 'form-control form-control-sm',
                ],
                'constraints' => [
                    new NotBlank(),
                    new Length([
                        'min' => 5,
                        'max' => 200,
                    ])
                ],
            ])
            ->add('experence_de_vie',TextType::class,[
                'attr' => [
                    'class' => 'form-control form-control-sm',
                ],
                'constraints' => [
                    new NotBlank(),
                    new Length([
                        'min' => 5,
                        'max' => 200,
                    ])
                ],
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => VieAquarium::class,
        ]);
    }
}
