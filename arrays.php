<?php echo '<H1>PHP ARRAYS</H1>';

echo '<H3>This file as its name indicates will be used to work with arrays:
</H3>';

//Define a simple array composed of text strings
echo '<H4>Array of strings</H4>';
$arrayOfStrings = array(
    "clave1" => "one",
    "clave2" => "two",
    "clave3"=> "three",
    "clave4"=> "four",
);
var_dump($arrayOfStrings);


//Define a simple array consisting of whole numbers and decimal numbers

echo '<H4>Array of numbers</H4>';
$arrayOfNumbers = array(
    1 => 11.5,
    2 => 22,
    3 => 33.5,
    4 => 44,
);
var_dump($arrayOfNumbers);

//Define a multidimensional array
echo '<H4>Multidimensional Array</H4>';
$cars = array (
    array("Volvo",22,18),
    array("BMW",15,13),
    array("Saab",5,2),
    array("Land Rover",17,15)
  );
//var_dump($cars);
//print_r($cars);
print("<pre>".print_r($cars,true)."</pre>");



//Execute the function that allows to obtain the length of an array
echo '<H4>Array Length - count,COUNT_RECURSIVE </H4>';
echo '<H6>Si realizamos el count sobre la variable, nos devuelve el primer nivel, si es RECURSIVO, nos lo devuelve todo.</H6>';

var_dump(count($cars));

var_dump(count($cars,COUNT_RECURSIVE));


//Execute the function that allows to obtain the combination of two arrays
echo '<H4>Array combine - array_combine</H4>';
$a = array('green', 'red', 'yellow');
$b = array('avocado', 'apple', 'banana');
$c = array_combine($a, $b);
$d = array_combine($b, $a);


print("<pre>".print_r($a,true)."</pre>");
print("<pre>".print_r($b,true)."</pre>");
print("<pre>".print_r($c,true)."</pre>");
print("<pre>".print_r($d,true)."</pre>");



//Execute the function that once is given an array return the last element of it
echo '<H4>Return last element of the Array - end</H4>';
echo end($d);


//Execute the function that once is given an array add a new element to the array in question

echo '<H4>Array addition - .push</H4>';
$oneArray = ['d', 'e', 'f'];
$anotherArray = ['a', 'b', 'c'];

array_push($anotherArray, ...$oneArray);
print("<pre>".print_r($oneArray)."</pre>");
print("<pre>".print_r($anotherArray)."</pre>");


?>