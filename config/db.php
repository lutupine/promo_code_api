<?php
$user = 'mangobd_appmaker';
$pass = 'Asdzxc44$$';
$host = 'gator3272.hostgator.com';
$db = 'mangobd_promo_code';
$connection = mysqli_connect($host, $user, $pass) or die(mysqli_error());
$db_connect = mysqli_select_db($connection, $db) or die(mysqli_error());
