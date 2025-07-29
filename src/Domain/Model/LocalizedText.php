<?php

declare(strict_types=1);

namespace StoreFrontClient\Domain\Model;

use InvalidArgumentException;

final readonly class LocalizedText
{
    public function __construct(private array $translations)
    {
        if (empty($translations)) {
            throw new InvalidArgumentException('At least one translation required');
        }
    }

    public static function fromArray(array $translations): self
    {
        return new self($translations);
    }

    public function get(string $locale = 'en'): string
    {
        return $this->translations[$locale] ?? $this->translations['en'] ?? reset($this->translations);
    }

    public function toArray(): array
    {
        return $this->translations;
    }
}
