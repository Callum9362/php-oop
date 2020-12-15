<?php
   // Ref - https://www.w3schools.com/php/php_ref_string.asp
    class Example {
      /* Member variables */
      var $Example;

      function __construct($par1) {
        $this->Example = $par1;
     }
      
      function addSlashes(){
         return addcslashes($this->Example, 'A..z')    ."<br/>";
      }

      
      
   }


   $Example = new Example("Hello World");
   echo $Example->addSlashes();
   
