<?php

namespace InstructionForm\Form;

use Zend\Form\Form;

class InstructionForm extends Form
{
    public function __construct(array $listaIstruzioni)
    {
        parent::__construct('istruzioneForm');
        $this->setAttribute('method', 'post');

        $this->add([
            'name'       => 'id',
            'type'       => 'hidden',
            'options' => array(
                 'label' => 'Id',
                 'label_attributes' => array(
                     'class' => 'control-label',
                 ),
            ),
            'attributes' => [
                'id'       => 'id',
                'class'    => 'form-control'
            ]
        ]);

        $this->add([
            'name'       => 'nome',
            'type'       => 'Zend\Form\Element\Text',
            'options' => array(
                 'label' => 'Nome',
                 'label_attributes' => array(
                     'class' => 'control-label',
                 ),
            ),
            'attributes' => [
                'id'       => 'nome',
                'class'    => 'form-control'
            ]
        ]);

        $this->add([
            'name'       => 'descrizione',
            'type'       => 'Zend\Form\Element\Textarea',
            'options' => array(
                 'label' => 'Istruzione',
                 'label_attributes' => array(
                     'class' => 'control-label',
                 ),
            ),
            'attributes' => [
                'id'       => 'descrizione',
                'class'    => 'form-control'
            ]
        ]);

        $this->add([
            'name'       => 'titolo',
            'type'       => 'Zend\Form\Element\Textarea',
            'options' => array(
                 'label' => 'Titolo',
                 'label_attributes' => array(
                     'class' => 'control-label',
                 ),
            ),
            'attributes' => [
                'id'       => 'titolo',
                'class'    => 'form-control'
            ]
        ]);

    }

}
