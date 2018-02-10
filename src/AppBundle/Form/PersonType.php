<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class PersonType extends AbstractType {
    
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder->add('email', 'email')->add('fullname', 'text')->add('submit', 'submit');
    }

    public function getName() {
        return 'person';
    }
}