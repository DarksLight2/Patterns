<?php

namespace App\Strategy\Orders\Traits;

use App\Strategy\Orders\Enums\ProductType;
use Exception;
use ReflectionClass;
use ReflectionProperty;

trait MakeMany
{
    public static function makeMany(int $count, array $params = [], bool $withRandomParams = false): array
    {
        $instances = [];

        while($count > count($instances)) {
            if($withRandomParams) $params = static::generateRandomParams();

            $instances[] = new static(...$params);
        }

        return $instances;
    }


    # TODO: тут этого не должно быть, но пока так
    protected static function generateRandomParams(): array
    {
        $params = [];

        $properties = (new ReflectionClass(static::class))->getProperties();

        try {
            foreach ($properties as $property) {
                $callback = match ((new ReflectionProperty(static::class, $property->name))->getType()->getName()) {
                    'int' => function () use (&$params, $property) {
                        $params[$property->name] = rand(0, 100);
                    },
                    'string' => function () use (&$params, $property) {
                        $params[$property->name] = 'is random text';
                    },
                    ProductType::class => function () use (&$params, $property) {
                        $params[$property->name] = ProductType::from(ProductType::cases()[array_rand(ProductType::cases())]->value);
                    },
                };

                $callback();

            }
        } catch (Exception){}

        return $params;
    }
}