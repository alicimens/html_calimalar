<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<?php  

include_once("mayis6.php");  
// bu  komut sayesinde diğer  sayfadaki  degiskenleri  burada  kullanabiliyoruz 
// require_once ("mayis6.php") // include  yerine  bunu da kullanabiliriz...  

echo $abc."<br>";
?>
</body>
</html>

<!--

"include" ve "require"  adinda  da  komutlarimiz var onlar da çağrıldıgi  sürece  entegre eder 

ama once  olursa sadece  bir  kez  entegre eder...

mesela  include("mayis6.php")   yazdik 3 kez ... 3 kere mayis6  dosyasindaki kodlari  getirir

--> 