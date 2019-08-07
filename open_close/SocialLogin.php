<?php 
   require_once 'Loginhelper.php';
   class SocialLogin implements LoginHelperInterface
   {
        public function authenticate($user)
        {
            var_dump($user);
        }
   }


?>