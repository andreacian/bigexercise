<?php
namespace InstructionForm\Service;

use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

class InstructionServiceFactory implements FactoryInterface
{
    public function createService(ServiceLocatorInterface $serviceLocator)
    {

        $entityManager = $serviceLocator->get('doctrine.entitymanager.orm_default');

        return new InstructionService($entityManager);

    }


}
