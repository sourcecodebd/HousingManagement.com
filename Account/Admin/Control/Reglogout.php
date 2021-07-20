<?php
session_start();

if(session_destroy()) // Destroying All Sessions
{
header("Location: ../View/Registration.php"); // Redirecting To Home Page
}
?>