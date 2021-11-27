<?php declare(strict_types=1);

namespace Jorpo\Dependency;

abstract class AbstractInjectorBuilder
{
    protected array $injections;

    public function build(Injector $injector): Injector
    {
        foreach ($this->injections as $injection) {
            $this->applyInjectionToInjector($injector, $injection);
        }

        return $injector;
    }

    abstract protected function applyInjectionToInjector(Injector $injector, mixed $injection): void;
}
