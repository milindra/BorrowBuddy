<?php
session_start();
session_destroy();
echo "you are sucessfully loged out <br>";
echo "<a href='login.php'>login again</a>"
?>