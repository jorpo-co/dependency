<?php declare(strict_types=1);

namespace Jorpo\Dependency;

use PHPUnit\Framework\TestCase;
use stdClass;

class DeferredInjectorBuilderTest extends TestCase
{
    public function testBuilder()
    {
        $builder = new DeferredInjectorBuilder(
            DeferredInjectionFake::class
        );
        $injector = $builder->build(new DummyInjector());

        $this->assertInstanceOf(Injector::class, $injector);

        $madeObject = $injector->make(stdClass::class);

        $this->assertInstanceOf(stdClass::class, $madeObject);
    }
}
