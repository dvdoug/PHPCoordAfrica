<?php

/**
 * PHPCoord.
 *
 * @author Doug Wright
 */
declare(strict_types=1);

namespace PHPCoord\CoordinateOperation;

class IGNFGeocentricTranslationRGM04RGM23Provider implements GridProvider
{
    public function provideGrid(): IGNFGeocentricTranslationGrid
    {
        return new IGNFGeocentricTranslationGrid(__DIR__ . '/../../resources/RGM04versRGM23.txt');
    }
}
