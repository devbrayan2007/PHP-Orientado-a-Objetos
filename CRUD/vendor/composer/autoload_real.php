<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit5ccdf2e0a2386528ecfec49ec2b5bdfc
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

        spl_autoload_register(array('ComposerAutoloaderInit5ccdf2e0a2386528ecfec49ec2b5bdfc', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit5ccdf2e0a2386528ecfec49ec2b5bdfc', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit5ccdf2e0a2386528ecfec49ec2b5bdfc::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
