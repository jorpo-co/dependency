<?php declare(strict_types=1);

namespace Jorpo\Dependency;

use Auryn\Injector;
use function is_string;

class MixedInjectorBuilder extends AbstractInjectorBuilder
{
    public function __construct(...$injections)
    {
        $this->injections = $injections;
    }

    protected function applyInjectionToInjector(Injector $injector, $injection): void
    {
        if (is_string($injection)) {
            ($this->makeInjection($injector, $injection))->applyTo($injector);

            return;
        }

        $injection->applyTo($injector);
    }

    private function makeInjection(Injector $injector, string $injection): Injection
    {
        return $injector->make($injection);
    }
}
