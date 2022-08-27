<?php

class Autoloader 
{
    public const APP_DIR = 'src/';
    public const APP_NAMESPACE = 'App';

    /**
     * Register autoloader
     * 
     * @return void
     */
    public static function getLoader()
    {
        spl_autoload_register(['Autoloader', 'loadClass'], true, true);
    }

    /**
     * @param string $class Fully qualified Class name
     * 
     */
    public static function loadClass($className)
    {
        $path = self::buildPath($className);

        if (file_exists($path)) {
            require_once $path;
        }
    }

    /**
     * @param string $className Class name
     * @return string
     */
    public static function buildPath($className)
    {
        $pathParts = explode('\\', $className);

        if (count($pathParts) < 2) {
            return null;
        }

        $pathParts[0] = ($pathParts[0] == self::APP_NAMESPACE) 
        ? self::APP_DIR 
        : 'Class name does not exist in this context!';

        return sprintf('%s.php', implode(DIRECTORY_SEPARATOR, $pathParts));

    }


}