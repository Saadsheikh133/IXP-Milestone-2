<?php
// Setting a Cookie
// You can set a cookie using the setcookie() function. It takes the cookie name, value, expiration time, and other optional parameters.
setcookie('user', 'saad', time() + (24 * 60 * 60));

// Accessing Cookie Values:
// You can access cookie values using the $_COOKIE superglobal array.
// Assuming a cookie named "user" was set earlier
if(isset($_COOKIE['user'])) {
    echo 'Welcome back'. '<br>', $_COOKIE['user'] . ': ';
};

// Checking for Cookie Existence:
    if(isset($_COOKIE["user"])) {
    echo 'cookie exits';
}else{
    echo 'cookie dose not exits';
}

// Deleting a Cookie:
// To delete a cookie, you can set its expiration time to a past value using the setcookie() function.
setcookie('user', '', time() - 3600);
?>