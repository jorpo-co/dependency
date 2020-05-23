<?php declare(strict_types=1);

namespace Jorpo\Dependency;

use Auryn\Injector;
use PHPUnit\Framework\TestCase;

class InjectorBuilderTest extends TestCase
{
    public function testAppliesInjections()
    {
        $builder = new InjectorBuilder(
            $injection = new InjectionFake
        );
        $injector = $builder->build();

        $this->assertInstanceOf(Injector::class, $injector);

        $this->assertTrue($injection->wasCalled());
        $this->assertSame($injector, $injection->calledWith());
    }
}
