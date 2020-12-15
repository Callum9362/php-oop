<?php
   
   // A basic class with getters and setters
   class Math {
      /* Member variables */
      var $num1;
      var $num2;

      function __construct( $par1, $par2 ) {
        $this->num1 = $par1;
        $this->num2 = $par2;
     }
      
      function add(){
         return $this->num1 + $this->num2 ."<br/>";
      }
      
      function subtract(){
        return $this->num1 - $this->num2 ." <br/>";
      }
      
      function multiply(){
        return $this->num1 * $this->num2 ." <br/>";
      }

      function divide(){
        return $this->num1 / $this->num2 ." <br/>";
      }
   }


   $math1 = new Math(5, 7);
   echo $math1->add();
   echo $math1->subtract();
   echo $math1->multiply();
   echo $math1->divide();
?>