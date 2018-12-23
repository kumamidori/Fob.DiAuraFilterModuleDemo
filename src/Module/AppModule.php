<?php
declare(strict_types=1);
namespace Fob\DiAuraFilterModuleDemo\Module;

use BEAR\Package\PackageModule;
use Fob\DiAuraFilterModule\Module\DiAuraFilterModule;
use FormalBears\Framework\Module\AbstractAppModule;

class AppModule extends AbstractAppModule
{
    /**
     * {@inheritdoc}
     */
    protected function configure()
    {
        $this->install(new PackageModule);
        $this->install(new DiAuraFilterModule($this->registry));
    }

    /**
     * @return string
     */
    protected function getAppNamespace(): string
    {
        return 'Fob\DiAuraFilterModuleDemo';
    }

    /**
     * @return string
     */
    protected function getAppDir(): string
    {
        return dirname(__DIR__, 2);
    }

    /**
     * @return string
     */
    protected function getConfigExtension(): string
    {
        return '.yaml';
    }
}
