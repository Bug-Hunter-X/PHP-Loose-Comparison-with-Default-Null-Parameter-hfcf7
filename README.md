# PHP Loose Comparison with Default Null Parameter

This repository demonstrates a common error in PHP involving loose comparison and default null parameters.  The `my_function` example uses a default null parameter but doesn't correctly handle cases where the second argument evaluates to false (e.g., 0, false, empty string).  The provided solution clarifies the conditional logic and fixes the unexpected behavior. 

## Bug Description

The function demonstrates incorrect behavior when the second parameter is 0 or false. This is because the strict comparison (`===`) in the if condition doesn't distinguish between these values and null. This is an example of the common loose comparison issue in PHP.