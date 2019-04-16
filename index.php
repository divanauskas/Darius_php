<!doctype html>
<html>
    <head>
        <title>PHP lydės ir <?php print date('l', strtotime('+1 day')) ?></title>
    </head>
    <body>
        <h1>Vardas - PHP su manim buvo ir <?php print date('h', strtotime('-1 hours')) . ' valandą!' ?></h1>
        <p><?php print date('Y', strtotime('+1 year')) . ' už kalnų!'; ?></p>   
    </body>
</html>