<!doctype html>
<html lang="en">
  <head>
    <title>For Syntax</title>
  </head>
  <body>
    <?php
   for ($i = 0; $i <= 100; $i += 10) {
     echo "<p>$i</p>";
   }

   for ($i = 50; $i >= 5; $i -= 5) {
     echo "<p>$i</p>";
   }

   $array = ['honda', 'toyota', 'mazda'];
   for ($i = 0; $i <= count($array); $i++) {
    echo $array[$i];
   }
    // write a for loop that echos the numbers 10 to and including 100 counting by 10s
    // next write a for loop that counts down from 50 to 5 counting by 5s
    // build an array with three items, then loop over the array and echo each item
  
  
    ?>
  </body>
</html>
