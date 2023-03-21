<?php

namespace App;

use Exception;

class Container
{
    private static array $binds = [];
    private static array $singletons = [];

    protected static function findSingleton(string $abstract): object|null
    {
        return self::$singletons[$abstract] ?? null;
    }

    /**
     * @throws Exception
     */
    public static function singleton(string $abstract, ?string $concrete = null, mixed ...$params): mixed
    {
        if(self::findSingleton($abstract) !== null) throw new Exception('This class is registered. ' . $abstract);

        return self::$singletons[$abstract] = isset($concrete) ? new $concrete(...$params) : new $abstract(...$params);
    }

    /**
     * @throws Exception
     */
    public static function handle(string $abstract, ?string $concrete = null, bool $withSingleton = false, mixed ...$params): ?object
    {

        if($singleton = self::findSingleton($abstract)) return $singleton;

        if($withSingleton) {
            return self::singleton($abstract, $concrete, ...$params);
        }

        return self::$binds[$abstract][] = isset($concrete) ? new $concrete(...$params) : new $abstract(...$params);
    }
}