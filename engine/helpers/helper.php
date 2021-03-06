<?php

// if(!function_exists('function_name')){

// 	function function_name($a){
// 		return $a + 1;
// 	}

// }

if(!function_exists('view')){

	/**
	* Рендер шаблона в строку
	* @param string $path - путь к шаблону в папке TPL_PATH без расширения файла
	* @param array $data - данные для шаблона (ключ - имя переменной)
	* @return string - строка вывода
	* @example view('forms/login', ['action' => '/login'])
	*/
	function view(string $path, array $data = []) : string {

		// Включение буферизации вывода
		ob_start();

		// Импортирует переменные из массива в текущую таблицу символов
		extract($data);

        require TPL_PATH . $path . '.php';

		// Возвращает содержимое буфера вывода
		$result = ob_get_contents();

		// Очистить (стереть) буфер вывода и отключить буферизацию вывода
		ob_end_clean();

		return $result;
	}
}

if(!function_exists('writeLog')){

	/**
	* Запись в лог ошибок
	* @param string $message - логируемое сообщение
	* @param string $fileName - имя лог файла (опционально)
	* @return bool - статус записи
	* @example writeLog('Ахтунг! Все пропало!')
	*/
	function writeLog(string $message, string $fileName = 'errors') : bool {
		$filename = DOCROOT . '/data/logs/' . $fileName .  date('_Y_m_d') . '.log';
		$handle = fopen($filename, 'a');
		$log = $message . PHP_EOL;

		if(!fwrite($handle, $log)){
			return false;
		}

		return true;
	}

}

if(!function_exists('abort')) {

	function abort(int $code) {
		http_response_code($code);
		require(TPL_PATH . $code. '.php');
		exit;
	}
}

if(!function_exists('views_sort')) {
    function views_sort($x, $y)
    {
        if ($x['views'] < $y['views']) {
            return true;
        } else if ($x['views'] > $y['views']) {
            return false;
        } else {
            return 0;
        }
    }
}

if(!function_exists('array_get')){

    function array_get(array $array, string $key, $default = null){
        return isset($array[$key]) ? $array[$key] : $default;
    }

}

if(!function_exists('escape')) {

    function escape($val) {

        return (string)htmlspecialchars(strip_tags($val));
    }

}
if(!function_exists('plus')) {

    function plus($a, $b) {

        return $a+$b;
    }

}
if(!function_exists('minus')) {

    function minus($a, $b) {

        return $a-$b;
    }

}
if(!function_exists('multiply')) {

    function multiply($a, $b) {

        return $a*$b;
    }

}
if(!function_exists('devide')) {

    function devide($a, $b) {

        return $b == 0 ? 'бесконечность' : $a/$b;
    }

}