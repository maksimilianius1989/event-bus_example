<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit5d820ad7edda0501e9dd6968e46a9dce
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit5d820ad7edda0501e9dd6968e46a9dce::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit5d820ad7edda0501e9dd6968e46a9dce::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
