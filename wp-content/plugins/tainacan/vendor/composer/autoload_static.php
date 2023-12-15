<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit42cafd1d761107b988c2901ceaa5e962
{
    public static $files = array (
        '0e6d7bf4a5811bfa5cf40c5ccd6fae6a' => __DIR__ . '/..' . '/symfony/polyfill-mbstring/bootstrap.php',
    );

    public static $prefixLengthsPsr4 = array (
        'k' => 
        array (
            'kornrunner\\Blurhash\\' => 20,
        ),
        'S' => 
        array (
            'Symfony\\Polyfill\\Mbstring\\' => 26,
        ),
        'R' => 
        array (
            'Respect\\Validation\\' => 19,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'kornrunner\\Blurhash\\' => 
        array (
            0 => __DIR__ . '/..' . '/kornrunner/blurhash/src',
        ),
        'Symfony\\Polyfill\\Mbstring\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-mbstring',
        ),
        'Respect\\Validation\\' => 
        array (
            0 => __DIR__ . '/..' . '/respect/validation/library',
        ),
    );

    public static $prefixesPsr0 = array (
        'S' => 
        array (
            'Smalot\\PdfParser\\' => 
            array (
                0 => __DIR__ . '/..' . '/smalot/pdfparser/src',
            ),
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit42cafd1d761107b988c2901ceaa5e962::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit42cafd1d761107b988c2901ceaa5e962::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit42cafd1d761107b988c2901ceaa5e962::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit42cafd1d761107b988c2901ceaa5e962::$classMap;

        }, null, ClassLoader::class);
    }
}
