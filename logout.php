<?php
require('database.php');
require('session_start.php');
session_destroy();
header("Location: index.php");
exit;
?>