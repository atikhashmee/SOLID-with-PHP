<?php

require_once 'DoLogin.php';
require_once 'NormalLogin.php';



  $dologin = new DoLogin(new NormalLogin()); 
     
    $user = new stdClass;
    $user->username = "atik";
    $user->password = "atik";
    $dologin->login($user); 


    class MyOwnLogin extends DoLogin{

            /**
            * Class constructor.
            */
           
           public function __construct(NormalLogin $normallogn)
           {
               parent::__construct($normallogn); 
           }
          
           public function getTest()
           {
               return $this->getInstance()->getAuthetication();
           }
          
    }

    $obj = new MyOwnLogin(new NormalLogin());
    echo '<br>'.$obj->getTest();




?>