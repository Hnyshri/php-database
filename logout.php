<?php
session_start();
session_destroy();
    header('location:login.php?logout= you are sucessfully logged out!! come back soon...');
?>