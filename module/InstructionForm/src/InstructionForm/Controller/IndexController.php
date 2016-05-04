<?php

namespace InstructionForm\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class IndexController extends AbstractActionController
{
    private $formsService;

    public function __construct(formsService $formsService) {
        $this->formsService = $formsService;
    }

    public function indexAction()
    {
        return new ViewModel([
            'lista' => $this->prodottiService->getListaForms()
        ]);
    }

  /*  public function formsAction()
    {
        $form = $this->formsService->getForm($this->params()->fromRoute('codice'));
        return new ViewModel([
            'form' => $form
        ]);
    } */
}
