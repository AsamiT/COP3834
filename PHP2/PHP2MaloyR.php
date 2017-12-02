<!DOCTYPE html>
<html>

<body>

  <h1>Fibonacci Sequence</h1>

  <?php
  $fibnum = array();
  $a = 1;
  $b = 1;
  $c = 0;
  $y = 0;

  echo "<p><b>The first thing we're going to do, is test the first thirty Fibonacci numbers which follow 1 and 1 on the pattern. So this would mean our first number is 2, then 3, then 5, and so on. Also, if it seems like there's a break in the line--there isn't. This HTML document is programmed to cap the size of a 'div' and 'p' at 800 pixels.</b></p>";

  for ($i = 0; $i < 30; $i++) {
    $c = $a + $b;
    $a = $b;
    $b = $c;
    array_push($fibnum,$c);
  }

  echo "<p>";

  for ($a = 0; $a < count($fibnum); $a++) {
    echo $fibnum[$a];
    $x += $fibnum[$a];
    if ($y == 0) {
      $y += $fibnum[$a];
    }
    else {
    $y *= $fibnum[$a];
    }
    echo " ";
  }

  echo "</p>";

  echo "<p><b>And now, we're going to show you the sum and product of the thirty fibonacci numbers.</b></p>";

  echo "Sum: ";
  echo $x;
  echo "<br />";
  echo "Product: ";
  echo $y;
  echo "<br /><p><small>(This is 1 duotrigintillion, a number that is larger than we can fathom. If we counted these as computer data bytes (8 bits), this would be 10^85 more data than the estimated content of the entire internet.)</small></p>"

  ?>

</body>

</html>
