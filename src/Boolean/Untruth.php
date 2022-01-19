<?php

namespace Maxonfjvipon\Elegant_Elephant\Boolean;

use Exception;
use Maxonfjvipon\Elegant_Elephant\Boolean;

class Untruth implements Boolean
{
    /**
     * @return Untruth
     */
    public static function new(): Untruth
    {
        return new self();
    }

    /**
     * Ctor.
     */
    private function __construct()
    {
    }

    /**
     * @inheritDoc
     */
    public function asBool(): bool
    {
        return false;
    }
}