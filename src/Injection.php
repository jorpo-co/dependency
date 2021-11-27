<?php declare(strict_types=1);

namespace Jorpo\Dependency;

interface Injection
{
    public function applyTo(Injector $injector): void;
}
