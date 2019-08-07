<?php 

require_once 'contracts/Calculatorhelper.php';

class Stripe implements Calculatorhelperinterface
{
    public function showCalculator()
    {
        return 20*20;
    }
}




?>