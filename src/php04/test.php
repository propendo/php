<?php
$test = [ 1, 2, 3, 4, 5 ];
require_once('config/status_codes.php');
$random_numbers = array_rand($status_codes, 4);
$result = array_rand( $test );
var_dump($result);

?>