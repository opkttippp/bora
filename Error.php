<?php
//error_reporting(E_ALL);
//ini_set("display_errors","On");
//restore_error_handler();


//--------------------------1 и 2 обработчик--------------------
//меняем только настройки set_error_handler---------------------


//set_error_handler('myHandler',E_RECOVERABLE_ERROR);
//function myHandler($errno, $errstr, $errfile, $errline)
//{
//    if (error_reporting() & $errno)
//    {
//        $errors = array(
//            E_ERROR => 'E_ERROR',
//            E_WARNING => 'E_WARNING',
//            E_PARSE => 'E_PARSE',
//            E_NOTICE => 'E_NOTICE',
//            E_CORE_ERROR => 'E_CORE_ERROR',
//            E_CORE_WARNING => 'E_CORE_WARNING',
//            E_COMPILE_ERROR => 'E_COMPILE_ERROR',
//            E_COMPILE_WARNING => 'E_COMPILE_WARNING',
//            E_USER_ERROR => 'E_USER_ERROR',
//            E_USER_WARNING => 'E_USER_WARNING',
//            E_USER_NOTICE => 'E_USER_NOTICE',
//            E_STRICT => 'E_STRICT',
//            E_RECOVERABLE_ERROR => 'E_RECOVERABLE_ERROR',
//            E_DEPRECATED => 'E_DEPRECATED',
//            E_USER_DEPRECATED => 'E_USER_DEPRECATED',
//        );
//        echo $error = "уровень ошибки - $errors[$errno] - [$errno] $errstr ($errfile на $errline строке)";
//         ob_start();
//         debug_print_backtrace(0, 10);
//         $a = ob_get_clean();
//        error_log($error.$a);
//    }
//    return TRUE;
//}
//------------------------- примеры ошибок ------------------

// echo $undefined_var;
// NONFATAL - E_WARNING
// array_key_exists('key', NULL);
// NONFATAL - E_DEPRECATED
// FATAL, если не обработана функцией set_error_handler - E_RECOVERABLE_ERROR
// class b {function f(int $a){}} $b = new b; $b->f(NULL);
// FATAL, если не обработана функцией set_error_handler - E_USER_ERROR
// trigger_error("E_USER_ERROR", E_USER_ERROR);

//--------------------------3 обработчик---------------------------------

class MyException extends Exception
{

    function log_print()
    {
        $Code = "код ошибки - " . $this->getCode() . "<br>";
        $File = "имя файла - " . $this->getFile() . "<br>";
        $Line = " строка - " . $this->getLine() . "<br>";
        $Trace = "backtrace - " . $this->getTraceAsString() . "<br>";
        return $Code . $File . $Line . $Trace;
    }

}

try {

    $config_file_path = "../confg.php";
    if (!file_exists($config_file_path)) {
        throw new MyException("Файл не найден.<br>");
    }
    echo 12345;

} catch (MyException $e) {
    echo $e->getMessage();
    echo $e->log_print();
    error_log($e->log_print());
    die();
}