<!doctype html>
<html lang="en">
  <head>
    <title>Math</title>
  </head>
  <body>
    <?php
echo 5 * M_PI;
$myname = "Carly Messmer";
$result = round($myName * M_PI, 3) . '<br>';
echo $result;
echo '<br>';
echo ceil($result);   
    // get the length of your full name (first and last)
    // multiply that by M_PI and round it to the third decimal place
    // print out the result
    // then print out the ceiling value of the result

    // Next use your knowledge of strlen(), substr(), and rand() to print a random character from your name
 $len = strlen($myName);
 $num = rand(0, $len);
 echo substr($myName, $num, $len);   
    ?>
  </body>
</html>
