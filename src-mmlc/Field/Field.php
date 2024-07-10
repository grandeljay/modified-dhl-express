<?php

namespace Grandeljay\DhlExpress\Field;

class Field
{
    protected static function getFieldClasses(): string
    {
        $classes = [];

        if (isset($_GET['factor']) && \is_numeric($_GET['factor'])) {
            $classes[] = 'factor-active';
        }

        return \implode(' ', $classes);
    }
}
