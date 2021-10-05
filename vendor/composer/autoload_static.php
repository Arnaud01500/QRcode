<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd6ee7c8b5e86537b0fff186a5677cae4
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Sonata\\GoogleAuthenticator\\' => 27,
        ),
        'G' => 
        array (
            'Google\\Authenticator\\' => 21,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Sonata\\GoogleAuthenticator\\' => 
        array (
            0 => __DIR__ . '/..' . '/sonata-project/google-authenticator/src',
        ),
        'Google\\Authenticator\\' => 
        array (
            0 => __DIR__ . '/..' . '/sonata-project/google-authenticator/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitd6ee7c8b5e86537b0fff186a5677cae4::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd6ee7c8b5e86537b0fff186a5677cae4::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitd6ee7c8b5e86537b0fff186a5677cae4::$classMap;

        }, null, ClassLoader::class);
    }
}
