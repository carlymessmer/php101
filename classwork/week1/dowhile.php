<!doctype html>
<html lang="en">
  <head>
    <title>All Together Now</title>
  </head>
  <body>
    <?php

$i =0;
do {
    $i++;
    echo "$i<br>";
} while ($i > 5)

?>

<?php
$flipCount = 0;

do {
$flip = rand(0,1);
$flipCount ++;

if ($flip){
echo "<div class=\"coin\">H</div>";
}

else {
echo "<div class=\"coin\">T</div>";
}

} while ($flip);
$verb = "were";
$last = "flips";

if ($flipCount == 1) {
$verb = "was";
$last = "flip";
}
echo "<p>There {$verb} {$flipCount} {$last}!</p>";
?>
  </body>
</html>
