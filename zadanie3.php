<form action=""method="get">
    A:<input type="text" name="a">
    B:<input type="text" name="b">
    C:<input type="text" name="c">
    D:<input type="text" name="d">
    <input name="sub" type="submit" value="git">
</form>

<?php
$a=$_GET['a'];
$b=$_GET['b'];
$c=$_GET['c'];
$d=$_GET['d'];

$w;
$w=($a*$d)-($b*$c);
echo "Po coś: $w";
?>