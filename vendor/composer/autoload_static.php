<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitdb109995cb9eeb7ca52a385a5dde25e1
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Composer\\CaBundle\\' => 18,
        ),
        'A' => 
        array (
            'Abraham\\TwitterOAuth\\' => 21,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Composer\\CaBundle\\' => 
        array (
            0 => __DIR__ . '/..' . '/composer/ca-bundle/src',
        ),
        'Abraham\\TwitterOAuth\\' => 
        array (
            0 => __DIR__ . '/..' . '/abraham/twitteroauth/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitdb109995cb9eeb7ca52a385a5dde25e1::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitdb109995cb9eeb7ca52a385a5dde25e1::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitdb109995cb9eeb7ca52a385a5dde25e1::$classMap;

        }, null, ClassLoader::class);
    }
}
