<?php
	$op1 = true;  // $op1 est vrai
	$op2 = false; // $op2 est faux
	// Opération et
	$op3 = ($op1 AND $op1); // $op3 est vrai
	$op4 = ($op1 AND $op2); // $op4 est faux
	$op5 = ($op2 AND $op2); // $op5 est faux
	// Opération ou
	$op6 = ($op1 OR $op1); // $op6 est vrai
	$op7 = ($op1 OR $op2); // $op7 est vrai
	$op8 = ($op2 OR $op2); // $op8 est faux
	// Opréation inversion
	$op9 = ! $op1; // $op9 est faux
?>

<!DOCTYPE html>
<html>
  <head>
  	<meta charset="UTF-8">
    <title>Opérations logiques</title>
  </head>
  <body>    
    <p> $op1 = <?php echo $op1; ?> </p>
    <p> $op2 = <?php echo $op2; ?> </p>
    <p> $op3 = <?php echo $op3; ?> </p>
    <p> $op4 = <?php echo $op4; ?> </p>
    <p> $op5 = <?php echo $op5; ?> </p>
    <p> $op6 = <?php echo $op6; ?> </p>                           
    <p> $op7 = <?php echo $op7; ?> </p>    
    <p> $op8 = <?php echo $op8; ?> </p>    
    <p> $op9 = <?php echo $op9; ?> </p>    
  </body>
</html>