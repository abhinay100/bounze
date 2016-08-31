<?php
session_start();

session_destroy();
header('Location: index.php?msg=You%20are%20now%20logged%20out%20');
exit();
?>