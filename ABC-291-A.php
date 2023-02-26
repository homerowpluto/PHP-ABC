<?php
// 23/02/26 21:00~21:10 (0:10経過)

// get input into variable
fscanf(STDIN, '%s', $s);

for ($i = 0; $i < strlen($s); $i++) {

	// ASCII lowercase is between 97 to 122
	// ASCII uppercase is between 65 to 90

	// check if character is uppercase
	if (ord($s[$i]) >= 65 && ord($s[$i]) <= 90) {
		echo $i + 1;
		break;
	}
}