<?php
$name = htmlspecialchars($_POST['name'], ENT_QUOTES);
$item = htmlspecialchars($_POST['item'], ENT_QUOTES);
$count = htmlspecialchars($_POST['count'], ENT_QUOTES);
print "私の名前は、" . $name . "です<br/>";
print "ご希望の商品は、" . $item . "です<br/>";
print "注文数は、" . $count . "です";
