<?php

/**
 * PHPCoord.
 *
 * @author Doug Wright
 */
declare(strict_types=1);

namespace PHPCoord\CoordinateOperation;

class DATITRF2005SALLDProvider implements GridProvider
{
    public function provideGrid(): DATHeightGrid
    {
        return new DATHeightGrid(__DIR__ . '/../../resources/SAGEOID2010.dat');
    }
}
