
<?php
 
$db = [
    'teachers' => [
        [
            'name' => 'Michele',
            'lastname' => 'Papagni'
        ],
        [
            'name' => 'Fabio',
            'lastname' => 'Forghieri'
        ]
    ],
    'pm' => [
        [
            'name' => 'Roberto',
            'lastname' => 'Marazzini'
        ],
        [
            'name' => 'Federico',
            'lastname' => 'Pellegrini'
        ]
    ]
];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
<?php
            foreach($db as $key => $value){
                echo "<h2>{$key}</h2> ";
                
               
               foreach ($value as $props => $item) {
                echo "<h2>{$item}</h2> ";
                
                if($item == 'teachers'){
                    echo "<p class='grigio'>{$item['name']} - {$item['lastname']}</p>"; 
                   }else{
                        echo "<p class='verde'>{$item['name']} - {$item['lastname']}</p>";
                   }
               }
                
            }
        ?>

        
</body>
</html>