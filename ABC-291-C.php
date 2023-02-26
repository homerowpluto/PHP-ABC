<?php
// 23/02/26 21:47~22:40 (0:53経過) 時間切れ

/**
 * TLE
 */
// get input into variable
fscanf(STDIN, '%d', $n);
fscanf(STDIN, '%s', $s);

$x = 0;
$y = 0;

$path_x[0] = 0;
$path_y[0] = 0;

for ($i = 0; $i < $n; $i++) {
	switch ($s[$i]) {
		case 'R':
			$x += 1;
			break;
		case 'L':
			$x -= 1;
			break;
		case 'U':
			$y += 1;
			break;
		case 'D':
			$y -= 1;
			break;
	}

	if (in_array(['x' => $x, 'y' => $y], $path)) {
		echo "Yes";
		break;
	} elseif ($i == $n - 1) {
		echo "No";
	} else {
		$path_x[$i + 1] = $x;
		$path_y[$i + 1] = $y;
	}
}

/**
 * author: inaba3
 * edited
 */
// get input into variable
fscanf(STDIN, '%d', $n);
fscanf(STDIN, '%s', $s);

// initialize position
$map[0][0] = true;

// position delta
$x = array(1, -1, 0, 0);
$y = array(0, 0, 1, -1);

// directions for position delta
$directions = array("R", "L", "U", "D");

// current position index
$x_pos = 0;
$y_pos = 0;

foreach ($s as $path) {

	// get position delta key from directions
	$key = array_search($path, $directions);

	// change current position index
	$x_pos += $x[$key];
	$y_pos += $y[$key];

	// check if position was accessed before
	if (isset($map[$x_pos][$y_pos])) {
		echo "Yes";
		exit;
	}

	// record path
	$map[$x_pos][$y_pos] = true;
}
echo "No";