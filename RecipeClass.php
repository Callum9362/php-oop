<?php
   
   // A basic class with getters and setters
   class Recipe {
      /* Member variables */
      var $time;
      var $title;

      function __construct( $par1, $par2 ) {
        $this->title = $par1;
        $this->time = $par2;
     }
      
      function getTime(){
         echo $this->time ."<br/>";
      }
      
      function getTitle(){
         echo $this->title ." <br/>";
      }
   }


   $recipe = new Recipe("Cake", "1 hour");
   $recipe->getTime();
   echo "<br>";
   $recipe->getTitle();
?>