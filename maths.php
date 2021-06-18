<?php echo '<H1>PHP MATHS</H1>';

echo '<H3>This file as its name properly indicates will be used for working with mathematical operators and the specific PHP functions :</H3>';

//Define a variable whose value is the result of the function that returns an absolute value.
echo '<H4>Absolute value - abs()</H4>';
echo abs(-6.4);

//Define a variable whose value is the result of the function that returns a rounded value to the next highest integer.
echo '<H4>Rounded value - ceil()</H4>';
echo ceil(5.4);

//Define a variable whose value is the result of the function that returns the highest value of a series of values ​​that are received by parameter.
echo '<H4>Higest value - max()</H4>';
echo (max(12, 4, 62, 97, 26));

//Define a variable whose value is the result of the function that returns the lowest value of a series of values ​​that are received by parameter.
echo '<H4>Lowest value - min()</H4>';
echo (min(12, 4, 62, 97, 26));

//Define a variable whose value is the result of the function that returns a random number
echo '<H4>Random number - rand()</H4>';
echo rand(2, 15);
?>