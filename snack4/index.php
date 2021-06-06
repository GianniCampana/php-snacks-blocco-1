<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RANDOM</title>
</head>
<body>

<?php 



function numeriRandom($min,$max,$nItems)
{
    $arrNumRand= [];
    while (count($arrNumRand) < $nItems){
        $numRand=rand($min,$max);
        if(!in_array($numRand, $arrNumRand)){
            $arrNumRand[]= $numRand;
        }
    }
    return $arrNumRand;
}

?>
<h1>numeri</h1>

<ul>
<?php foreach(numeriRandom(1,100,15) as $num) {?>
    <li><?php echo $num ?></li>
<?php }?>
</ul>

</body>
</html>