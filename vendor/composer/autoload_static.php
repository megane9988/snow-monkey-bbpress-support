<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit19ffc6edd2bacf26e329145eaf0f8cdc
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Snow_Monkey\\Plugin\\bbPressSupport\\' => 34,
        ),
        'I' => 
        array (
            'Inc2734\\WP_GitHub_Plugin_Updater\\' => 33,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Snow_Monkey\\Plugin\\bbPressSupport\\' => 
        array (
            0 => __DIR__ . '/../..' . '/',
        ),
        'Inc2734\\WP_GitHub_Plugin_Updater\\' => 
        array (
            0 => __DIR__ . '/..' . '/inc2734/wp-github-plugin-updater/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'P' => 
        array (
            'Parsedown' => 
            array (
                0 => __DIR__ . '/..' . '/erusev/parsedown',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit19ffc6edd2bacf26e329145eaf0f8cdc::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit19ffc6edd2bacf26e329145eaf0f8cdc::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit19ffc6edd2bacf26e329145eaf0f8cdc::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
