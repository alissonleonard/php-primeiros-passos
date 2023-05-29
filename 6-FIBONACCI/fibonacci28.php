
<?php 
extract($_REQUEST);
if(isset($check))
{
$num = 0;  
$n1 = 0;  
$n2 = 1;  
echo "<h3>Série de Fibonacci mostrando os  $n números: </h3>";  
echo "\n";  
echo $n1.' '.$n2.' ';  
while ($num < $n-2 )  
{  
    $n3 = $n2 + $n1;  
    echo $n3.' ';  
    $n1 = $n2;  
    $n2 = $n3;  
    $num = $num + 1;  
}
}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Form</title>
	</head>
	<body>
		<form method="post">
		<table>
		<tr>
		<td>Insira um número</td>
		<td><input type="text" name="n" required/></td>
		</tr>
		<td colspan="2" text-align="center">
			<input type="submit" value="Gerar valores" name="check"/>
		</tr>
		</form>
	</body>
</html>
</html>