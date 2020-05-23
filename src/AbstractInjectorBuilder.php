<?php declare(strict_types=1);

namespace Jorpo\Dependency;

use Auryn\Injector;

abstract class AbstractInjectorBuilder
{
    protected array $injections;

    public function build(Injector $injector = null): Injector
    {
        if (null === $injector) {
            $injector = new Injector;
        }

        foreach ($this->injections as $injection) {
            $this->applyInjectionToInjector($injector, $injection);
        }

        return $injector;
    }

    abstract protected function applyInjectionToInjector(Injector $injector, $injection): void;
}
