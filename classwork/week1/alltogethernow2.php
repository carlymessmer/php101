<!doctype html>
<html lang="en">
  <head>
    <title>All Together Now 2</title>
  </head>
  <body>
    <p>Create two variables one called $guess and another called $number.</p>
    <?php 
        $guess = 23;
        $number = 25;
        if ($guess > $number) {
        	echo "Your guess is too high";
        }
        elseif ($guess == $number) {
        	echo "You're correct!";
        }
        else {
        	echo "Your guess is too low";
        }
    // Write your else if statement to check if the guess is correct
    ?>
  </body>
</html>
