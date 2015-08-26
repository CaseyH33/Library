<?php

    class Copy
    {
        private $book_id;
        private $id;

        function __construct($book_id, $id = null)
        {
            $this->book_id = $book_id;
            $this->id = $id;
        }

        function getBookId()
        {
            return $this->book_id;
        }

        function getId()
        {
            return $this->id;
        }

        static function deleteAll()
        {
            $GLOBALS['DB']->exec("DELETE FROM copies_t;");
        }
    }




 ?>
