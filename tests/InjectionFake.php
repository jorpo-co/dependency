<?php declare(strict_types=1);

namespace Jorpo\Dependency;

use Auryn\Injector;

class InjectionFake implements Injection
{
    private $called = false;
    private $injector;

    public function applyTo(Injector $injector): void
    {
        $this->called = true;
        $this->injector = $injector;
    }

    public function wasCalled(): bool
    {
        return $this->called;
    }

    public function calledWith(): Injector
    {
        return $this->injector;
    }
}
