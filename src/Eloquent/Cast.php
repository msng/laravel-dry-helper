<?php

namespace msng\LaravelDryHelper\Eloquent;

class Cast
{
    const INTEGER = 'integer';
    const REAL = 'real';
    const FLOAT = 'float';
    const DOUBLE = 'double';
    const STRING = 'string';
    const BOOLEAN = 'boolean';
    const OBJECT = 'object';
    const ARRAY = 'array';
    const COLLECTION = 'collection';
    const DATE = 'date';
    const DATETIME = 'datetime';
    const TIMESTAMP = 'timestamp';

    public static function decimal(int $digits)
    {
        return sprintf('decimal:%d', $digits);
    }
}
