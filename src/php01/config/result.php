<?php
$my_name=htmlspecialchars($_POST['my_name'],ENT_QUOTES);
$set=htmlspecialchars($_POST['set'],ENT_QUOTES);
$number=htmlspecialchars($_POST['number'],ENT_QUOTES);

print "私の名前は、" . $my_name . "<br>";
print "ご希望の商品は、" . $set . "<br>";
print "ご注文は、" . $number;
