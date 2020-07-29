<?php
require ("system/database.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Strange</title>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a href="#" class="navbar-brand">Logo</a>
    <button class="navbar-toggler">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportContent">
          <ul class="navbar-nav mr-auto">
              <?php
              $items = [
                  'home' => [
                      'link' => '/index.php',
                      'label' => 'Home',
                  ],
                  'contact' => [
                      'link' => '/contact.php',
                      'label' => 'Contact Me',
                  ],
                  'about' => [
                      'link' => '/about.php',
                      'label' => 'About',
                  ],

                  'blog' => [
                      'link' => '/blog.php',
                      'label' => 'Blog',
                  ],

                  'admin' => [
                      'link' => '/admin.php',
                      'label' => 'Admin',
                  ],

                  'tools' => [
                      'link' => '/tools.php',
                      'label' => 'Tools',
                  ]
            
              ];
              foreach($items as $key => $item){
                  echo "<li class=\"nav-item\">
                      <a class=\"nav-link\" href=\"{$item['link']}\">{$item['label']}</a>
                  </li>";
        
              }
              ?>
              <li class="nav-item"></li>

          </ul>
    </div>
</nav>

<div class="container">