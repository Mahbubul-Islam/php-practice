<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    for($i=0; $i<3;$i++ ){
        for($j=0; $j<=$i; $j++ ){
            echo "*";
        } 
        echo "<br>";
    }

    
    for ($i = 3; $i >= 1; $i--) {
        for ($j = 1; $j <= $i; $j++) {
            if ($i == 3 && $j < $i) {
                echo $j . " ";
            } else {
                echo $j;
            }
        }
        echo "<br>";
    }
    
    $ch = 'A';
    for ($i = 1; $i <= 3; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo $ch . " ";
        $ch++;
    }
    echo "<br>";
}


    

     ?>
</body>
</html>