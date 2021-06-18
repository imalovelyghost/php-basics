<?php echo '<H1>PHP FUNCTIONS</H1>';

echo '<H3>This file as its name properly indicates will be used to store your first tests regarding the implementation of functions:
</H3>';

//It generates a function that given two numbers returns the sum of both

echo '<H4>Function addition</H4>';

// Defining function
function getSum($num1, $num2){
    $sum = $num1 + $num2;
    echo "Sum of the two numbers $num1 and $num2 is : $sum";
    }
    // Calling function
    getSum(10, 20);

echo '<H4>Function substraction</H4>';
//It generates a function that given two numbers returns the multiplication of both
function getRes($num1, $num2){
    $res = $num1 - $num2;
    echo "Res of the two numbers $num1 and $num2 is : $res";
    }
    // Calling function
    getRes(10, 5);
    
echo '<H4>Function division</H4>';
//It generates a function that given two numbers returns the division of both
function getDiv($num1, $num2){
    $res = $num1 / $num2;
    echo "Res of the two numbers $num1 and $num2 is : $res";
    }
    // Calling function
    getDiv(10, 5);

    echo '<H4>Function multiple</H4>';
//It generates a function that, given two numbers and an operation (add, multiply or divide), returns the result of that operation.

// function getRes($num1, $num2,$operator){

// if($num1 == true & $num2 == true & $operator == +){
//     $res = $num1 + $num2;
//     echo "Sum of the two numbers $num1 and $num2 is : $res";
// }elseif($num1 == true & $num2 == true & $operator == *){
//     $res = $num1 * $num2;
//     echo "Mul of the two numbers $num1 and $num2 is : $res";
// }elseif($num1 == true & $num2 == true & $operator == /){
//     $res = $num1 / $num2;
//     echo "Div of the two numbers $num1 and $num2 is : $res";
// }else{
//     echo 'Nothing here'
// }
// };
//     getRes(10, 5.+);
?>