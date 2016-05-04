<?php

namespace Prodotti\Form;

use Zend\InputFilter\InputFilter;

class ProdottoInputFilter extends InputFilter
{

    public function __construct()
    {

        $this->add([
            'name' => 'titolo',
            'required' => "true",
            'filters' => [
                ['name' => 'StripTags'],
                ['name' => 'StringTrim'],
            ]
        ]);

        $this->add([
            'name' => 'nome',
            'required' => "true",
            'filters' => [
                ['name' => 'StripTags'],
                ['name' => 'StringTrim'],
            ]
        ]);

        $this->add([
            'name' => 'descrizione',
            'required' => "true",
            'filters' => [
                ['name' => 'StripTags'],
                ['name' => 'StringTrim'],
            ]
        ]);

    }

}
