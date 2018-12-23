<?php
declare(strict_types=1);
namespace Fob\DiAuraFilterModuleDemo\Resource\App;

use Aura\Filter\ValueFilter;
use BEAR\Resource\ResourceObject;
use Ray\Di\Di\Inject;
use Ray\Di\Di\Named;

class Hello extends ResourceObject
{
    private $vFilter;

    /**
     * @Inject
     * @Named("vFilter=fob.aura_filter.service_value_filter")
     *
     * @param ValueFilter $vFilter
     */
    public function __construct(ValueFilter $vFilter)
    {
        $this->vFilter = $vFilter;
    }

    public function onGet(string $name): self
    {
        // 例なので素朴な実装にしてある
        $success = $this->vFilter->validate($name, 'app.name_in');
        if (! $success) {
            throw new \UnexpectedValueException('name is not valid.');
        }
        $helloName = $name;

        $success = $this->vFilter->sanitize($name, 'app.name_mask');
        if (! $success) {
            throw new \UnexpectedValueException('name mask failed.');
        }

        $this->body['hello_message'] = 'Hello ' . $helloName;
        $this->body['mask_name'] = $name;

        return $this;
    }
}
