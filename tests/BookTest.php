<?php
    /**
    * @backupGlobals disabled
    * @backupStaticAttributes disabled
    */

    require_once "src/Author.php";
    require_once "src/Book.php";

    $server = 'mysql:host=localhost;dbname=library_test';
    $username = 'root';
    $password = 'root';
    $DB = new PDO($server, $username, $password);

    class BookTest extends PHPUnit_Framework_TestCase
    {

        protected function tearDown()
        {
            Author::deleteAll();
            Book::deleteAll();
        }

        function testGetTitle()
        {
            $title = "Anathem";
            $test_book = new Book($title);

            $result = $test_book->getTitle();

            $this->assertEquals($title, $result);
        }

        function testGetId()
        {
            $title = "Anathem";
            $test_book = new Book($title);

            $result = $test_book->getId();

            $this->assertEquals(null, $result);
        }

        function testGetAll()
        {
            $title = "Anathem";
            $test_book = new Book($title);
            $test_book->save();

            $title2 = "Snow Crash";
            $test_book2 = new Book($title2);
            $test_book2->save();

            $result = Book::getAll();

            $this->assertEquals([$test_book, $test_book2], $result);
        }

        function testSave()
        {
            $title = "Anathem";
            $test_book = new Book($title);
            $test_book->save();

            $result = Book::getAll();

            $this->assertEquals($test_book, $result[0]);
        }

        function testFind()
        {
            $title = "Anathem";
            $test_book = new Book($title);
            $test_book->save();

            $title2 = "Snow Crash";
            $test_book2 = new Book($title2);
            $test_book2->save();

            $result = Book::find($test_book->getId());

            $this->assertEquals($result,$test_book);
        }

        function testUpdate()
        {
            $title = "Anathem";
            $test_book = new Book($title);
            $test_book->save();

            $new_title = "crypotnomicon";
            $test_book->update($new_title);

            $this->assertEquals($new_title,$test_book->getTitle());

        }

        function testDelete()
        {
            $title = "Anathem";
            $test_book = new Book($title);
            $test_book->save();

            $title2 = "Snow Crash";
            $test_book2 = new Book($title2);
            $test_book2->save();

            $test_book->delete();

            $this->assertEquals([$test_book2], Book::getAll());
        }


    }//end class

 ?>
