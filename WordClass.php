<?php
   // Ref - https://www.w3schools.com/php/php_ref_string.asp
   // A basic class with getters and setters
   class Word {
      /* Member variables */
      var $word;

      function __construct($par1) {
        $this->word = $par1;
     }
      
      function addSlashes(){
         return addcslashes($this->word, 'A..z')    ."<br/>";
      }

      function chop(){
         return chop($this->word, "World!")    ."<br/>";
     }
     
     function countChars(){
      return count_chars($this->word, 3)    ."<br/>";
   }

   function encString(){
      return sha1($this->word)    ."<br/>";
   }
      
   }
   $word1 = new Word("Hello World");
   echo $word1->addSlashes();
   echo $word1->chop();
   echo $word1->countChars();
   echo $word1->encString();
