<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    function vat($price){
        $vat_rate = 0.15;
        $vat_amount = $price * $vat_rate;

        echo "vat amount for $price is $vat_amount";
    }

    vat(2400);

     ?>
</body>
</html>