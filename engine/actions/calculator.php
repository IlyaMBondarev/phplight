<?php

$title = 'Калькулятор';

if(isset($_POST['action']) && is_string($_POST['action'])) {

    $post = [];
    $errors = [];

    foreach ($_POST as $key => $value) {
        $post[$key] = escape($value);
    }

    $validateRules = [
        'a' => 'required',
        'b' => 'required',
    ];

    foreach ($validateRules as $key => $value) {
        if(!array_get($post, $key) && $post[$key] !== '0') {
            $errors[$key] = 'Поле обязательно для заполнения!';
        }
    }

    if ($errors) {
        $content = view('pages/calculator', ['errors' => $errors]);

        return require TPL_PATH . 'layout.php';
    }

    $result = '';

    switch ($post['action']) {
        case 'плюс':
            $result = $post['a'] . ' ' . $post['action'] . ' ' . $post['b'] . ' равно ' . plus($post['a'], $post['b']);
            break;
        case 'минус':
            $result = $post['a'] . ' ' . $post['action'] . ' ' . $post['b'] . ' равно ' . minus($post['a'], $post['b']);
            break;
        case 'умножить на':
            $result = $post['a'] . ' ' . $post['action'] . ' ' . $post['b'] . ' равно ' . multiply($post['a'], $post['b']);
            break;
        case 'разделить на':
            $result = $post['a'] . ' ' . $post['action'] . ' ' . $post['b'] . ' равно ' . devide($post['a'], $post['b']);
            break;
        default:
            abort(404);
    }

    $content = view('pages/calculator', ['result' => $result, 'a' => $post['a'], 'b' => $post['b'], 'action' => $post['action']]);

    return require TPL_PATH . 'layout.php';
}

$content = view('pages/calculator');

require TPL_PATH . 'layout.php';
