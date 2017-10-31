<?php
session_start();

session_destroy();   // function that Destroys Session
header("Location: homePage2.html");
?>