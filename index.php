<?php
    $paskola = (rand(1, 100));
    $palukanos = (rand(101, 200));
    $palukaneles = (rand(201, 300));
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>PHP lydės</title>
    </head>
    <body>
        <div>
            <h1>Skolos skaičiuoklė</h1>
            <p>Jei paėmei <?php print $paskola;?> jievru</p><br>
            <p>Su dviem kabančiais grąžinsi <?php print $palukaneles;?></p><br>
            <p>Su vienu kabančiu grąžinsi <?php print $palukanos;?></p>
        </div>   
    </body>
</html>
