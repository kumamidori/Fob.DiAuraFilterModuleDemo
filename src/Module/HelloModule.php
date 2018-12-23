<?php
declare(strict_types=1);
namespace Fob\DiAuraFilterModuleDemo\Module;

use Fob\DiAuraFilterModuleDemo\Bridge\AuraFilter\NameMaskSanitizer;
use Fob\DiAuraFilterModuleDemo\Bridge\AuraFilter\NamesValidator;
use Ray\Di\AbstractModule;

class HelloModule extends AbstractModule
{
    /**
     * Configure binding
     */
    protected function configure()
    {
        $this->bind(NamesValidator::class);
        $this->bind(NameMaskSanitizer::class);
    }
}
