<?php
session_start();

//Delete session data
session_unset();
session_destroy();

//Go to index.php
header('Location: index.php');
exit();
?>
