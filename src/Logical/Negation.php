<?php

namespace Maxonfjvipon\Elegant_Elephant\Logical;

use Exception;
use Maxonfjvipon\Elegant_Elephant\Logical;
use Maxonfjvipon\OverloadedElephant\Overloadable;

/**
 * Negation
 * @package Maxonfjvipon\Elegant_Elephant\Logical
 */
final class Negation implements Logical
{
    use Overloadable;

    /**
     * @var bool|Logical $origin
     */
    private bool|Logical $origin;

    /**
     * @param bool|Logical $origin
     * @return Negation
     */
    public static function new(bool|Logical $origin): Negation
    {
        return new self($origin);
    }

    /**
     * Ctor.
     * @param bool|Logical $origin
     */
    public function __construct(bool|Logical $origin)
    {
        $this->origin = $origin;
    }

    /**
     * @inheritDoc
     */
    public function asBool(): bool
    {
        return !self::overload([$this->origin], [[
            'bool',
            Logical::class => fn(Logical $log) => $log->asBool()
        ]])[0];
    }
}