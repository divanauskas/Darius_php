<?php

    $paskola = rand(1, 100);
    $palukanos = rand(101, 200);
    $palukaneles = rand(201, 300);
    
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>PHP lydės</title>
    </head>
    <body>
        <h1>Skolos skaičiuoklė</h1>
        <h2>Jei paėmei <?php print $paskola;?> jievru</h2>
        <h3>Su dviem kabančiais grąžinsi <?php print $palukaneles;?></h3>
        <h3>Su vienu kabančiu grąžinsi <?php print $palukanos;?></h3> 
    </body>
</html>
