<?php
session_start();
session_unset();
session_destroy();
//echo "inside logout";
header("Location: ../index_dbms.php");
exit();
?>