<?php
namespace Fob\DiAuraFilterModuleDemo\Hello;

use BEAR\Package\AppInjector;
use PHPUnit\Framework\TestCase;

class KumaNameSpecificationTest extends TestCase
{
    /**
     * @var KumaNameSpecification
     */
    private $SUT;

    protected function setUp()
    {
        parent::setUp();
        $this->SUT = (new AppInjector('Fob\DiAuraFilterModuleDemo', 'app'))->getInstance(KumaNameSpecification::class);
    }

    public function testIsSatisfiedBy()
    {
        $this->assertTrue($this->SUT->isSatisfiedBy('kuma_nana'));
    }
}
