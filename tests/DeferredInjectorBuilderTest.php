<?php declare(strict_types=1);

namespace Jorpo\Dependency;

use StdClass;
use Auryn\Injector;
use PHPUnit\Framework\TestCase;

class DeferredInjectorBuilderTest extends TestCase
{
    public function testBuilder()
    {
        $builder = new DeferredInjectorBuilder(
            DeferredInjectionFake::class
        );
        $injector = $builder->build();

        $this->assertInstanceOf(Injector::class, $injector);

        $madeObject = $injector->make(StdClass::class);

        $this->assertSame('injected', $madeObject->value);
    }
}
