<?php echo '<H1>PHP ITERATORS</H1>';
// Generate an instruction that makes use of "echo"
echo "<H3>Im created with the iterator <u>for</u></H3>";

for ($i = 1; $i <= 10; $i++) {
    echo $i;
}

// Generate a snippet that makes use of foreach
echo "<H3>Im created with the iterator <u>foreach</u></H3>";
$a = array(1, 2, 3, 17);

foreach ($a as $v) {
    echo "Current value of \$a: $v.\n";
}
// Generate a snippet that uses while
echo "<H3>Im created with the iterator <u>while</u></H3>";
$i = 1;
while ($i <= 10):
    echo $i;
    $i++;
endwhile;

// Generate a snippet that uses do while
echo "<H3>Im created with the iterator <u>do while</u></H3>";
// generating an array with random even numbers between 1 and 1000

$numbers = array();
$array_size = 10;

// for loop runs as long as 2nd condition evaluates to true
for ($i=0;$i<$array_size;$i++) {

      // always executes (as long as the for-loop runs)
      do {
         $random = rand(1,1000);

     // if the random number is even (condition below is false), the do-while-loop execution ends
     // if it's uneven (condition below is true), the loop continues by generating a new random number
     } while (($random % 2) == 1);

     // even random number is written to array and for-loop continues iteration until original condition is met
     $numbers[] = $random;
}

// sorting array by alphabet

asort($numbers);

// printing array

echo '<pre>';
print_r($numbers);
echo '</pre>';



?>