<?php
//superglobals are variables built ino php and they are available for use in all scopes
//They are all arrays starting with money sign underscore $_ ALLUPPERCASE
/**
 * $_GET superglobal contains info for variables passed through a url or a form
 * $_POST contains info for variables passed through a form
 * $_COOKIE containes info for variables passed through a cookie
 * $_SESSION contains ifo for variables passed through a session
 * $_SERVER contains info about the server environment
 * $_ENV contains info about environment variables
 * $_FILES contains info about files uploaded to the script
 * $_REQUEST contains info about variables passed through the form or url
 * 
 */
var_dump($_SERVER);
?>