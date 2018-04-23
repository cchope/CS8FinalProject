<?php
$phpSelf = htmlentities($_SERVER['PHP_SELF'], ENT_QUOTES, "UTF-8");
$path_parts = pathinfo($phpSelf);


?>	
<!DOCTYPE html>
<html lang="en">
    <head>
        <title> On Campus Delivery </title>

        <meta charset="utf-8">
        <meta name="author" content="Stanhope N., Clasby C., Eddie T.">
        <meta name="description" content="On Campus Delivery">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel=stylesheet
              type="text/css" 
              href="style.css"  
              media="screen"
              >
              <?php
              $debug = false;

              if (isset($_GET["debug"])) {
                  $debug = true;
              }
              $domain = '//';
              $server = htmlentities($_SERVER['SERVER_NAME'], ENT_QUOTES, 'UTF-8');
              
              $domain .= $server;

              if ($debug) {
                  print '<p>php Self: ' . $phpSelf;
                  print '<p>Path Parts<pre>';
                  print_r($path_parts);
                  print '</pre></p>';
              }
            
              



              print PHP_EOL . '<!-- include libraries -->' . PHP_EOL;
              
              require_once('lib/security.php');

              if ($path_parts['filename'] == "form"){
                  print PHP_EOL . '<!--  include form libraries --->' . PHP_EOL;
                  include 'lib/validation-functions.php';
                  include 'lib/mail-message.php';
              }

              ?>

    </head>
    <header>
    <h1> On Campus Delivery
    </header>
    <?php
    print '<body id="' . $path_parts['filename'] . '">';
    
    include ('nav.php');

    if ($debug) {
        print '<p>DEBUG MODE IS ON</p>';
    }
    ?>
