
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
$sayac= 0 ;

while ($sayac <count($dizi8)){

    echo $dizi8[$sayac]."<br>";
    $sayac++;
}

echo"<br> <br> <br> <br>";
$sayac2=0;
do {

    echo $dizi8[$sayac2]."<br>";
    $sayac2++;
}while ($sayac2 <count($dizi8));

?>
</body>
</html>