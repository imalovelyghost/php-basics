<?php echo '<H1>PHP Types</H1>';

echo '<H3>This file as its name properly indicates will be used for working with the different basic types of variables and data:
    </H3>';
// Define a new variable and assign a value to each of the following types:

echo '<H4>Boolean</H4>';
$example_one = True;

var_dump($example_one);
echo('Output: '.$example_one);

echo '<H4>Integer</H4>';
$example_two = 1234;

var_dump($example_two);
echo('Output: '.$example_two);

echo '<H4>Float</H4>';
$example_three = 12.34;

var_dump($example_three);
echo('Output: '.$example_three);

echo '<H4>String</H4>';
$example_four = 'Im a string!';

var_dump($example_four);
echo('Output: '.$example_four);

echo '<H4>Array</H4>';
$example_five = array(
    "Guitar"  => "Karmen",
    "Bass" => "Marta",
    "Voice" => "Sara",
    "Drums" => "Einar",
    "Electronics" => "Gabi",
);

var_dump($example_five);
echo('Output: '.$example_five);

echo '<H4>Object</H4>';
$example_six = (object) [
    'Guitar' => 'Karmen',
    'Bass' => 'Marta',
    "Voice" => "Sara",
    "Drums" => "Einar",
    "Electronics" => "Gabi",
  ];

var_dump($example_six);
echo('Output: '.$example_six);

// $obj = (object) array('1' => 'foo');
// var_dump(isset($obj->{'1'}));
// var_dump(key($obj));

echo '<H4>Null</H4>';
$example_seven = NULL;

var_dump($example_seven);
echo('Output: '.$example_seven);

?>