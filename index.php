<!DOCTYPE html>
<html>
    <head>
        <title>PHP lydės ir <?php print date(rand(2019, 2029)) . "-" . date(rand(1, 12)); ?>!</title>
    </head>
    <body style="background-color: rgb(
        
        <?php 
        
        print rand(000, 255) . ', ' . rand(000, 255) . ', ' . rand(000, 255); 
        
        ?>
          
        ")>
        
        
        <h1 style="font-size: 
            <?php print rand(0, 100) . 'px'; ?>;">Aš keičiu savo dydį!</h1>
            
            
            <p style="color: rgb(
               
               <?php
               
               print rand(000, 255) . ', ' . rand(000, 255) . ', ' . rand(000, 255);
               
               ?>)
               
               ">Aš keičiu savo spalvą</p>
            
          <img src="<?php print rand(1, 6); ?>.png"> 
      
        <h1>Glabūt turėsiu <?php print rand(1, 5); ?> vaikų(us)!</h1> 
        <p>D. Trump'as nebebus prezidentu <?php print date(rand(2021, 2031)) . date(' M-d'); ?> </p>
        
                 
    <?php
        $a = 'Opa';
        $b = '1';
        $c = '2.53';
        $d = 'true';
        $e = 'null';

        print $a;
        print $b;
        print $c;
        print $d;
        print $e;
    ?>        
    </body>
</html>
