<?php 

$a = [784, 124, 255, 454, 233, 678, 728, 831, 221, 450];

$aLength = count($a);

$matrix = [];

$i = 0;

while ($i <= $aLength) {
  foreach ($a as $num) {
  	$end = str_split($num);
  	$end = end($end);

    if ($end == $i) {
      $matrix[0][$i][] = $num;
    }
  }
  $i++;
}

$a2 = [];

foreach ($matrix[0] as $indice => $nums) {
  foreach ($nums as $num) {
    $a2[] = $num; 
  }
}

$i = 0;

$matrix2 = [];
while ($i <= $aLength) {
  foreach ($a2 as $num) {
    $end = str_split($num);
    $end = $end[1];

    if ($end == $i) {
      $matrix2[0][$i][] = $num;
    }
  } 

  $i++;
}

$a3 = [];
foreach ($matrix2[0] as $indice => $nums) {
  foreach ($nums as $num) {
    $a3[] = $num; 
  }
}

$i = 0;
$matrix3 = [];
while ($i <= $aLength) {
  foreach ($a3 as $num) {
    $end = str_split($num);
    $end = $end[0];

    if ($end == $i) {
      $matrix3[0][$i][] = $num;
    }
  } 

  $i++;
}

$a4 = [];
foreach ($matrix3[0] as $indice => $nums) {
  foreach ($nums as $num) {
    $a4[] = $num; 
  }
}


?> 

<table style="width:100%" border='1'>
  <tr>
    <?php foreach ($a as $index => $m) { ?>
    <th><?php echo $index ?></th>
    <?php } ?>
  </tr>
  <tr>
    <?php foreach ($a as $index => $m) { ?>
    <td><?php echo($m) ?></th>
    <?php } ?>
  </tr>
</table> 

<table style="width:100%" border='1'>
  <tr>
  	<?php foreach ($matrix[0] as $index => $m) { ?>
    <th><?php echo $index ?></th>
    <?php } ?>
  </tr>
  <tr>
  	<?php foreach ($matrix[0] as $index => $m) { ?>
    <td><?php print_r($m) ?></th>
    <?php } ?>
  </tr>
</table>

Vetor Reunido dnv a2

<table style="width:100%" border='1'>
  <tr>
    <?php foreach ($a2 as $index => $m) { ?>
    <th><?php echo $index ?></th>
    <?php } ?>
  </tr>
  <tr>
    <?php foreach ($a2 as $index => $m) { ?>
    <td><?php echo($m) ?></th>
    <?php } ?>
  </tr>
</table> 

Matriz 2
<table style="width:100%" border='1'>
  <tr>
    <?php foreach ($matrix2[0] as $index => $m) { ?>
    <th><?php echo $index ?></th>
    <?php } ?>
  </tr>
  <tr>
    <?php foreach ($matrix2[0] as $index => $m) { ?>
    <td><?php print_r($m) ?></th>
    <?php } ?>
  </tr>
</table>

Vetor Reunido dnv a3

<table style="width:100%" border='1'>
  <tr>
    <?php foreach ($a3 as $index => $m) { ?>
    <th><?php echo $index ?></th>
    <?php } ?>
  </tr>
  <tr>
    <?php foreach ($a3 as $index => $m) { ?>
    <td><?php echo($m) ?></th>
    <?php } ?>
  </tr>
</table> 


Matriz 3
<table style="width:100%" border='1'>
  <tr>
    <?php foreach ($matrix3[0] as $index => $m) { ?>
    <th><?php echo $index ?></th>
    <?php } ?>
  </tr>
  <tr>
    <?php foreach ($matrix3[0] as $index => $m) { ?>
    <td><?php print_r($m) ?></th>
    <?php } ?>
  </tr>
</table>

Vetor Reunido dnv a4

<table style="width:100%" border='1'>
  <tr>
    <?php foreach ($a4 as $index => $m) { ?>
    <th><?php echo $index ?></th>
    <?php } ?>
  </tr>
  <tr>
    <?php foreach ($a4 as $index => $m) { ?>
    <td><?php echo($m) ?></th>
    <?php } ?>
  </tr>
</table> 