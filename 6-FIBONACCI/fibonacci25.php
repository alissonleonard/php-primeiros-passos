<html>
<body>
  <form method="post">
    <input type="text" name="Number" >
  <button name="submit">Submit</button>
  </form>
</body>
</html>
<?php
if (isset($_POST['submit'])) {
  $n=$_POST['Number'];
  $number1 = 0;
  $number2 = 1;
  echo "Fibonacci Series \n";
  echo $number1.' '.$number2.' ';
  for($i = 2; $i < $n; $i++){
    $number3= $number1 + $number2;
    echo $number3.' ';
    $number1 = $number2;
    $number2 = $number3;
    
  }
}
    ?>