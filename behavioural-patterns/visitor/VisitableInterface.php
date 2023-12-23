<?php

require_once 'VisitorInterface.php';

interface VisitableInterface
{
    public function accept(VisitorInterface $visitor);
}
