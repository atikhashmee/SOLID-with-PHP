<?php 
   require_once 'Loginhelper.php';
   class NormalLogin implements LoginHelperInterface
   {
        public function authenticate($user)
        {
            var_dump($user);
        }
        public function getAuthetication(){
            return "this is user has been authenticated";
        }
   }


?>