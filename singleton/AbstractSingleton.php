<?php
/**
 * Created by PhpStorm.
 * User: noname
 * Date: 11.09.18
 * Time: 16:16
 */

namespace pattern\singleton;

/**
 * Class AbstractSingleton
 * @package pattern\singleton
 */
abstract class AbstractSingleton
{
    /**
     * @var static[]
     */
    private static $_instances = [];

    private static $_config = [];

    /**
     * AbstractSingleton constructor.
     * @param $config
     */
    protected function __construct($config = null)
    {
    }

    /**
     *
     */
    protected function __clone()
    {
    }

    /**
     * @throws \Exception
     */
    public function __wakeup()
    {
        throw new \Exception("Cannot unserialize a singleton.");
    }

    /**
     * @return static
     */
    public static function instance(): self
    {
        $cls = get_called_class();
        if (empty(self::$_instances[$cls])) {
            self::$_instances[$cls] = new static(self::$_config);
        }

        return self::$_instances[$cls];
    }

    /**
     * @param mixed|null $config
     */
    static public function setGlobalConfig($config = null): void
    {
        self::$_config = $config;
    }
}