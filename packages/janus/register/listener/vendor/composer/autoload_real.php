<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit347d5e109f3f15da0a1185b049dd0c7c
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        spl_autoload_register(array('ComposerAutoloaderInit347d5e109f3f15da0a1185b049dd0c7c', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit347d5e109f3f15da0a1185b049dd0c7c', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit347d5e109f3f15da0a1185b049dd0c7c::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}