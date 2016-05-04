<?php

namespace Prodotti\Form;

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
        $instructionService = $serviceLocator->get('Instruction\Service\ProdottiService');
        $listaCategorie = $prodottiService->getArrayCategorie();

        $inputFilter = new ProdottoInputFilter();
        $form = new ProdottoForm($listaCategorie);

        $form->setInputFilter($inputFilter);

        return $form;
    }
}
