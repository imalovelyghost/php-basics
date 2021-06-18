<?php echo '<H1>PHP Conditionals</H1>';

echo '<H4>Conditional 1:  if(z=y){actions}</H4>';
//Create a simple condition that evaluates whether the current day is Monday. Only in the case that the condition is met, it shows a message of “We are on Monday”.

// $now = new DateTime();
// $nowFormatted= $now->format('D');
// print_r($nowFormatted);

$a='Wednesday';
$b='Wednesday';

if ($a == $b) {
    echo 'We are on Wednesday';
   $b = $a;
  }

  echo '<H4>Conditional 2:  if(z=y){actions}  else{more actions}</H4>';
// Create a simple condition that evaluates whether the current month is October. If the condition is met, it shows a message of the type "We are in October". Otherwise, if this condition is not met, show the current month in words as it come from DateTime.

$now = new DateTime();
$nowFormatted= $now->format('M');
// print_r($nowFormatted);

if ($nowFormatted == 'Oct') {
    echo 'We are on October';
}
 else{
 echo 'We are not in October, We are into' .$nowFormatted;
}

$now = new DateTime();
$nowFormattedMin=$now->format('i');

echo '<H4>Conditional 3 - Double: </H4>';
echo ('Our current minutes is '.$nowFormattedMin);


// Create a double condition that evaluates:
//If the current minute is less than 10. Displays a message of type "the current minute is less than 10", if the current minute is greater than 15, displays a message of the type "the current minute is more than 15". If you do not meet any of the two conditions above: Displays a message of the type "does not meet any conditions”
// if the current minute is greater than 15, displays a message of the type "the current minute is more than 15". 

// if(10 >= $nowFormattedMin){
//     echo 'the current minute is less than 10';
// }elseif (15 =< $nowFormattedMin){
//     echo 'the current minute is more than 15';

// }elseif (08 or $nowFormattedMin){
//     echo 'does not meet any conditions';
// }

echo '<H4>Conditional 4 - Switch control structure: </H4>';
// Create a switch type control structure to display a different message depending on the current day of the week. You can write any type of message, because the important thing is that you understand how it works and in what cases you can use it.

$now = new DateTime();
$nowFormattedDay= $now->format('D');
// print_r($nowFormattedDay);

switch ($nowFormattedDay) {
    case "Mon":
        echo "Hoy es Lunes";
        break;
    case "Tue":
        echo "Hoy es Martes";
        break;
    case "Wed":
        echo "Hoy es Miercoles";
        break;
    case "Thu":
        echo "Hoy es Jueves";
        break;
    case "Fri":
        echo "Hoy es Viernes";
        break;
    case "Sat":
        echo "Hoy es Sabado";
        break;
    case "Sun":
        echo "Hoy es Domingo";
        break;
  
}


?>
