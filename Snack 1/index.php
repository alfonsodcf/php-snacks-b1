<?php

$partite = [
    [
        'sCasa' => 'warriors',
        'fCasa' => 'Mavericks',
        'PsCasa' => 120,
        'PfCasa' => 110
        
    ],
    [
        'sCasa' => 'Mavericks',
        'fCasa' => 'warriors',
        'PsCasa' => 100,
        'PfCasa' => 109
        
    ],
    [
        'sCasa' => 'Miami Heat',
        'fCasa' => 'Boston Celtics',
        'PsCasa' => 120,
        'PfCasa' => 120
        
    ],
    [
        'sCasa' => 'Boston Celtics',
        'fCasa' => 'Miami Heat',
        'PsCasa' => 109,
        'PfCasa' => 109
        
    ],
    [
        'sCasa' => 'Kings',
        'fCasa' => 'Suns',
        'PsCasa' => 124,
        'PfCasa' => 127
    ],
    [
        'sCasa' => 'Suns',
        'fCasa' => 'Kings',
        'PsCasa' => 109,
        'PfCasa' => 116
        
    ],

]
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php foreach($partite as $partita){?>
        <h2><?php echo $partita['sCasa']?> - <?php echo $partita['fCasa']?></h2>
        <h3><?php echo $partita['PsCasa']?> - <?php echo $partita['PfCasa']?></h3>
    <?php } ?>
    
</body>
</html>