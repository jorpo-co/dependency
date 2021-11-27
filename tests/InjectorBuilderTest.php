<?php declare(strict_types=1);

namespace Jorpo\Dependency;

use PHPUnit\Framework\TestCase;

class InjectorBuilderTest extends TestCase
{
    public function testAppliesInjections()
    {
        $builder = new InjectorBuilder(
            $injection = new InjectionFake
        );
        $injector = $builder->build(new DummyInjector());

        $this->assertInstanceOf(Injector::class, $injector);

        $this->assertTrue($injection->wasCalled());
        $this->assertSame($injector, $injection->calledWith());
    }
}
