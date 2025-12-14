<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        function calculateArea($length, $width){
            $rect_area = $length * $width;
            echo "Rectangle area: $rect_area <br>";
            
            $perimeter = 2*($length*$width);
            echo "Rectangle perimeter: $perimeter <br>";

        }

        echo calculateArea(5,6);

    ?>
</body>
</html>