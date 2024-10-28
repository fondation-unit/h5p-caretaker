<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit3268bbb304afcfce8c2486398d69f4d8
{
    public static $prefixLengthsPsr4 = array (
        'N' => 
        array (
            'Ndlano\\H5PCaretaker\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Ndlano\\H5PCaretaker\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit3268bbb304afcfce8c2486398d69f4d8::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit3268bbb304afcfce8c2486398d69f4d8::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit3268bbb304afcfce8c2486398d69f4d8::$classMap;

        }, null, ClassLoader::class);
    }
}
