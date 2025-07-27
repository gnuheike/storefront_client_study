<?php

declare(strict_types=1);

namespace StoreFrontClient\Infrastructure\Logging;

use JsonException;
use Psr\Log\AbstractLogger;
use Stringable;

final class ConsoleLogger extends AbstractLogger
{
    public function log($level, string|Stringable $message, array $context = []): void
    {
        $timestamp = date('Y-m-d H:i:s');
        $formattedMessage = $this->formatMessage($timestamp, $level, $message, $context);
        echo $formattedMessage . PHP_EOL;
    }

    private function formatMessage(string $timestamp, string $level, string $message, array $context): string
    {
        try {
            $contextStr = empty($context) ? '' : json_encode($context, JSON_THROW_ON_ERROR);
        } catch (JsonException $e) {
            $contextStr = ' JSON error: ' . $e->getMessage();
        }

        return sprintf('[%s] %s: % s%s', $timestamp, strtoupper($level), $message, $contextStr);
    }

}