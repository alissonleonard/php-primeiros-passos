
<html>
<head>
<title>Programa PHP Para encontrar a série Fibonacci de um determinado número</title>
</head>
<body>
<form method="post">
<table>
<tr>
<td> <input type="text" name="num1" value="" placeholder="Entre com um número"/> </td>
</tr>
<tr>
<td> <input type="submit" name="submit" value="gerar"/> </td>
</tr>
</table>
</form> 
<?php
if(isset($_POST['submit']))
{
$n = $_POST['num1'];
$num1 = 0; // início da
$num2 = 1;
echo "Sequência Fibonacci: $n :";
echo $num1.'  '.$num2;
//Loop e printando a sequencia de fibonacci
for($i = 2; $i < $n; $i++)
{
$num3 = $num1 + $num2 ;
echo '   '.$num3 ;
$num1 = $num2 ;
$num2 = $num3;
}
return 0;
}
?>
</body>
</html>