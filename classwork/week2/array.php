<!doctype html>
<html lang="en">
  <head>
    <title>Array</title>
  </head>
  <body>
    <?php
    $myname = "Carly Jane Messmer";
        // assign your name to a variable
    $array = explode(' ', $myname);
        var_dump($array);
        echo "<br>";
    rsort($array);
    var_dump($array);
    echo "<br>";
    $array = implode(" ", $array);
    var_dump($array);
    // explode your name to an array
    // reverse the array and the join it

    // create a for loop of that iterates 100 times
    // push the number from the for loop into an array if it is divisible by 2
    // once the loop is complete remove the first and last elements of the array
    // print out the number of elements in the array
    ?>
  </body>
</html>
