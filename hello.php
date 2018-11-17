<?php
// argc is an integer varable containing the argument
// count 
// argv is an array variable containing each argument's value.
if ($argc !== 2) {
	echo "Usage: php hello.php [name].\n";
	exit(1);
}
$name = $argv[1];

// nowdoc syntax
echo "Hello, $name\n";
$a = "James";
$str = <<<'EOD'
	EXAMPLE: of string
	spanning multiple lines
	using nowdoc syntax.
	$a does not parse
EOD;

// Heredoc syntax
$str1 = <<<EOD
EXAMPLE: of string
	spanning multiple lines
	using nowdoc syntax.
	$a does parse
EOD;
var_dump($str);
var_dump($str1);