<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit59d7dbade568d5a985fe67c34993be84
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit59d7dbade568d5a985fe67c34993be84::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit59d7dbade568d5a985fe67c34993be84::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit59d7dbade568d5a985fe67c34993be84::$classMap;

        }, null, ClassLoader::class);
    }
}
