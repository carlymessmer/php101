<!doctype html>
<html lang="en">
  <head>
    <title>Foreach</title>
  </head>
  <body>
    <?php
   $food = array("apple", "pear", "broccoli", "kale", "peas", "kiwi", "okra");
   foreach ($food as $i) {
     echo "<ul>$i</ul>";
   }

    // create an array of vegatables and fruits
    // then create an unordered list tag
    // within that tag iterate over the array with a foreach loop and echo out the items in the array in a list item tag
    ?>
  </body>
</html>
