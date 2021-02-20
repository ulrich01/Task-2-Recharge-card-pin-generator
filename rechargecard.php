<h2 style="color:#ffa500";>RECHARGE CARD PINS GENERATOR</h2>
<button><a style="text-decoration:none"; href="recharge.php"> click here to generate more pins</a></button><br><br>
<?php
$numbers = array();
for($x = 0; $x <= 200; $x++)
{
    $numbers[] = rand(100000000000, 999999999999);
    echo $numbers[$x] . "<br/>";
}
?>