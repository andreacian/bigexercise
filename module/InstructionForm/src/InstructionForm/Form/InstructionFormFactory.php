<?php

namespace InstructionForm\Form;

use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

class InstructionFormFactory implements FactoryInterface
{
    /**
     * Create service
     *
     * @param ServiceLocatorInterface $serviceLocator
     *
     * @return DriverLicenseForm
     */
    public function createService(ServiceLocatorInterface $serviceLocator)
    {
        $instructionService = $serviceLocator->get('InstructionForm\Service\InstructionService');
        $listaCategorie = $prodottiService->getArrayCategorie();

        $inputFilter = new InstructionInputFilter();
        $form = new instructionForm($listaForm);

        $form->setInputFilter($inputFilter);

        return $form;
    }
}
