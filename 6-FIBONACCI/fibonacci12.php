<?php
 
$a=0;
 
$b=1;
 
$c=0;
echo ("$a\n");
 
echo ("$b\n");
 
for ($i=0;$i<=17;$i++)
 
{
 
$c=$a+$b;
 
$a=$b;$b=$c;
echo ("$c\n");
 
}
 
