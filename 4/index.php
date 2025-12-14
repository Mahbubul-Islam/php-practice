<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    function largest_num($a, $b, $c){
        if($a >= $b and $a >= $c){
            echo "$a is largest";
        }
        elseif ($b>=$c and $b>=$a) {
            echo "$b is largest";
        }
        else{
            echo "$c is largest";
        }
    }

    largest_num(3,6,8);

     ?>
</body>
</html>