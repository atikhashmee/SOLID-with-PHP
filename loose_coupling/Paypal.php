<?php 
require_once 'contracts/Calculatorhelper.php';

class Paypal implements Calculatorhelperinterface
{
    public function showCalculator()
    {
        return 20*10;
    }
}




?>