<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit1a20c3b73d608353a0a8b99c88855fdf
{
    public static $fallbackDirsPsr4 = array (
        0 => __DIR__ . '/../..' . '/src',
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->fallbackDirsPsr4 = ComposerStaticInit1a20c3b73d608353a0a8b99c88855fdf::$fallbackDirsPsr4;
            $loader->classMap = ComposerStaticInit1a20c3b73d608353a0a8b99c88855fdf::$classMap;

        }, null, ClassLoader::class);
    }
}
