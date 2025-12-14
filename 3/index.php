<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    function even_odd($num){
        if($num%2==0){
            echo "$num is even";
        }
        else{
            echo "$num is odd";

        }
    }

    even_odd(12);

     ?>
</body>
</html>