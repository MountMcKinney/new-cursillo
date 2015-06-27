<?php
      require 'vendor/autoload.php';
      date_default_timezone_set('America/New_York');

      //$log = new Monolog\Logger('name');
      //$log->pushHandler(new Monolog\Handler\StreamHandler('app.txt', Monolog\Logger::WARNING));
      //$log->addWarning('Oh Noes.');

      $app = new \Slim\Slim( array(
        'view' => new \Slim\Views\Twig()
      ));

      $view = $app->view();
      $view->parserOptions = array(
          'debug' => true
      );
      $view->parserExtensions = array(
          new \Slim\Views\TwigExtension(),
      );

      $app->get('/', function() use($app){
        $app->render('main.twig');
      })->name('home');

      $app->get('/home', function() use($app){
        $app->render('main.twig');
      })->name('home');

      $app->get('/ultreya', function() use($app){
        $app->render('ultreya.twig');
      })->name('ultreya');

      $app->get('/secretariat', function() use($app){
        $app->render('secretariat.twig');
      })->name('secretariat');

      $app->get('/school-of-leaders', function() use($app){
        $app->render('school-of-leaders.twig');
      })->name('school-of-leaders');

      $app->get('/pre-cursillo', function() use($app){
        $app->render('pre-cursillo.twig');
      })->name('pre-cursillo');

      $app->get('/three-day', function() use($app){
        $app->render('three-day.twig');
      })->name('three-day');

      $app->get('/fourth-day', function() use($app){
        $app->render('fourth-day.twig');
      })->name('fourth-day');

      $app->get('/about-us', function() use($app){
        $app->render('about-us.twig');
      })->name('about-us');

      $app->get('/by-laws', function() use($app){
        $app->render('by-laws.twig');
      })->name('by-laws');

      $app->get('/palanca', function() use($app){
        $app->render('palanca.twig');
      })->name('palanca');

      $app->run();
