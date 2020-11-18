<?php

// echo "<pre>";
// var_dump($_SERVER);

$title = 'Login';

if(isset($_POST['login']) && $_POST['password']){
	// http_request_method_name(method);

	var_dump($_POST);

}

$content = view('forms/login', ['action' => '/login']);

require TPL_PATH . 'layout.php';