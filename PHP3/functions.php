<!DOCTYPE html>
<html>

<body>

  <?php

  $x;
  $b;
  $a = (double)($_POST["firNum"]);
  $c = (double)$_POST["ratio"];

  sum($a, $b, $c);

  function sum($a, $b, $c) {
    $x = $a;
    for ($i = 0; $i < 30; $i++) {
      $b += $x;
      // echo "<b>";
      // echo $x;
      // echo "</b>";
      // echo " - Number: ";
      // echo $i;
      $x = $x * $c;
      // echo "<br />";
      if ($i == 10) {
        tenth($x);
      }
    }
    echo "<p>The sum of the geometric function, beginning with $a and multiplied by the ratio of $c over the course of $i iterations, is:<br /> $b</p>";
  }

  function tenth($x) {
    echo "<p>The tenth value of the geometric function is $x.</p>";
  }

  ?>

</body>

</html>
