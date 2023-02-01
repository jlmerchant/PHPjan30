<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="css/styles.css">
    <title>Include Lab</title>
</head>

<body>
    <?php 
        define("INCL", "includes/");
        define("DATA", "data/");
        include INCL."banner.php"
    ?>
    <h3>File Lab</h3>
    <main>


        <?php
            $ordersFile = fopen(DATA.'orders.txt', 'r');
            

            //$buffer = fgetcsv($ordersFile);
            //echo "$buffer <br />"; 
            //print_r($buffer); 
            while(($buffer = fgets($ordersFile)) != false) {
                echo "$buffer<br />";
            }
            $logFile = fopen(DATA.'logExample.txt','w');
            $buffer = "Steve was here/n";
            fwrite($logFile, $buffer);
            fwrite($logFile, $buffer);
            fwrite($logFile, $buffer); 
            


            fclose($ordersFile); 
        ?>


    </main>

</body>

</html>