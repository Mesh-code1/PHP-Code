<?php
/**
 * cookies facilitate storing variables on remote users' browsers and utilizing the
 * data when the users revisit the website. Don't have sensitive data in cookies.
 * cookies are stored in the client's side. Sensitive data can be stored in a session.
 * You just want something like the first name for the Cookie to say hi next visit.
 */
//setting a cookie takes key and value and time. 86400 seconds makes 1 day.
setcookie('name', 'Mesh', time()+86400);
if(isset($_COOKIE['name'])){
    echo $_COOKIE['name'];
};
//making the time negative will unset the cookie.
?>