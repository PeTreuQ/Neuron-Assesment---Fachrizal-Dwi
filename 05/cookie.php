<?php
/** set cookie */
    setcookie('last_login', date('Y-m-d h:i:s'), time() + (86400 * 30));

/** read */
if(!isset($_COOKIE['last_login'])) {
    echo "Cookie named '" . $cookie_name . "' is not set!".PHP_EOL;
} else {
    echo "Cookie " . 'last_login' . " is set!".PHP_EOL;
    echo "Value is: " . $_COOKIE['last_login'].PHP_EOL;
}

echo $_COOKIE['last_login'].PHP_EOL;
/** destroy cookie */
setcookie('last_login', '', 3600);
