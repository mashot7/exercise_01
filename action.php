<?php

// Take values from form
$a = $_POST['quadrad']['0'];
$b = $_POST['quadrad']['1'];
$c = $_POST['quadrad']['2'];

// Checking is empty or not
if($a==''){
	$a = 1;
} elseif($a == 0) {
	echo 'a can\'t be a 0. Please insert another number';
	exit();
}
if($b==''){
	$b = 1;
}
if($c==''){
	$c = 0;
}

// Writing inserted values
echo 'a = ' . $a,'<br>','b = ' . $b,'<br>', 'c = ' . $c, '<br>';
$d = $b * $b - 4 * $a * $c;
echo 'D = '. $d . '<br>';

// Calculate roots
if ($d < 0) {
	$output = "NO real roots"; 
} elseif ($d == 0) {
	$r1 = -$b / (2 * $a);
	$output = 'Roots are: r<sub>1</sub> =  r<sub>2</sub> = ' . $r1;
} elseif ($d > 0) {
	$d1 = sqrt($d);
	$r1 = (-$b + $d1) / (2 * $a);
	$r2 = (-$b - $d1) / (2 * $a);
	$output = 'Roots are: r<sub>1</sub> = ' . $r1 . ', r<sub>2</sub> = ' . $r2;
} else{
	$output = "Error";
}

// Send result to ajax
echo $output;