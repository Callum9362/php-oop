<?php
   
   // A basic class with getters and setters
   class Word {
      /* Member variables */
      var $word;

      function __construct($par1) {
        $this->word = $par1;
     }
      
      function addSlashes(){
         echo addcslashes($this->word, 'A..z')    ."<br/>";
      }

      function chop(){
        echo chop($this->word, "World!")    ."<br/>";
     }
      
   }
   $word1 = new Word("Hello World");
   $word1->addSlashes();
   $word1->chop();
?>