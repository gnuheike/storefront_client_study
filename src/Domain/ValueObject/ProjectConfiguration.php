<?php

declare(strict_types=1);

namespace StoreFrontClient\Domain\ValueObject;

/**
 * Value object representing project configuration.
 *
 * This class encapsulates project-specific configuration settings.
 */
final readonly class ProjectConfiguration
{
    public function __construct(
        public string $projectId,
        public string $serverUrl
    ) {
    }
}