<?php

namespace App\Form;

use App\Entity\Options;
use App\Entity\Property;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class PropertyType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title')
            ->add('description')
            ->add('surface')
            ->add('room')
            ->add('bedrooms')
            ->add('floor')
            ->add('price')
            ->add('heat', ChoiceType::class,[
                'choices'=>$this->getChoices()
            ])
            ->add('options', EntityType::class, [
                'class' => Options::class,
                'choice_label' => 'name',
                'multiple' => true,
                'attr' => [
                    'class'=>'js-example-basic-multiple'
                ]
            ])
            ->add('picture', FileType::class, [
                'label' => 'Image (pdf, png,jpeg)'
               
               ])
            ->add('city')
            ->add('adress')
            ->add('postal_code')
            ->add('sold')
            
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Property::class,
            'translation_domain' => 'forms'
        ]);
    }

    private function getChoices()
    {
        $choices = Property::HEAT;
        $output = [];

        foreach($choices as $k=>$v){
            $output[$v]= $k;
        }
        return $output;
    }
}
