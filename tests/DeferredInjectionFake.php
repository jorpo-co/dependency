<?php declare(strict_types=1);

namespace Jorpo\Dependency;

use StdClass;
use Auryn\Injector;

class DeferredInjectionFake implements Injection
{
    public function applyTo(Injector $injector): void
    {
        $injector->prepare(StdClass::class, function (StdClass $object) {
            $object->value = 'injected';
        });
    }
}
