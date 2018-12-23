<?php
declare(strict_types=1);
namespace Fob\DiAuraFilterModuleDemo\Bridge\AuraFilter;

class NamesValidator
{
    public function __invoke(\stdClass $subject, $field)
    {
        $names = ['yamane', 'kuma_nana', 'kumamidori'];
        if (in_array($subject->$field, $names)) {
            return true;
        }

        return false;
    }
}
