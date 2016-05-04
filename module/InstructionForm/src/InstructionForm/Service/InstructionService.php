<?php
namespace InstructionForm\Service;

use InstructionForm\Entity\Instruction;

class InstructionService {

    private $entityManager;
    private $instructionRepository;

    public function __construct($entityManager) {
        $this->entityManager = $entityManager;
        $this->instructionRepository = $entityManager->getRepository('InstructionForm\Entity\Instruction');
    }

    public function getIstruzione($id) {
        return $this->instructionRepository->findOneByCodice($id);
    }

    public function getListaIstruzioni() {
        return $this->instructionRepository->findAll();
    }


    public function creaNuovaIstruzione(array $dati) {
        $istruzione = new Istruzione(
            $dati['id'],
            $dati['nome'],
            $dati['descrizione'],
            $dati['prezzo'],
            $this->entityManager->getReference('\InstructionForm\Entity\Instruction', $dati['istruzioni'])
        );

        $this->entityManager->persist($istruzione);
        $this->entityManager->flush();

        return $istruzione;
    }

    public function elimina(Istruzione $istruzione) {
        $this->entityManager->remove($istruzione);
        $this->entityManager->flush();
    }

}
