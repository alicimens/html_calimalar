
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php 

$dizi = array ("a","b","c","d","e","f","g");

for ($i = 0;$i <count($dizi);$i++){

    echo $dizi[$i]." <br>";
}

?>

<select>

<?php

for ($x = 1960 ; $x <=2025; $x++){

    echo '<option>'. $x. '</option>';
}
?>

</select>
</body>
</html>