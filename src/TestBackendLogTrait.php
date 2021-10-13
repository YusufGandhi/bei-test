<?php declare(strict_types=1);

namespace FutureSuper\BackendInfra;

use Monolog\Logger;
use Monolog\Handler\StreamHandler;

trait TestBackendLogTrait
{
    public function logInfo(string $message)
    {
        $logger = new Logger('test logger');

        $logger->pushHandler(new StreamHandler("php://stdout"));

        $logger->info($message);

    }
}