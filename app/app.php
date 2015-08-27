<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/Author.php";
    require_once __DIR__."/../src/Book.php";


    $app = new Silex\Application();
    $app['debug']  = true;
    $server = 'mysql:host=localhost;dbname=library';
    $username = 'root';
    $password = 'root';
    $DB = new PDO($server, $username, $password);

    use Symfony\Component\HttpFoundation\Request;
    Request::enableHttpMethodParameterOverride();

    $app->register(new Silex\Provider\TwigServiceProvider(),array('twig.path' => __DIR__.'/../views'));



    $app->get("/", function() use ($app) {

        return $app['twig']->render('index.html.twig', array('authors' => Author::getAll(), 'books' => Book::getAll()));

    });

    $app->post("/author_book", function() use ($app) {
        $title = $_POST['title'];
        $book = new Book($title, $id = null);
        $book->save();

        $name = $_POST['name'];
        $author = new Author($name, $id = null);
        $author->save();

        $result = $author->addBook($book);


        return $app['twig']->render('index.html.twig', array('books' => Book::getAll(), 'authors' => Author::getAll()));
    });

    $app->post("/delete_all", function() use ($app) {
        $GLOBALS['DB']->exec("DELETE FROM authors_books_t;");
        Author::deleteAll();
        Book::deleteAll();
        return $app['twig']->render('index.html.twig', array('authors' => Author::getAll(), 'books' => Book::getAll()));
    });













    return $app;

?>
