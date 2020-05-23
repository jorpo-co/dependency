<?php declare(strict_types=1);

namespace Jorpo\Dependency;

use Auryn\Injector;

class InjectorBuilder extends AbstractInjectorBuilder
{
    public function __construct(Injection ...$injections)
    {
        $this->injections = $injections;
    }

    protected function applyInjectionToInjector(Injector $injector, $injection): void
    {
        $injection->applyTo($injector);
    }
}
