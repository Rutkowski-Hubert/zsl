<?php

  echo PHP_VERSION, '<br>'; // 8.0.10
  echo 2**10, '<br>'; // 1024

  $x=10;
  $y=100;
  echo $x<=>$y, '<br>', '<hr>';

  echo gettype($x), '<br>'; // integer
  echo gettype($y), '<br>', '<hr>'; // double

  if ($x==$y) {
    echo "równe", '<br>';
  }else {
    echo "różne", '<br>';
  }

  if ($x===$y) {
    echo "identyczne", '<br>', '<hr>';
  }else {
    echo "różne", '<br>', '<hr>';
  }

  /*
    postinkrementacja $x++
    preinkrementacja ++$x
    postdekrementacja $x--
    predekrementacja --$x
  */

  $x=1;
  echo $x, '<br>'; // 1
  echo ++$x; // 2
  echo $x++; // 2
  echo ++$x; // 4

  $x=$x++;
  echo $x; // 4

  $y=$x++;
  echo $y; // 4
  echo $x, '<br>', '<br>'; // 5

  // zadanie

  $x=1;
  echo $x; // 1

  $x=$x++;
  echo $x; // 1

  $x=++$x;
  echo $x; // 2

  $y=++$x;
  echo $x; // 3
  echo $y; // 3

  $y=$x++;
  echo $x; // 4
  echo "$y<br>"; //3

 ?>
