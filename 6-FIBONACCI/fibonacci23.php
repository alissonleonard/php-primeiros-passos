<html>
<style>
  body {
    font-size: 20;
    font-family:sans-serif;
    font-weight: bold;
  }
input {
    font-size: 20px;
    font-weight: bold;
   }

  /* http://cssdemos.tupence.co.uk/button-styling.htm */ 
  input#shiny {
padding: 4px 20px;
/*dá um efeito gradiente ao fundo*/
background:#ffae00; /*substituto para navegadores que não suportam gradientes*/
background: -webkit-linear-gradient(top, blue,blue);
background: -moz-linear-gradient(top, blue, blue);
background: -o-linear-gradient(top, blue, blue);
background: linear-gradient(top, blue, blue);
border:2px outset #dad9d8;
/*style the text*/
font-family:Andika, Arial, sans-serif; /* http://www.google.com/webfonts/specimen/Andika*/
font-size:1.1em;
letter-spacing:0.05em;
text-transform:uppercase;
color:#fff;
text-shadow: 0px 1px 10px #000;

/*adiciona uma pequena curva aos cantos do botão*/
-webkit-border-radius: 15px;
-moz-border-radius: 15px;
border-radius: 15px;
/*dar uma sombra projetada no botão*/
-webkit-box-shadow: rgba(0, 0, 0, .55) 0 1px 6px;
-moz-box-shadow: rgba(0, 0, 0, .55) 0 1px 6px;
box-shadow: rgba(0, 0, 0, .55) 0 1px 6px;
}
/*ESTILO DO BOTÃO*/
input#shiny:hover, input#shiny:focus {
border:2px solid #dad9d8;
}
 </style>
<body>
  <?php
  $values = $_POST['inputText'];


  if(isset($_POST['ClearButton'])){
  $values = "";

  }

   ?>
  <br>
  <h4> Fibonacci no php </h4>
  <form action="" method="post">
  Digite um número:
  <input type="text" name="inputText" size="5" maxlength="5"
  value="<?php echo $values; ?>"  style="width:100px; height:30px;" required autofocus=""/>
  <br><br>
  <input id="shiny" type="submit" value="OK" name="SubmitButton"/>
  &nbsp;&nbsp;&nbsp;
  <input id="shiny" type="submit" value="LIMPAR" name="ClearButton"/>
</form>
<?php

// FUNÇÃO QUE GERA OS ARQUIVOS FIBONACCI
function DiplayFibonacciSeries($n)
 {
 
  $first = 0;
  $second = 1;
 
  echo "<h4>Fibonacci Series</h4>";
  echo $first.' '.$second.' ';
 
  for($i = 2; $i < $n; $i++){
 
    $third = $first + $second;
 
    echo $third.' ';
 
    $first = $second;
    $second = $third;
 
    }
}

$values = $_POST['inputText'];

if(isset($_POST['SubmitButton']))
   {

  $n= (int)$values;
  DiplayFibonacciSeries($n);
 }

?>

</body>
</html>
