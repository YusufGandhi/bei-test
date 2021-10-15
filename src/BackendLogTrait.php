<?php declare(strict_types=1);

namespace FutureSuper\BackendInfra;

use Monolog\Logger;
use Monolog\Handler\StreamHandler;

trait BackendLogTrait
{
    public function logInfo(string $message)
    {
        return $message . ". And this is from the class itself";
        // $logger = new Logger('test logger');
        // $logger->pushHandler(new StreamHandler("php://stdout"));
        // $logger->info($message);
    }
}