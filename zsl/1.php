<?php
  echo "ZSŁ<br>";
  echo "ZSŁ<hr>";

  $name="Janusz";
  echo 'Imię: $name<br>'; //$name
  echo "Imię: $name<hr>"; //Janusz

  // typy danych
  // całkowity

$całkowita=10; // zmienna w języku polskim
$bin=0b1011; // 11(2)
$oct=01011; //521(8)
$hex=0x1011; //4113(16)

// konkatenacja .    interpolacja ,

echo "$całkowita<br>";
echo $bin, '<br>';
echo "$oct<br>";
echo $hex;

// zmiennoprzecinkowy

$x=10.5;

// logiczny

$prawda=true; //1
$falsz=false; //nic nie wyświetli
echo $falsz;

// składnia heredoc

echo <<< ETYKIETA
  <hr>Imię: $name<br>
  ZSŁ<br>
  Poznań<br>
ETYKIETA;

$text = <<< ETYKIETA
  <hr>Imię: $name<br>
  ZSŁ<br>
  Poznań<br>
ETYKIETA;
echo $text;

// składnia nowdoc

echo <<< 'ETYKIETA'
  <hr>Imię: $name<br>
  ZSŁ<br>
  Poznań<br>
ETYKIETA;

echo "Nazwa zmiennej imie: \$name";

 ?>
