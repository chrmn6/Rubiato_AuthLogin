<?php

require 'database.php';
require 'auth.php';

$db = (new Database())->connect();
$auth = new Auth($db);

$auth->logout();
header("Location: login.php");