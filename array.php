<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Array Test</title>
  </head>
  <body>

<?php

$fruits = [
  'apple' => 'red',
  'orange' => 'orange',
  'strawberry' => 'red',
];

$fruits['grape']='grape';
var_dump($fruits);
print('<hr \>');

$name = ['TAMA', 'MIKE', 'SHIRO'];
$name[]='BUCHI';
print( $name[1] ); // MIKE
var_dump($name);
print('<hr \>');


  print("<table border>");

foreach($fruits as $f => $c)
{
  print("<tr><td>$f</td><td>$c</td></tr>");
}
  print("</table>");

 ?>

  </body>
</html>
