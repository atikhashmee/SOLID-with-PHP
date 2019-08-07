<?php




    class A {

        public $data = array();

        private $first_name = "atik bin hashmee";
       
                public function __set($name, $value)
                {
                    $this->data[$name] = $value;
                    
                }


                public function __get($name)
                {
                    if(array_key_exists($name,$this->data))
                    return $this->data[$name];
                }
    }

    $a = new A();

    $a->name = "atik";
    echo $a->name;
   
   
    /* class A{

         
         private $name;
         public function setName($name)
         {
             $this->name = $name;
         }
         public function getName()
         {
             return $this->name;
         }

         public function getExtraName()
         {
             return $this->name." Hi";
         }
         
         public function __toString()
         {
             return 'First'.$this->getName().'<br> last'.$this->getExtraName();
         }
    }

    $a = new A();
    $a->setName("Atik");
    echo $a; */

?>

