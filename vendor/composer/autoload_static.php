<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitdff849aaf36d8b30bc69dd2d3929180b
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

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitdff849aaf36d8b30bc69dd2d3929180b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitdff849aaf36d8b30bc69dd2d3929180b::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
