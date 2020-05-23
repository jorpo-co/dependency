<?php declare(strict_types=1);

namespace Jorpo\Dependency;

use Auryn\Injector;

interface Injection
{
    public function applyTo(Injector $injector): void;
}
