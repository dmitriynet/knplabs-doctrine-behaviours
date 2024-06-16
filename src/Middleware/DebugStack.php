<?php

declare(strict_types=1);


namespace Knp\DoctrineBehaviors\Middleware;

use Doctrine\DBAL\Driver as DriverInterface;
use Doctrine\DBAL\Driver\Middleware as MiddlewareInterface;
use Doctrine\DBAL\Logging\Driver;
use Psr\Log\LoggerInterface;

class DebugStack implements MiddlewareInterface
{
    public function __construct(private LoggerInterface $logger){}

    /**
     * Executed SQL queries.
     *
     * @var array<int, array<string, mixed>>
     */
    public array $queries = [];

    /**
     * If Debug Stack is enabled (log queries) or not.
     */
    public bool $enabled = true;

    public ?float $start = null;

    public int $currentQuery = 0;
    public function startQuery($sql, ?array $params = null, ?array $types = null): void
    {
        if (! $this->enabled) {
            return;
        }

        $this->start = microtime(true);

        $this->queries[++$this->currentQuery] = [
            'sql' => $sql,
            'params' => $params,
            'types' => $types,
            'executionMS' => 0,
        ];
    }

    public function stopQuery(): void
    {
        if (! $this->enabled) {
            return;
        }

        $this->queries[$this->currentQuery]['executionMS'] = microtime(true) - $this->start;
    }

    public function wrap(DriverInterface $driver): Driver
    {
        return new Driver($driver, $this->logger);
    }
}