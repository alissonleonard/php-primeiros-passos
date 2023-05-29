<?php

$texto ='Texto com qualaquer coisa poxa e caramba';


// mostrar 
echo str_replace( 
    ['poxa', 'caramba'], 
    ['P', 'C'], 
    $texto
) . PHP_EOL;

echo strtr($texto, 'poxa', '***') . PHP_EOL;
echo strtr($texto, ['poxa' => 'p', 'caramba' =>'c']) . PHP_EOL;

