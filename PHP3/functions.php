<!DOCTYPE html>
<html>

<body>

  <?php

  $a = (double)($_POST["firNum"] * $_POST["ratio"]);

  $c = (double)$_POST["ratio"];

  for ($i = 0; $i < 30; $i++) {
    $b = $a * $c;
    $a = $b;
    echo $b;
    echo "<br />";
  }

  ?>

</body>

</html>
