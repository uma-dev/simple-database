<?php
  $string = 'Hello World!<br>';
//  echo $string;
//  print $string;
//  echo 'hola mundo';
//  echo '<br>';
//  echo rand(0,3);
//  echo '<br>';
//  echo 3*10.4;
//  echo '<br>';
  $colores = Array();
  $colores[0] = "blue";
  $colores[1] = "red";
  $colores[2] = "green";
  $colores[3] = "yellow";

  $img = Array();
  $img[0] = "./images/xmas_1.jpg";
  $img[1] = "./images/bats_large2.jpg";
  $img[2] = "./images/xmas_2.jpg";
  $img[3] = "./images/bats_large3.jpg";

//  echo ' <body style="background-color:' . $colores[rand(0,3)] . ';background-image: url(' . $img[rand(0,4)] . '); "> ';
//  echo ' <body style="background-image: url(' . $img[rand(0,4)] . '); "> ';
//  echo ' <body style="background-color:' . $colores[rand(0,3)] . ';"> ';
//  echo '</body>'

  $r = $colores[rand(0,3)];
  include('index.html');
//  echo ' <style>   body {background-color:' . $r . ';}  </style>';
  echo ' <style>   body {background-image: url(' . $img[rand(0,3)] . ');}  </style>';
//  echo ' <style>   div{background-color:' . $r . ';}  </style>';
?>



<?php
  echo 'FIN del archivo php';
?>
