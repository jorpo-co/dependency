<?php declare(strict_types=1);

namespace Jorpo\Dependency;

use StdClass;

class InjectedDummy
{
    private $value;

    public function __construct(StdClass $value)
    {
        $this->value = $value;
    }

    public function getInjectedValue(): StdClass
    {
        return $this->value;
    }
}
