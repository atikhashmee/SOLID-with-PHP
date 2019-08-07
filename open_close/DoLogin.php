<?php
    include_once 'Loginhelper.php';
   class DoLogin{
            private $logininterface;
            public function __construct(LoginHelperInterface $logininterface) {
                if( $logininterface instanceof LoginHelperInterface)
                     $this->logininterface = $logininterface;
                else 
                 throw new Exception("this is not a LoginHelperInterface type instance");
            }

            public function login($user){
                $this->logininterface->authenticate($user);
            }

            public function getInstance()
            {
                return $this->logininterface;
            }
    
   }




?>