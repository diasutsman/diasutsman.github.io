<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit9c6a82bb944ced2af84568d6b97f51b5
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Midtrans\\' => 9,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Midtrans\\' => 
        array (
            0 => __DIR__ . '/..' . '/midtrans/midtrans-php/Midtrans',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit9c6a82bb944ced2af84568d6b97f51b5::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit9c6a82bb944ced2af84568d6b97f51b5::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit9c6a82bb944ced2af84568d6b97f51b5::$classMap;

        }, null, ClassLoader::class);
    }
}
