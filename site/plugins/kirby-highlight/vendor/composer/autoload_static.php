<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit171e0d33a2a9aa673a3f8232c8649907
{
    public static $prefixesPsr0 = array (
        'H' => 
        array (
            'Highlight\\' => 
            array (
                0 => __DIR__ . '/..' . '/scrivo/highlight.php',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInit171e0d33a2a9aa673a3f8232c8649907::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
