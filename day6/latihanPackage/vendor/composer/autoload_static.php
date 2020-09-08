<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit80b2b78f9f1ff0de6fb1e7b86e2d7dd8
{
    public static $prefixLengthsPsr4 = array (
        'F' => 
        array (
            'Faker\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Faker\\' => 
        array (
            0 => __DIR__ . '/..' . '/fzaninotto/faker/src/Faker',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit80b2b78f9f1ff0de6fb1e7b86e2d7dd8::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit80b2b78f9f1ff0de6fb1e7b86e2d7dd8::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
