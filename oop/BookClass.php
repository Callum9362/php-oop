<?php
   
   // A basic class with getters and setters
   class Book {
      /* Member variables */
      var $price;
      var $title;
      
      /* Member functions */
      function setPrice($par){
         $this->price = $par;
      }
      
      function getPrice(){
         echo $this->price ."<br/>";
      }
      
      function setTitle($par){
         $this->title = $par;
      }
      
      function getTitle(){
         echo $this->title ." <br/>";
      }
   }


   $book1 = new Book;
   $book1->setPrice(10.00);
   $book1->setTitle("Harry Potter");
   $book1->getPrice();
   echo "<br>";
   $book1->getTitle();
?>