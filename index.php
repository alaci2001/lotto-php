<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        Ez az index.php
         <?php
            include("fuggveny.php");
            $sorsolt=sorsolas();
            var_dump($sorsolt);
            //lottóhúzás
            
            echo "Ez volt a számtömb";
            echo "Itt már a php script fut";
        // put your code here
        ?>
    </body>
</html>
