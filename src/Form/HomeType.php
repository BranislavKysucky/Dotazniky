<?php

namespace App\Form;


use App\Entity\Zamestnanec;
use App\Form\Model\HomeModel;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class HomeType extends AbstractType
{
    public function buildForm ( FormBuilderInterface $builder , array $options )
    {
        $builder
            ->add('zamestnanec', EntityType::class, [
                'class' => Zamestnanec::class
            ])
            ->add('typZobrazenia', TextType::class, []);
    }

    public function configureOptions ( OptionsResolver $resolver )
    {
        $resolver -> setDefaults ( array (
            'data_class' => HomeModel::class ,
            'csrf_protection' => false,
            'empty_data' => new HomeModel(),
        ));
    }

    public function getBlockPrefix()
    {
        return "";
    }
}