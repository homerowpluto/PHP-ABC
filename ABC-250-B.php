<?php

/**
 * author: ririli
 */
fscanf(STDIN, "%d %d %d", $N, $A, $B);

for ($l = 0; $l < $N; $l++) {
	for ($i = 0; $i < $A; $i++) {
		for ($j = 0; $j < $N; $j++) {
			for ($k = 0; $k < $B; $k++) {
				if ($l % 2 == 0) {
					if ($j % 2 == 0) {
						echo ".";
					} else {
						echo "#";
					}
				} else {
					if ($j % 2 == 0) {
						echo "#";
					} else {
						echo ".";
					}
				}
			}
		}
		echo "\n";
	}
}


/**
 * author: ysknsid25
 *
 */
[$n, $a, $b] = explode(' ', trim(fgets(STDIN)));

$row = $n * $a;
$col = $n * $b;

for ($i = 0; $i < $row; $i++) {
  for ($j = 0; $j < $col; $j++) {
    $attribute = floor(($i / $a)) + floor(($j / $b));
    if ($attribute % 2 === 0) {
      echo ".";
    } else {
      echo "#";
    }
  }
  echo "\n";
}

/**
 * author: shiman
 */
fscanf(STDIN, "%d %d %d", $n, $a, $b);

$hColor = '.';

for ($i = 0; $i < $n; $i++) {
	for ($j = 0; $j < $a; $j++) {
		$wColor = $hColor;

		for ($k = 0; $k < $n; $k++) {
			for ($l = 0; $l < $b; $l++) {
				echo $wColor;
			}

			$wColor = $wColor === '.' ? '#' : '.';
		}

		echo "\n";
	}

	$hColor = $hColor === '.' ? '#' : '.';
}