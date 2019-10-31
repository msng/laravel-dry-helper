<?php

namespace msng\LaravelDryHelper\Constants\Config\Cache;

class Store
{
    const APC = 'apc';
    const STORE_ARRAY = 'array';
    const DATABASE = 'database';
    const FILE = 'file';
    const MEMCACHED = 'memcached';
    const REDIS = 'redis';
}