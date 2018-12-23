<?php
namespace Fob\DiAuraFilterModuleDemo\Bridge\AuraFilter;

use BEAR\Package\AppInjector;
use PHPUnit\Framework\TestCase;

class NamesValidatorTest extends TestCase
{
    /**
     * @var NamesValidator
     */
    private $validator;

    protected function setUp()
    {
        parent::setUp();
        $this->validator = (new AppInjector('Fob\DiAuraFilterModuleDemo', 'app'))->getInstance(NamesValidator::class);
    }

    public function testInvokeCaseValid()
    {
        $fixture = 'kuma_nana';
        $subject = new \stdClass;
        $subject->value = $fixture;
        $this->assertTrue(call_user_func($this->validator, $subject, 'value'));
    }

    public function testInvokeCaseInvalid()
    {
        $fixture = 'invalid';
        $subject = new \stdClass;
        $subject->value = $fixture;
        $this->assertFalse(call_user_func($this->validator, $subject, 'value'));
    }
}
