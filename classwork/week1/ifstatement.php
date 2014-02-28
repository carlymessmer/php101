<!doctype html>
<html lang="en">
  <head>
    <title>if statment!</title>
  </head>
  <body>
    <p>Complete the if statement</p>
    <p>
      <?php
        $bill =  15;    // Set this to a number greater than 18
        $money = 10;
        if ($money > $bill) {
          echo "You have more than enough to pay";
        }
        elseif ($money == $bill) {
          echo "Just enough";
           }
        else {
          echo "You don't have enough money!";
        }
      ?>
    </p>
  </body>
</html>
