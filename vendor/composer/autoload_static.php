<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit33bbe58dc7499cccf09c508575a83a67
{
    public static $files = array (
        'a264baff449e28cd9fc21c2505fc8b07' => __DIR__ . '/../..' . '/app/lib.php',
    );

    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Psr\\SimpleCache\\' => 16,
            'PhpOffice\\PhpSpreadsheet\\' => 25,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Psr\\SimpleCache\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/simple-cache/src',
        ),
        'PhpOffice\\PhpSpreadsheet\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpoffice/phpspreadsheet/src/PhpSpreadsheet',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit33bbe58dc7499cccf09c508575a83a67::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit33bbe58dc7499cccf09c508575a83a67::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
