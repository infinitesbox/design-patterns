<?php

require_once 'VisitableInterface.php';
require_once 'VisitorInterface.php';

class MasterCard implements VisitableInterface
{
    private $type = 'MasterCard';
    private $limit;

    public function __construct($limit) {
        $this->limit = $limit;
    }

    public function accept(VisitorInterface $visitor) {
        $visitor->visitMasterCard($this);
    }

    public function getType() {
        return $this->type;
    }

    public function getLimit() {
        return $this->limit;
    }
}