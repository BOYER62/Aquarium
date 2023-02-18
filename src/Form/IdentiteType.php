<?php

namespace App\Form;

use App\Entity\Identite;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Mime\MimeTypes;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;

class IdentiteType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('scientifique',TextType::class,[
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
            ->add('commun',TextType::class,[
                'attr' => [
                    'class' => 'form-control form-control-sm',
                    'role' => 'menuitem',
                ],
                'constraints' => [
                    new NotBlank(),
                    new Length([
                        'min' => 5,
                        'max' => 200,
                    ]),
                ],
            ])
            ->add('famille',TextType::class,[
                'attr' => [
                    'class' => 'form-control form-control-sm',
                    'role' => 'menuitem',
                ],
                'constraints' => [
                    new NotBlank(),
                    new Length([
                        'min' => 5,
                        'max' => 200,
                    ])
                ],
            ])
            ->add('origine',TextType::class,[
                'attr' => [
                    'class' => 'form-control form-control-sm',
                    'role' => 'menuitem',
                ],
                'constraints' => [
                    new NotBlank(),
                    new Length([
                        'min' => 5,
                        'max' => 200,
                    ])
                ],
            ])
            ->add('biotope_naturel',TextType::class,[
                'attr' => [
                    'class' => 'form-control form-control-sm',
                    'role' => 'menuitem',
                ],
                'constraints' => [
                    new NotBlank(),
                    new Length([
                        'min' => 5,
                        'max' => 200,
                    ])
                ],
            ])
            ->add('taille',TextType::class,[
                'attr' => [
                    'class' => 'form-control form-control-sm',
                    'role' => 'menuitem',
                ],
                'constraints' => [
                    new NotBlank(),
                    new Length([
                        'min' => 5,
                        'max' => 200,
                    ])
                ],
            ])
            ->add('difference_sexuelles',TextType::class,[
                'attr' => [
                    'class' => 'form-control form-control-sm',
                    'role' => 'menuitem',
                ],
                'constraints' => [
                    new NotBlank(),
                    new Length([
                        'min' => 5,
                        'max' => 200,
                    ])
                ],
            ])
            ->add('comportement',TextType::class,[
                'attr' => [
                    'class' => 'form-control form-control-sm',
                    'role' => 'menuitem',
                ],
                'constraints' => [
                    new NotBlank(),
                    new Length([
                        'min' => 5,
                        'max' => 200,
                    ])
                ],
            ])
            ->add('prix',TextType::class,[
                'attr' => [
                    'class' => 'form-control form-control-sm',
                    'role' => 'menuitem',
                ],
                'constraints' => [
                    new NotBlank(),
                    new Length([
                        'min' => 5,
                        'max' => 200,
                    ])
                ],
            ])
            ->add('image1',FileType::class,[
                'label' => 'Image du poisson',
                'attr' => [
                    'class' => 'input-group-text form-control'
                ],
                'constraints' => [
                    new NotBlank(),
                    new Length([
                        'min' => 3,
                        'max' => 30,
                    ])
                ]
            ])
            ->add('image2',FileType::class,[
                'label' => 'Image carte',
                'attr' => [
                    'class' => 'input-group-text form-control'
                ],
                'constraints' => [
                    new NotBlank(),
                    new Length([
                        'min' => 3,
                        'max' => 30,
                    ])
                ]
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Identite::class,
        ]);
    }
}
