<?php
// 23/02/26 21:10~21:47 (0:37経過)

// get input into variable
fscanf(STDIN, '%d', $n);
$x = explode(' ', trim(fgets(STDIN)));

// sort array in ascending order
sort($x);

// initialize sum
$sum = 0;

// start from $n index and end at -$n index
for ($i = $n; $i < count($x) - $n; $i++) {
	$sum += $x[$i];
}

// get average by 3$n (5$n - 2$n)
echo $sum / ($n * 3);