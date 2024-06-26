<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite35861e0b18502de5669ae27f9898b00
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
            0 => __DIR__ . '/../..' . '/src',
            1 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInite35861e0b18502de5669ae27f9898b00::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite35861e0b18502de5669ae27f9898b00::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInite35861e0b18502de5669ae27f9898b00::$classMap;

        }, null, ClassLoader::class);
    }
}
