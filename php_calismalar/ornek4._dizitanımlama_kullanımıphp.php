
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php 

$dizi1 = array(" , , ,");   // 1.dizi  tanimlama yontemi
$dizi2[] = "" ;         // 2. dizi  tanimlama  yontemi... birden  fazla eleman  tanimlayacaksak koseli parantezi  karsiya (sağa) koyariz 

$ornek =  ["php" =>"gs","fb","bjk"];   // burada  0. indis  gs  değil  fb.. php  adindaki  indiste gs ye  eşit
echo$ornek["php"]." ".ucfirst($ornek[0])." ".strtoupper($ornek[1]);

// ucfirst  kullanarka  0. indisteki kelimenin  ilk  harfini  buyuk yaptik
//strtoupper  kullanarak da  1. indisteki  kelimenin tüm harflerini  buyuk  yaptik

?>
</body>
</html>