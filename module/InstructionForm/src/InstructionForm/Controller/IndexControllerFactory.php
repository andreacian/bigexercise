<?php
namespace InstructionForm\Controller;

use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

class IndexControllerFactory implements FactoryInterface
{
    public function createService(ServiceLocatorInterface $serviceLocator)
    {

        $instructionService = $serviceLocator->getServiceLocator()->get('InstructionForm\Service\InstructionService');
        
        return new IndexController($instructionService);

    }


}
