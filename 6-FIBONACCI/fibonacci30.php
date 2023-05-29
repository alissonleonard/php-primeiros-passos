
<!DOCTYPE html> FIBONACCI
<html>
  <body>
    <table>
      <tr>
        <th>Sequência //</th>
        <th>Valor</th>
      </tr>
      <tr>
        <td>F<sub>0</sub></td>
        <td>0</td>
      </tr>
      <tr class="alt">
        <td>F<sub>1</sub></td>
        <td>1</td>
      </tr>
        <?php
        
        $iterations = 10;
        
        $num1 = 0;
        $num2 = 1;
        
        for ( $i=2; $i <= $iterations; $i++ )
        {
          $sum = $num1 + $num2;
          $num1 = $num2;
          $num2 = $sum;
        ?>
              <tr<?php if ( $i % 2 != 0 ) echo ' class="alt"' ?>>
                <td>F<sub><?php echo $i?></sub></td>
                <td><?php echo $num2?></td>
              </tr>
        <?php
        }
        ?>
    </table>
  </body>
</html>