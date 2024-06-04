<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit71f927dbee1a79688acb439f0a181030
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

        spl_autoload_register(array('ComposerAutoloaderInit71f927dbee1a79688acb439f0a181030', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit71f927dbee1a79688acb439f0a181030', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit71f927dbee1a79688acb439f0a181030::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}