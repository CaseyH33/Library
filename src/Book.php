<?php

  class Book
  {

      private $title;
      private $id;

      function __construct($title, $id=null)
      {
          $this->title = $title;
          $this->id = $id;
      }

      function getTitle()
      {
          return $this->title;
      }

      static function deleteAll()
      {
          $GLOBALS['DB']->exec("DELETE FROM books;");
      }

  }


 ?>
