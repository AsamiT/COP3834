<!DOCTYPE html>
<html>

<body>

  <h1>PHP, not PCP</h1>

  <?php

  $a = 2;
  $b = $a+1;
  $c = $a+2;
  $z = 0;

  echo "<h3>Arithmetic Functions, What's Your Conundrum?</h3>";
  echo "<b>(b/c)^a + (c/b)^a - a</b> is the equation we are using here.<hr />";

  for ($i=0; $i < 10; $i++) {
    echo $z;
    echo "<i> - a: </i>";
    echo $a;
    echo "<i> - b: </i>";
    echo $b;
    echo "<i> - c: </i>";
    echo $c;
    echo "<br />";
    $z = (($b/$c)**$a + ($c/$b)**$a);
    $a++;
  }

  echo "<hr />";
  //now we're going to sing Karma Chameleon

  echo "<h3>Singing <i>Karma Chameleon</i> through concatenation.</h3>";

  $d = "Karma ";
  $e = "Chameleon ";

  for ($i=0; $i < 2; $i++) {
    $d .= $d;
  }

  $d .= $e;
  echo $d;
  echo "<br />You come and go, you come and go...<br />
  Loving would be easy if your colors were like my dreams<br />
  Red, gold, and green, red, gold, and green...<br /><hr />";

  echo "<h3>Fundamentals of Discrete Logic</h3>";
  $a = 1;
  $b = 0;
  $c = 0 and 1;
  $d = $a OR $b;
  $e = $a xor $b;
  $f = $a xor ! $b;
  $g = $a and $a;
  $h = $b and $b;

  //we used AND, OR, XOR and NOT to do this.

  echo "<h4>When we have two different inputs to our logic gates:<br /></h4>";
  echo "AND: ";
  echo ($c);
  echo ", meaning that it is <b>false</b>. <br />";
  echo "OR: ";
  echo ($d);
  echo ", meaning that it is <b>true</b>. <br />";
  echo "<h4>When we have two true inputs to our logic gates:</h4>";
  echo "AND and OR: ";
  echo ($g);
  echo ", meaning that no matter what gate we use, we will always have a <b>true</b> signal.";
  echo "<h4>When we have two false inputs to our logic gates:</h4>";
  echo "AND and OR: ";
  echo ($h);
  echo ", meaning that no matter what gate we use, we will always have a <b>false</b> signal.";
  echo "<h4>But let's get spicier. What is an XOR gate?</h4>";
  echo "An XOR gate means 'exclusive OR', or that it is true as long as one of the two variables is true, but <b>not both!</b>.<br /><br />";
  echo "$a XOR $b: ";
  echo $e;
  echo "<h4>Now, what if we used two true values?</h4>";
  echo "$a XOR NOT($b): ";
  echo $h;
  echo "This is 1 XOR 1, therefore not a valid XOR function, hence it is false."

  ?>

</body>

</html>
