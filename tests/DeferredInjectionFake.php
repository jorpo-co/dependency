<?php declare(strict_types=1);

namespace Jorpo\Dependency;

use stdClass;

class DeferredInjectionFake implements Injection
{
    public function applyTo(Injector $injector): void
    {
        $injector->prepare(StdClass::class, function (stdClass $object) {
            $object->value = 'injected';
        });
    }
}
