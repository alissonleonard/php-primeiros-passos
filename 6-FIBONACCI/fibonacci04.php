
<?php  

//função recursiva
//recursão é uma maneira pela qual chamamos repetidamente a mesma função até que uma condição de base seja correspondida para encerrar a recursão

function Fibonacci($number){
      
//
    if ($number == 0)
        return 0;    
    else if ($number == 1)
        return 1;    
      
    
    else
        return (Fibonacci($number-1) + 
                Fibonacci($number-2));
}
  
$number = 10;
for ($counter = 0; $counter < $number; $counter++){  
    echo Fibonacci($counter),' ';
}
