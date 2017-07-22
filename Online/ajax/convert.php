<?php
  $farenheit=$_POST['data'];
  $celsius=(($farenheit-32)*5)/9;
  $celsius=number_format($celsius,2);

  print $celsius;

?>
