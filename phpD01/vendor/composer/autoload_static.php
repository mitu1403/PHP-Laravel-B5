<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit12a8587e5560348c4264d86484a52439
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
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit12a8587e5560348c4264d86484a52439::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit12a8587e5560348c4264d86484a52439::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit12a8587e5560348c4264d86484a52439::$classMap;

        }, null, ClassLoader::class);
    }
}
