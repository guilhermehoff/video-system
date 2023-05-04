<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit0f968ae425c368dfbc46ca8376d03829
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Alura\\Mvc\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Alura\\Mvc\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit0f968ae425c368dfbc46ca8376d03829::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit0f968ae425c368dfbc46ca8376d03829::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit0f968ae425c368dfbc46ca8376d03829::$classMap;

        }, null, ClassLoader::class);
    }
}