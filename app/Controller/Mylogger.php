<?php

namespace App\Controller;

use Monolog\ErrorHandler;
use Monolog\Formatter\LineFormatter;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;
use Monolog\Processor\MemoryUsageProcessor;
use Monolog\Processor\PsrLogMessageProcessor;
use Monolog\Processor\WebProcessor;

class Mylogger
{
    public static function log()
    {
        $handler = new StreamHandler("logs/errors.log", Logger::DEBUG);
        $handler->setFormatter(new LineFormatter());
        $memoryProcessor = new MemoryUsageProcessor();
        $psrProcessor = new PsrLogMessageProcessor();
        $webProcessor = new WebProcessor();

        $logger = new Logger('my_Logger', [$handler], [
            $memoryProcessor,
            $psrProcessor,
            $webProcessor,
        ]);
        $logger->debug('logger is ready');
        ErrorHandler::register($logger);
        return $logger;
    }
}
