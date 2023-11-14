<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Kondisi</title>
</head>
<body>
    <h2>Penggunaan If-Else</h2>
    <?php
        $nama_hari = date("1");
        if ($nama_hari == "Sunday") {
            echo "Minggu";
        } elseif ($nama_hari == "Monday") {
            echo "Senin";
        } else {
            echo "Selasa";
        }    
    ?>    

    <h2>Penggunaan Switch</h2>
    <?php
        $nama_hari = date("1");
        switch ($nama_hari) {
            case "Sunday":
                echo "Minggu";
                break;
            case "Monday";
                echo "Senin";
                break;
            case "Tuesday";
                echo "Selasa";
                break;
            default;
                echo "Sabtu";
        }
    ?>              
</body>
</html>