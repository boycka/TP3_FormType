<?php
declare(strict_types=1);
namespace App\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ProductFormType extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add(child: 'quantity',type: NumberType::class,options: [
            'label' => 'Quantity',
            'attr' => [

                'min' => 1,
                'max' => 10,
                'value' => 1
            ]
        ])->add(child: 'color',type: ChoiceType::class,options: [
            'label' => 'Color',
            'choices' => [
                'Matte Black' => 'black',
                'Pearl White' => 'white',
                'Silver' => 'silver',
            ],
        ]);

    }


    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'csrf_protection' => true,
            'csrf_field_name' => 'product_token',
            'csrf_token_id' => 'add_product',
            'attr' => [
                'novalidate' => 'novalidate',
            ]
        ]);
    }
}
