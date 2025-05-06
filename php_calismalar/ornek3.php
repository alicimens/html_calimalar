
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php 


$metin = "php de  neler Yapabiliriz";

echo $metin."<br> <br>";   // nokta  kullanarak  bosluk  verme  stringini  birlestiriyoruz aslinda 



$kucuk = strtolower($metin,);
echo $kucuk."<br> <br>";

$buyuk =strtoupper($metin);
echo $buyuk."<br>";

$buyukharf = ucwords($metin); //her  kelimenin  ilk  harfini  buyutur
echo $buyukharf."<br> <br>";

$ilkbuyukharf = ucfirst ($metin) ;//  cumlenin  ilk  harfini  buyuk  yapar
echo $ilkbuyukharf;

?>
</body>
</html>