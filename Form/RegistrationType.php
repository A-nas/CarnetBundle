<?php

namespace P\CarnetBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class RegistrationType extends AbstractType
{
	
    public function buildForm(FormBuilderInterface $builder, array $options){
        $builder->add('nom');
        $builder->add('prenom');
        $builder->add('adresse');
        $builder->add('codePostale');
        $builder->add('ville');
        $builder->add('departement');
        $builder->add('Pays');
        $builder->add('dateNais');
        $builder->add('telephone');
        $builder->add('mobile');
        $builder->add('siteWeb');
        $builder->add('fax');
    }

	public function getParent(){
        return 'FOS\UserBundle\Form\Type\RegistrationFormType';
        // pour symfony 2.8 and less
        // return 'fos_user_registration';
    }

    public function getBlockPrefix(){
        return 'app_user_registration';
    }

    // pour Symfony 2.x
    public function getName(){
        return $this->getBlockPrefix(); // registration or registrationType
    }
}