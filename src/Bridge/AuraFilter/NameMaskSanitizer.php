<?php
declare(strict_types=1);
namespace Fob\DiAuraFilterModuleDemo\Bridge\AuraFilter;

class NameMaskSanitizer
{
    /**
     * @param \stdClass $subject
     * @param $field
     * @return bool
     */
    public function __invoke(\stdClass $subject, $field)
    {
        $subject->$field = '******';

        return true;
    }
}
