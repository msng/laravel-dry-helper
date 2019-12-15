<?php

namespace msng\LaravelDryHelper\Constants\Database;

class Operator
{
    const EQUAL = '=';
    const NOT_EQUAL = '!=';

    const GREATER_THAN = '>';
    const GREATER_THAN_OR_EQUAL = '>=';
    const GT = self::GREATER_THAN;
    const GTE = self::GREATER_THAN_OR_EQUAL;

    const LESS_THAN = '<';
    const LESS_THAN_OR_EQUAL = '<=';
    const LT = self::LESS_THAN;
    const LTE = self::LESS_THAN_OR_EQUAL;
};