<?php

namespace App\Form;

use App\Entity\SchoolVacin;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SchoolVacinType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => SchoolVacin::class,
            'empty_data' => function (FormInterface $form) {
                return new SchoolVacin(
                    $form->get('name')->getData()
                );
            },
            'allow_extra_fields' => true,
            'csrf_protection' => false,
        ]);
    }

}
