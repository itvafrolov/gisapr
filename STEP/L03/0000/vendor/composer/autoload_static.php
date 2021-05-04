<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf0f998c3958ea0d603090cbb427a5721
{
    public static $prefixLengthsPsr4 = array (
        'm' => 
        array (
            'mylib\\' => 6,
        ),
        'c' => 
        array (
            'classes\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'mylib\\' => 
        array (
            0 => __DIR__ . '/..' . '/mylib',
        ),
        'classes\\' => 
        array (
            0 => __DIR__ . '/../..' . '/classes',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitf0f998c3958ea0d603090cbb427a5721::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf0f998c3958ea0d603090cbb427a5721::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitf0f998c3958ea0d603090cbb427a5721::$classMap;

        }, null, ClassLoader::class);
    }
}