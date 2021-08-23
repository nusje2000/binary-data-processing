<?php

declare(strict_types=1);

namespace App;

use App\Exception\InvalidHeaderSize;
use App\Model\Header;
use App\Model\InfoHeader;
use JetBrains\PhpStorm\Pure;

final class Reader
{
    private const HEADER_SIZE = 14;
    private const HEADER_STRUCTURE = [
        'a2signature',
        'Lsize',
        'x',
        'Ldata_offset',
    ];
    private const INFO_HEADER_SIZE = 40;
    private const INFO_HEADER_STRUCTURE = [
        'Lsize',
        'Lwidth',
        'Lheight',
        'Splanes',
        'Sbpp',
        'Lcompression',
        'Limage_size',
        'Lx_pixels_per_m',
        'Ly_pixels_per_m',
        'Lcolors_used',
        'Limportant_colors',
    ];

    public function open(string $path): void
    {
        $file = fopen($path, 'rb');

        $header = $this->header(fread($file, self::HEADER_SIZE));
        $info = $this->info(fread($file, self::INFO_HEADER_SIZE), $path);
    }

    private function header(string $header): Header
    {
        $unpacked = unpack(implode('/', self::HEADER_STRUCTURE), $header);

        return new Header(
            $unpacked['signature'],
            $unpacked['size'],
            $unpacked['data_offset'],
        );
    }

    private function info(string $header, string $path): InfoHeader
    {
        $unpacked = unpack(implode('/', self::INFO_HEADER_STRUCTURE), $header);

        if ($unpacked['size'] !== self::INFO_HEADER_SIZE) {
            throw InvalidHeaderSize::inFile($path, $unpacked['size'], self::INFO_HEADER_SIZE);
        }

        return new InfoHeader(
            $unpacked['width'],
            $unpacked['height'],
            $unpacked['planes'],
            $unpacked['bpp'],
            $unpacked['compression'],
            $unpacked['image_size'],
            $unpacked['x_pixels_per_m'],
            $unpacked['y_pixels_per_m'],
            $unpacked['colors_used'],
            $unpacked['important_colors']
        );
    }
}
