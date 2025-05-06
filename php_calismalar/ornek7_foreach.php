
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php

$dizi8 = array("ayse","ahmet","ali","fatma","messi","ikardiyolog");

print_r($dizi8)."<br>"; // bu  print_r komutu sayesin de indis  numarasini da  ekrana  verebiliyoz

// foreach in mantigini alttaki  ornek  uzerinden  anlatalim:  dizi8 adindaki dizinin her  elemanini bilgi degiskenine  atayarak  kullan
foreach ($dizi8 as $bilgi) {

    echo $bilgi."<br>";
}


// alttaki  koddta  anahatar  deger  kullanırsak  nasil  yazdiracagimiz  anlatilmis
$dizi9  = ["tantuni", "yemek" =>"kebap", "yemek2"=>"doner","kumru","hamburger","pizza"];

foreach ($dizi9 as  $anahtar =>$bilgi2) {


    echo $anahtar." - ". $bilgi2."<br>" ; 
}

?>
</body>
</html>