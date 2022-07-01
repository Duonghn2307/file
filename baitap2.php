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
            if($c == 0){
                echo "phuong trinh vo so nghiem";

            }else{
                echo "phuong trinh vo nghiem ";

            }
        }else{
            $x = -$c/$b;
            echo "phuong trinh co mot nghiem = $x";
        }
    }else{
        $d = $b*$b - 4*$a*$c;
        if($d == 0){
            $x = -$b/2*$a;
            echo "phuong trinh cos nghiem kep  =$x";
        }elseif($d > 0){
            echo "phuong trinh co hai nghiem";
            $x1 = (-$b + sqrt($d))/(2*$a);
            $x2 = (-$b - sqrt($d))/(2*$a);
            echo "x1 = $x1<br>";
            echo "x2 = $x2";
        }else{
            echo "phuong trinh vo nghiem";
        }

        
    }
    ?>
</body>
</html>