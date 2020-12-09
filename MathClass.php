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
         echo $this->num1 + $this->num2 ."<br/>";
      }
      
      function subtract(){
        echo $this->num1 - $this->num2 ." <br/>";
      }
      
      function multiply(){
        echo $this->num1 * $this->num2 ." <br/>";
      }

      function divide(){
        echo $this->num1 / $this->num2 ." <br/>";
      }
   }


   $math1 = new Math(5, 7);
   $math1->add();
   $math1->subtract();
   $math1->multiply();
   $math1->divide();
   echo "<br>";
?>