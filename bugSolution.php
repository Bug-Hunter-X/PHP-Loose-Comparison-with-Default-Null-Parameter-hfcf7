function my_function($param1, $param2 = null) {
  if (!isset($param2)) {
    // Handle the case where $param2 is not set
    return $param1 * 2; 
  } else {
    return $param1 + $param2; 
  }
}

//The solution uses isset() to check if $param2 is set instead of using the strict comparison (===) with null.

$result1 = my_function(5); // Output: 10
$result2 = my_function(5, 0); // Output: 5
$result3 = my_function(5, false); // Output: 5
$result4 = my_function(5, null); // Output: 10
