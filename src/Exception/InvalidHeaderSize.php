<?php

declare(strict_types=1);

namespace App\Exception;

use DomainException;
use JetBrains\PhpStorm\Pure;
use Throwable;

final class InvalidHeaderSize extends DomainException
{
    #[Pure] private function __construct(string $message, ?Throwable $previous = null)
    {
        parent::__construct($message, 0, $previous);
    }

    #[Pure] public static function inFile(string $location, int $actual, int $expected, Throwable $previous): self
    {
        return new self(sprintf('Expected size of %d, but header in "%s" contains %d.', $expected, $location, $actual), previous: $previous);
    }
}
