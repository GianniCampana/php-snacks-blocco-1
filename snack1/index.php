<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>basket</title>
</head>
<body>

<?php


$partite=[
    [
        "team1"=> "milano",
        "team2"=> "brescia",
        "punti1"=> 50,
        "punti2"=> 35
    ],
    [
        "team1"=>"pescara",
        "team2"=>"pineto",
        "punti1"=> 60,
        "punti2"=> 45
    ],
];

?>

<ul>

<?php  foreach ($partite as $partita) {?>
   <li> <?php echo $partita['team1'] ?> - <?php echo $partita['team2'] ?> | <?php echo $partita['punti1'] ?>-<?php echo $partita['punti2'] ?></li>

  <?php }?>
</ul>
    
</body>
</html>