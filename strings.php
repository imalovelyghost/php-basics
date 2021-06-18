<?php echo '<H1>PHP STRINGS</H1>';

echo '<H3>This file as its name indicates will be used to work with text strings:
</H3>';

//Print a text string
echo '<H4>Text string</H4>';
echo 'Im a text string';

//Print a text string that interpret variables
echo '<H4>Var string</H4>';
$string = 'Im a variable, im being interpreted.';
echo $string;

//Concatenate a previously declared variable in a text string
$concat = 'Im a variable';
echo '<H4>Concat string {$var} & ".$a."</H4>';
echo "Hello ".$concat." concatenated";
//echo "Hello {$concat} concatenated";

// Execute the function that allows you to replace text in a string (case sensitive)
echo '<H4>Replace-text(case sensitive) string - str_replace </H4>';

  $find = array("Hello", "world");
  $replace = "replaced";
  $arr = array("Hello", "world", "!","WELL DONE!!");
  print_r(str_replace($find, $replace, $arr));

//Execute the function that allows you to replace text in a string (without taking into account upper / lower case)
echo '<H4>Replace-text( NON case sensitive) string - str_ireplace </H4>';

// Input string
$subjectVal="How Are You";
  
// using str_ireplace() function
$res = str_ireplace("are", "is", $subjectVal);
  
echo $res;

//Execute the function that allows you to write a text N times
echo '<H4>N times string - str_repeat</H4>';
echo str_repeat("repeat-", 10);

//Execute the function that allows to obtain the length of a text string
echo '<H4>Length string - strlen</H4>';
echo strlen('torre');

//Executes the function that allows to obtain the position of the first occurrence of a text within a text string
echo '<H4>posición de la primera ocurrencia de un substring en un string - strpos</H4>';

$mystring = 'Me llamo Einar';
$findme   = 'Einar';
$pos = strpos($mystring, $findme);
echo $pos;

//Execute the function that allows a text string to be capitalized
echo '<H4>To Uppercase string - strtoupper</H4>';
$str = "Mary Had A Little Lamb and She LOVED It So";
$str = strtoupper($str);
echo $str;

//Execute the function that allows you to transform a text string to lowercase
echo '<H4>To Lowercase string - strtolower</H4>';
$str = "Mary Had A Little Lamb and She LOVED It So";
$str = strtolower($str);
echo $str;

//Execute the function that allows to obtain a text substring from the position
echo '<H4>Obtain text string from a position - substr</H4>';
$slice = substr("Devolución inmediata !", 0, -5);
echo $slice;
?>

