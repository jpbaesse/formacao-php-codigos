<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit21ef0102bd1fe6273a12356e7aedd18c
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'CodeExperts\\' => 12,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'CodeExperts\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit21ef0102bd1fe6273a12356e7aedd18c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit21ef0102bd1fe6273a12356e7aedd18c::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
