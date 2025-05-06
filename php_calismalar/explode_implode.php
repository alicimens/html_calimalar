<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

// explode  >>>>>  String den   diziye
//  implode  >>>>>> Dizi'den   stringe 


$abc = "elma, armut ,çilek"; 

 $x = explode("," , $abc); // virgül  e  göre  dizi olusuturur  ve  sifirdan baslayarak indexler
print_r($x);
echo "<br>  <br>";

$def = ["messi","ronaldo","drogba"]; // her index arasina  çizgi  koyar tek  stringe  çevirir

$a = implode ("-",$def);

echo $a;


?>



</body>
</html>