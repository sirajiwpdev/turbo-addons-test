<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit068efa93dde772dcb87bef0fdacb7f85
{
    public static $prefixLengthsPsr4 = array (
        't' => 
        array (
            'turbo\\addons\\' => 13,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'turbo\\addons\\' => 
        array (
            0 => __DIR__ . '/../..' . '/includes',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit068efa93dde772dcb87bef0fdacb7f85::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit068efa93dde772dcb87bef0fdacb7f85::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit068efa93dde772dcb87bef0fdacb7f85::$classMap;

        }, null, ClassLoader::class);
    }
}
