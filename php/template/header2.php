<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>oNews</title>
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/style.css">
</head>

<?php
$navigation = [
    'Plan du site'     => '#',
    'Mentions légales' => '#',
    'Contact'          => '#',
];

?>

<body>
    <div class="wrapper">
      <!-- emmet: header>h1+p+nav>ul>li*3>a -->
      <header class="left2">
        <h1 class="left2__title">O'Clock Students News</h1>
        <div class="left2__paragraph">
          <h2 class="left2__subtitle"><strong class="left2__subtitle-strong">Say a world</strong> contact us</h2>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque scelerisque suscipit nibh quis porttitor. Integer iaculis mi urna, a pulvinar quam adipiscing ut. Vivamus vel vestibulum mauris.
          </p>
        </div>
        <nav>
          <ul class="left2__nav">
              <?php 
              foreach($navigation as $lien=>$url ){
              echo '<li class="left2__nav-item"><a href="'.$url.'" class="left2__nav-link">'.$lien.'</a></li>';
            }
          
        ?>
          </ul>
        </nav>
      </header>