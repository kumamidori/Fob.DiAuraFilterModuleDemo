<?php
namespace Fob\DiAuraFilterModuleDemo\Resource\App;

use BEAR\Package\AppInjector;
use BEAR\Resource\ResourceInterface;
use PHPUnit\Framework\TestCase;

class HelloTest extends TestCase
{
    const URI = 'app://self/hello';

    public function testOnGet()
    {
        /** @var ResourceInterface $SUT */
        $SUT = (new AppInjector('Fob\DiAuraFilterModuleDemo', 'app'))->getInstance(ResourceInterface::class);
        $res = $SUT->get->uri(self::URI)(['name' => 'yamane']);
        $this->assertSame(200, $res->code);
    }
}
