<?php
namespace InstructionForm\Controller;

use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

class IndexControllerFactory implements FactoryInterface
{
    public function createService(ServiceLocatorInterface $serviceLocator)
    {

        $formsService = $serviceLocator->getServiceLocator()->get('Form\Service\FormsService');

        return new IndexController($formsService);

    }


}
