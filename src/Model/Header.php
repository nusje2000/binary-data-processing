<?php

declare(strict_types=1);

namespace App\Model;

final class Header
{
    public function __construct(
        private string $signature,
        private int $fileSize,
        private int $dataOffset
    ) {
    }

    public function signature(): string
    {
        return $this->signature;
    }

    public function fileSize(): int
    {
        return $this->fileSize;
    }

    public function dataOffset(): int
    {
        return $this->dataOffset;
    }
}
