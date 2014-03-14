<!doctype html>
<html lang="en">
  <head>
    <title>Your Function</title>
  </head>
  <body>
    <?php
    // Write a function that takes an argument $name that is defaulted to null
    // within the block check if the argument value is null and return No Name Set
    // else return $name as a formatted string "This is your first function $name!"
Function namer($name = null) {
 if (is_null($name)) {
  return "No Name Set";
}
else {
  return "This is your first function " .  $name;
}
}
echo namer("Carly");

    // write a function that takes an argument and returns the square of that arguemtn
Function square($x) {

}     
    ?>
  </body>
</html>
