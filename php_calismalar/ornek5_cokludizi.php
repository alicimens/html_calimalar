
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php   $dizi = [
"gs"=> array("muslera","drogba","icardi"),
"fb" => array("alex","tadic","dzeko"),
"bjk"=> array("talisca","rafa","immobile")
]
?>

<!--

bak yukarda php kodlarının içinde dizi  adinda dizi  tanimladik.. 
sonra da  gs  fb bjk  adinda   dizi  tanimladik.

gs  fb  bjk  anahtar  kelime olduğunu da soyluyor   hoca

alt tarafta da ul  ve li  yapilarını  icinde  php  tanimlayarak echo ile  ekrana verdik

-->
<ul>
<li> <?php echo $dizi["gs"][0]?></li> <!-- burada  php  yazarak  tanimladik-->
<li><?=$dizi["fb"][0]?></li> <!-- burada ise sadece soru  isareti  kullanarak tanimladik-->
<li><?= $dizi["bjk"][1] ?></li>
</ul>
</body>
</html>