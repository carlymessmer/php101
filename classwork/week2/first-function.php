<!doctype html>
<html lang="en">
  <head>
    <title>First Function</title>
  </head>
  <body>
    <?php
    function name()
    { 
    	return "Carly";
    }
        echo name();
$myName = "Carly";
$partial = substr("$myName", 0, 3);
print $partial;
echo strtoupper ($myName);
echo strtolower ($myName);






    // Write a function that RETURNS your name  <-- throwing you a curve ball here
    // Then echo the result of that function
    ?>
  </body>
</html>
