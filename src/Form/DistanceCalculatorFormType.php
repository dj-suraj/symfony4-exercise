<?php
/**
 * Author: Suraj Gusain
 * Date: 16-01-2018
 * Time: 12:19
 */

namespace App\Form;


use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class DistanceCalculatorFormType extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('distance', NumberType::class, array('label' => 'Distance ( in meters)'))
            ->add('choices', ChoiceType::class, array(
                'label' => 'Choices ',
                'choices' => array(
                    'walking' => 1,
                    'cycling' => 2,
                    'driving' => 3
                )
            ))
            ->add('submit', SubmitType::class);
    }

    /**
     * @param OptionsResolver $resolver
     * @throws \Symfony\Component\OptionsResolver\Exception\AccessException
     */
    public function configureOptions(OptionsResolver $resolver)
    {

        $resolver->setDefaults(array(
            'csrf_protection' => false
        ));
    }

}