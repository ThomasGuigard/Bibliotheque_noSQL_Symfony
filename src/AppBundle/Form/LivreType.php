<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;

class LivreType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('titre', TextType::class, array('attr' => array(
            'class' => 'form-div')))
            ->add('auteur', TextType::class, array('attr' => array(
            'class' => 'form-div')))
            ->add('isbn', TextType::class, array('attr' => array(
            'class' => 'form-div')))
            ->add('dateAchat', DateType::class, array('attr' => array(
            'class' => 'form-div')))
            ->add('etat', TextType::class, array('attr' => array(
            'class' => 'form-div')))
            ->add('thematiques', TextType::class,array('attr' => array(
            'class' => 'form-div')))
            ->add('Ajouter un livre', SubmitType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Document\Livre',
        ));
    }
}
