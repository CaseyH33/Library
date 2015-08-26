<?php


    /**
    * @backupGlobals disabled
    * @backupStaticAttributes disabled
    */

    require_once "src/Patron.php";
    //require_once "src/Copy.php";

    $server = 'mysql:host=localhost;dbname=library_test';
    $username = 'root';
    $password = 'root';
    $DB = new PDO($server, $username, $password);

    class PatronTest extends PHPUnit_Framework_TestCase
    {
        protected function tearDown()
        {
            Patron::deleteAll();
            //Checkout::deleteAll();
        }

        function testGetName()
        {
            $name = "Randy Mclure";
            $test_patron = new Patron($name);

            $result = $test_patron->getName();

            $this->assertEquals($name, $result);
        }

        function testGetId()
        {
            $name = "Randy Mclure";
            $test_patron = new Book($name);

            $result = $test_patron->getId();

            $this->assertEquals(null, $result);
        }

        function testGetAll()
        {
            $name = "Randy Mclure";
            $test_patron = new Patron($name);
            $test_patron->save();

            $name2 = "Ballface Majure";
            $test_patron2 = new Patron($name2);
            $test_patron2->save();

            $result = Patron::getAll();

            $this->assertEquals([$test_patron2, $test_patron], $result);
        }

        function testSave()
        {
            $name = "Randy Mclure";
            $test_patron = new Patron($name);
            $test_patron->save();

            $result = Patron::getAll();

            $this->assertEquals($test_patron, $result[0]);
        }

        function testFind()
        {
            $name = "Randy Mclure";
            $test_patron = new Patron($name);
            $test_patron->save();

            $name2 = "Ballface Majure";
            $test_patron2 = new Patron($name2);
            $test_patron2->save();


            $result = Patron::find($test_patron->getId());

            $this->assertEquals($result,$test_patron);
        }

    }


    ?>
