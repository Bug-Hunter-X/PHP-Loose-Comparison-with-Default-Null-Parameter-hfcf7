function my_function($param1, $param2 = null) {
  if ($param2 === null) {
    // Handle the case where $param2 is null
    return $param1 * 2; 
  } else {
    return $param1 + $param2; 
  }
}

//The bug is the default parameter value for $param2 is null, and the comparison using the === operator might not work as expected in the if condition when the value of $param2 is 0 or false. 

$result1 = my_function(5); // Output: 10
$result2 = my_function(5, 0); // Output: 5
$result3 = my_function(5, false); // Output: 5
$result4 = my_function(5, null); // Output: 10
