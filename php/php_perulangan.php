<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Perulangan</title>
</head>
<body>
    <h2>Perulangan <em>For</em></h2>
    <?php
        echo "Perulangan 1 sampai 10 <br>";
        for ($i = 0; $i <= 10; $i++) {
            echo "Perulangan ke - $i <br>";
        }  

        echo "<br>Perulangan menurun 10 sampai 1 <br>";
        for ($i = 10; $i >= 1; $i--) {
            echo "Perulangan ke - $i <br>";
        }   
    ?>   

    <h2>Perulangan <em>While</em></h2>
    <?php
        echo "Perulangan 1 sampai 10 <br>";
        $i = 1;
        while ($i <= 10) {
            echo "Perulangan ke - $i <br>";
            $i++;
        } 
    ?>

    <h2>Perulangan <em>Do...while</em></h2>
    <?php
        echo "Perulangan 1 sampai 10 <br>";
        $i = 1;
        do {
            echo "Perulangan ke - $i <br>";
            $i++;
        } while ($i <= 10);
    ?>   
</body>
</html>