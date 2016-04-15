<?php
session_start();
$_SESSION = array();
setcookie (session_id(), "", time() - 3600);
session_destroy();

?>