<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite3d71997cd512d8126b6d9fe734a79c8
{
    public static $prefixLengthsPsr4 = array (
        'I' => 
        array (
            'Ibeko\\Hello\\' => 12,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Ibeko\\Hello\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInite3d71997cd512d8126b6d9fe734a79c8::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite3d71997cd512d8126b6d9fe734a79c8::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInite3d71997cd512d8126b6d9fe734a79c8::$classMap;

        }, null, ClassLoader::class);
    }
}
