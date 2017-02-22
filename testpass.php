<!DOCTYPE html>

<html>
<body>
<?php
/* This will give an error. Note the output
 *  * above, which is before the header() call */
header('Location: http://127.0.0.1/');

if (!isset($_SERVER['PHP_AUTH_USER'])) {
	    header('WWW-Authenticate: Basic realm="My Realm"');
	    header('HTTP/1.0 401 Unauthorized');
	    echo 'Text to send if user hits Cancel button';
	    exit;
} else {
	    echo "<p>Hello {$_SERVER['PHP_AUTH_USER']}.</p>";
	    echo "<p>You entered {$_SERVER['PHP_AUTH_PW']} as your password.</p>";
}
?>
</body>
</html>
