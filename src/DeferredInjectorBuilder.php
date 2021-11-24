<?php declare(strict_types=1);

namespace Jorpo\Dependency;

use Auryn\Injector;

class DeferredInjectorBuilder extends AbstractInjectorBuilder
{
    public function __construct(string ...$injections)
    {
        $this->injections = $injections;
    }

    protected function applyInjectionToInjector(Injector $injector, mixed $injection): void
    {
        ($this->makeInjection($injector, $injection))->applyTo($injector);
    }

    private function makeInjection(Injector $injector, string $injection): Injection
    {
        return $injector->make($injection);
    }
}
