<?php 

require_once 'contracts/Calculatorhelper.php';

class PaymentMethod 
{
    Private $methods;

    public function __construct(Calculatorhelperinterface $methods)
    {
        $this->methods = $methods;
    }


}




?>