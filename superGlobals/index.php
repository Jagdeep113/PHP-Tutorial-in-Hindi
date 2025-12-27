

<?php
1. What Are Superglobals in PHP?
Definition
Superglobals are built-in PHP variables that are:
● Automatically available
● Accessible anywhere (functions, classes, files)
● Mostly associative arrays
● Used to handle user input, server data, sessions, cookies
They remove the need for:
global $variable;
List of PHP Superglobals
Supergloba
l
Purpose
$_GET URL / Query string data
$_POST Form submission data
$_REQUEST GET + POST + COOKIE
$_SERVER Server & request info
$_FILES File uploads
$_COOKIE Client-side storage
$_SESSION Server-side storage
$_ENV Environment variables
$GLOBALS Access global variables
$x = 50;
function demo() {
echo $GLOBALS['x'];
}
demo();
