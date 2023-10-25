<?php

$name = htmlspecialchars ($_POST["name"], ENT_QUOTES);
$content = htmlspecialchars ($_POST["content"], ENT_QUOTES);
$number = htmlspecialchars ($_POST["number"], ENT_QUOTES);

print "私の名前は" . $name ."<br>";
print "ご希望の商品は" . $content . "<br>";
print "注文数は" . $number ;
