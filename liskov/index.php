<?php

   require_once('Member.php');


     $memarr = array();


     function addMembers(Member $member){
         global $memarr;
         array_push($memarr,$member);
     }
   

     addMembers(new PremiumMember("Premium Atik"));
     addMembers(new NormalMember("Normal Hasan"));
     addMembers(new EnqueryMember("enquery  Siyam"));

     foreach($memarr as $md)
          echo var_dump($md)." ".$md->makingBooking()."<br>";







?>