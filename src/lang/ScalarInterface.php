<?php

namespace phpdk\lang;

interface ScalarInterface
{
    /**
     * @return int|string|float|array
     */
    public function getValue();

    public static function instanceof($object): bool;
}