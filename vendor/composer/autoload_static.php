<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita5ae155896d37b0a9febdcb4082126ac
{
    public static $prefixLengthsPsr4 = array (
        'L' => 
        array (
            'LINE\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'LINE\\' => 
        array (
            0 => __DIR__ . '/..' . '/linecorp/line-bot-sdk/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInita5ae155896d37b0a9febdcb4082126ac::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita5ae155896d37b0a9febdcb4082126ac::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
