<?php

declare(strict_types=1);

namespace StoreFrontClient\Domain\ValueObject;


final readonly class ApiCredentials
{
    public function __construct(
        public string $projectId,
        public string $secretKey
    )
    {
    }
}