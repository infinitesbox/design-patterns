<?php

require_once 'VisitableInterface.php';
require_once 'VisitorInterface.php';

class VisaCard implements VisitableInterface 
{
    private $type = 'Visa';
    private $limit;

    public function __construct($limit) {
        $this->limit = $limit;
    }

    public function accept(VisitorInterface $visitor) {
        $visitor->visitVisaCard($this);
    }

    public function getType() {
        return $this->type;
    }

    public function getLimit() {
        return $this->limit;
    }
}