<?php


if($_SERVER['REQUEST_METHOD'] == 'POST'){

        if (!isset($_SERVER['PHP_AUTH_USER']) && (!isset($_SERVER['PHP_AUTH_PW']))) {
            header('WWW-Authenticate: Basic realm="My Realm"');
            header('HTTP/1.0 401 Unauthorized');
            echo 'Text to send if user hits Cancel button';
            exit;
        } else {
            echo "<p>Hello {$_SERVER['PHP_AUTH_USER']} Welcome !!!!!!.</p>";
            echo "<p>You entered {$_SERVER['PHP_AUTH_PW']} as your password.</p>";
            echo "<h1>You entered {$_SERVER['PHP_AUTH_USER']}</h1>";
        }

}
?>