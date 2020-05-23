<?php declare(strict_types=1);

namespace Jorpo\Dependency;

use StdClass;
use Auryn\Injector;
use PHPUnit\Framework\TestCase;

class MixedInjectorBuilderTest extends TestCase
{
    public function testAppliesMixedInjections()
    {
        $builder = new MixedInjectorBuilder(
            $injectionOne = new InjectionFake,
            DeferredInjectionFake::class
        );
        $injector = $builder->build();

        $this->assertInstanceOf(Injector::class, $injector);

        $this->assertTrue($injectionOne->wasCalled());
        $this->assertSame($injector, $injectionOne->calledWith());

        $madeObject = $injector->make(StdClass::class);

        $this->assertSame('injected', $madeObject->value);
    }
}
