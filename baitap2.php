<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $a = $_POST ['a'];
    $b = $_POST ['b'];
    $c = $_POST ['c'];
    echo $a."x +  ".$b."x + ".$c." = 0"."<br>";
    if($a == 0){
        if($b == 0){
           
            $x = -$c/$b;
            echo "phuong trinh co mot nghiem = $x";
        }
    }else{
        $d = $b*$b - 4*$a*$c;
      

        
    }
    ?>
</body>
</html>
