<?php declare(strict_types=1);

namespace Jorpo\Dependency;

class InjectorBuilder extends AbstractInjectorBuilder
{
    public function __construct(Injection ...$injections)
    {
        $this->injections = $injections;
    }

    protected function applyInjectionToInjector(Injector $injector, mixed $injection): void
    {
        $injection->applyTo($injector);
    }
}
