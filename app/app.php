<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/Author.php";


    $app = new Silex\Application();
    $app['debug']  = true;
    $server = 'mysql:host=localhost;dbname=library_test';
    $username = 'root';
    $password = 'root';
    $DB = new PDO($server, $username, $password);

    use Symfony\Component\HttpFoundation\Request;
    Request::enableHttpMethodParameterOverride();

    $app->register(new Silex\Provider\TwigServiceProvider(),array('twig.path' => __DIR__.'/../views'));

    $app->get("/", function() use ($app){
      $mystring = "Data from the app display in twig";
            return $app['twig']->render('template.html.twig', array('data' => $mystring));
    });

    return $app;
    ?>
