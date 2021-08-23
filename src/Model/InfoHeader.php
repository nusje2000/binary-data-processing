<?php

declare(strict_types=1);

namespace App\Model;

final class InfoHeader
{
    public function __construct(
        private int $height,
        private int $width,
        private int $planes,
        private int $bitsPerPixel,
        private int $compression,
        private int $imageSize,
        private int $xPixelsPerMeter,
        private int $yPixelsPerMeter,
        private int $colorsUsed,
        private int $importantColors,
    ) {
    }

    public function height(): int
    {
        return $this->height;
    }

    public function width(): int
    {
        return $this->width;
    }

    public function planes(): int
    {
        return $this->planes;
    }

    public function bitsPerPixel(): int
    {
        return $this->bitsPerPixel;
    }

    public function compression(): int
    {
        return $this->compression;
    }

    public function imageSize(): int
    {
        return $this->imageSize;
    }

    public function xPixelsPerMeter(): int
    {
        return $this->xPixelsPerMeter;
    }

    public function yPixelsPerMeter(): int
    {
        return $this->yPixelsPerMeter;
    }

    public function colorsUsed(): int
    {
        return $this->colorsUsed;
    }

    public function importantColors(): int
    {
        return $this->importantColors;
    }
}
