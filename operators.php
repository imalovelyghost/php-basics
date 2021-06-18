<?php echo '<H1>OPERATORS</H1>';

$a=11;
$b=5;
echo '<H2>Arithmetic operators</H2>';
// Create an example of use for arithmetic operators: +, -, *, /, and%
$sum = $a + $b;
echo '<H3>Example with <u>arithmetic operators</u> ADDITION +</H3>';
var_dump($sum);

$res = $a - $b;
echo '<H3>Example with <u>arithmetic operators</u> SUBTRACTION -</H3>';
var_dump($res);

$mult = $a * $b;
echo '<H3>Example with <u>arithmetic operators</u> MULTIPLICATION *</H3>';
var_dump($mult);

$div = $a / $b;
echo '<H3>Example with <u>arithmetic operators</u> DIVISION /</H3>';
var_dump($div);

$div = $a%$b;
echo '<H3>Example with <u>arithmetic operators</u> MODULUS %</H3>';
var_dump($div);

echo '<H2>Comparison operators</H2>';
//Create a usage example for comparison operators: ==,! =, <,>, <=,> =

$comparison_a = $a==$b;
echo '<H3>Example with <u>comparison operators </u> EQUAL == </H3>';
var_dump($comparison_a);

$comparison_b = $a!=$b;
echo '<H3>Example with <u>comparison operators</u> DIFFERENT != </H3>';
var_dump($comparison_b);

$comparison_c = $a < $b;
echo '<H3>Example with <u>comparison operators</u> SMALLER THAN < </H3>';
var_dump($comparison_c);

$comparison_d = $a > $b;
echo '<H3>Example with <u>comparison operators</u> BIGGER THAN > </H3>';
var_dump($comparison_d);

$comparison_e = $a <= $b;
echo '<H3>Example with <u>comparison operators</u> EQUAL & SMALLER THAN <= </H3>';
var_dump($comparison_e);

$comparison_f = $a >= $b;
echo '<H3>Example with <u>comparison operators</u> EQUAL & BIGGER THAN >= </H3>';
var_dump($comparison_f);

echo '<H2>Logical operators</H2>';
// Create an example of use for logical operators: &&, And; ||, Or; ! (NOT); Xor

$comparison_g = ($a && $b);
echo '<H3>Example with <u>logical operators</u> && --> True if both $x and $y are true</H3>';
var_dump($comparison_g);

$comparison_h = ($a and $b);
echo '<H3>Example with <u>logical operators</u> and --> True if both $x and $y are true</H3>';
var_dump($comparison_h);

$comparison_i = ($a || $b);
echo '<H3>Example with <u>logical operators</u> || --> True if either $x or $y is true</H3>';
var_dump($comparison_i);

$comparison_j = ($a or $b);
echo '<H3>Example with <u>logical operators</u> or --> True if either $x or $y is true</H3>';
var_dump($comparison_j);

$comparison_k = (!$b);
echo '<H3>Example with <u>logical operators</u> ! --> True if $x is not true</H3>';
var_dump($comparison_k);

// $comparison_l = (not $b);
// echo '<H3>Example with <u>logical operators</u> Not --> True if $x is not true</H3>';
// var_dump($comparison_l);

$comparison_m = ($a xor $b);
echo '<H3>Example with <u>logical operators</u> or --> True if either $x or $y is true, but not both</H3>';
var_dump($comparison_m);

?>