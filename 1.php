<?php

$arr = array('message' => 'blah'); //etc

// header('HTTP/1.1 201 Created');

    header('WWW-Authenticate: Basic realm="Test Authentication System"');
    header("HTTP/1.1 401 Unauthorized");
    header("Access-Control-Allow-Origin: *");

				echo json_encode($arr);
    exit;