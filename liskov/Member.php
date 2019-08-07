<?php
  
    interface Idatabase{
        public  function addToDatabase();
    }

    interface Booking{
        public  function makingBooking();
    } 

     class Member  implements Idatabase,Booking {
          private $name;
          private $age;
          public function __construct($name) {
              $this->name = $name;
          }
          public  function addToDatabase(){

          }
          public  function makingBooking(){
              echo "I am from the head of the marketing<br>";

          }
    }


    class PremiumMember extends Member{
          public function __construct($name) {
                 parent::__construct($name);
          }

          public  function addToDatabase(){
              echo "premium member added to the databasee";
          }
          public  function makingBooking(){
              echo "premium booking is done";
          }

    }


    class NormalMember extends Member {
        public function __construct($name) {
            parent::__construct($name);
        }

        public  function addToDatabase(){
            echo "Normal  member added to the databasee";
        }
        public  function makingBooking(){
            echo "Normal booking is done";
        }
    }



    class EnqueryMember extends Member
    {
        public function __construct($name) {
            parent::__construct($name);
        }

        public  function addToDatabase(){
            echo "Enquery  member added to the databasee";
        }

        
    }



?>