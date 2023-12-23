<?php

require_once 'MasterCard.php';
require_once 'VisaCard.php';

interface VisitorInterface 
{
    public function visitMasterCard(MasterCard $card);
    public function visitVisaCard(VisaCard $card);
}
