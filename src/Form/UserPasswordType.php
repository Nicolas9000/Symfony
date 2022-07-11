<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints as Assert;

class UserPasswordType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            // ->add('Password', RepeatedType::class, [
            //     'type' => PasswordType::class,

            //     'label' => 'Mot de passe',
            //     'label_attr' => [
            //         'class' => 'form-label mt-4'
            //     ],

            //     'label' => 'Confirmer votre mot de passe',
            //     'label_attr' => [
            //         'class' => 'form-label mt-4'
            //     ],
            //     'invalid_message' => 'Les mots de passe ne correspondent pas'
            // ])
            ->add('Password', PasswordType::class, [

                'label' => 'Nouveau mot de passe',

                'constraints' => [new Assert\NotBlank()]
            ])
            ->add('submit', SubmitType::class)
        ;
    }

}
