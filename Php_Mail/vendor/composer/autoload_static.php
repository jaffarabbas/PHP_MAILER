<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit08984c1b83be96c1a1439b7c04b6e290
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit08984c1b83be96c1a1439b7c04b6e290::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit08984c1b83be96c1a1439b7c04b6e290::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}