<?php

require_once 'VisitorInterface.php';
require_once 'VisitableInterface.php';
require_once 'MasterCard.php';
require_once 'VisaCard.php';

class JSONSaverVisitor implements VisitorInterface {
    private $jsonData = [];

    public function visitMasterCard(MasterCard $card) {
        $this->saveCardInfo($card);
    }

    public function visitVisaCard(VisaCard $card) {
        $this->saveCardInfo($card);
    }

    public function getJSONData() {
        return json_encode($this->jsonData, JSON_PRETTY_PRINT);
    }

    private function saveCardInfo(VisitableInterface $card) {
        $this->jsonData[] = [
            'type' => $card->getType(),
            'limit' => $card->getLimit()
        ];
    }
}