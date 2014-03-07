<!doctype html>
<html lang="en">
  <head>
    <title>More Strings</title>
  </head>
  <body>
    <?php
      $urls = array(
        "http://www.example.com?foo=bar",
        "http://www.example.net?fizz=buzz",
        "http://www.example.us",
        "http://www.example.org?fuzz=bazz",
        "http://www.example.co"
      );
foreach($urls as $url) {
     $lastIdx = strlen($url);
     $idx = strpos($url, "?");
     if ($idx != false);
          echo '<p>' . trim(substr($url, $idx + 1, $lastIdx + 1)) . '<p>';
}
      // iterate over the given array of urls find the position of "?"
      // check to see if "?" exists
      // with the position of "?" return a substring of the query arguments
      // print out each query string as a formatted string
    ?>
  </body>
</html>
