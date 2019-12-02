<?php

namespace msng\LaravelDryHelper\Http;

class Validation
{
    const ACCEPTED = 'accepted';
    const ACTIVE_URL = 'active_url';
    const AFTER = 'after';
    const AFTER_OR_EQUAL = 'after_or_equal';
    const ALPHA = 'alpha';
    const ALPHA_DASH = 'alpha_dash';
    const ALPHA_NUM = 'alpha_num';
    const ARRAY = 'array';
    const BAIL = 'bail';
    const BEFORE = 'before';
    const BEFORE_OR_EQUAL = 'before_or_equal';
    const BETWEEN = 'between';
    const BOOLEAN = 'boolean';
    const CONFIRMED = 'confirmed';
    const DATE = 'date';
    const DATE_EQUALS = 'date_equals';
    const DATE_FORMAT = 'date_format';
    const DIFFERENT = 'different';
    const DIGITS = 'digits';
    const DIGITS_BETWEEN = 'digits_between';
    const DIMENSIONS = 'dimensions';
    const DISTINCT = 'distinct';
    const EMAIL = 'email';
    const ENDS_WITH = 'ends_with';
    const EXISTS = 'exists';
    const FILE = 'file';
    const FILLED = 'filled';
    const GT = 'gt';
    const GTE = 'gte';
    const IMAGE = 'image';
    const IN = 'in';
    const IN_ARRAY = 'in_array';
    const INTEGER = 'integer';
    const IP = 'ip';
    const IPV = 'ipv';
    const JSON = 'json';
    const LT = 'lt';
    const LTE = 'lte';
    const MAX = 'max';
    const MIMETYPES = 'mimetypes';
    const MIMES = 'mimes';
    const MIN = 'min';
    const NOT_IN = 'not_in';
    const NOT_REGEX = 'not_regex';
    const NULLABLE = 'nullable';
    const NUMERIC = 'numeric';
    const PRESENT = 'present';
    const REGEX = 'regex';
    const REQUIRED = 'required';
    const REQUIRED_IF = 'required_if';
    const REQUIRED_UNLESS = 'required_unless';
    const REQUIRED_WITH = 'required_with';
    const REQUIRED_WITH_ALL = 'required_with_all';
    const REQUIRED_WITHOUT = 'required_without';
    const REQUIRED_WITHOUT_ALL = 'required_without_all';
    const SAME = 'same';
    const SIZE = 'size';
    const STARTS_WITH = 'starts_with';
    const STRING = 'string';
    const TIMEZONE = 'timezone';
    const UNIQUE = 'unique';
    const URL = 'url';
    const UUID = 'uuid';

    /**
     * @param string $pattern
     * @return string
     */
    public static function regex(string $pattern): string
    {
        return static::colon(static::REGEX, $pattern);
    }

    /**
     * @param string $pattern
     * @return string
     */
    public static function notRegex(string $pattern): string
    {
        return static::colon(static::NOT_REGEX, $pattern);
    }

    /**
     * @param $value
     * @return string
     */
    public static function min($value): string
    {
        return static::colon(static::MIN, $value);
    }

    /**
     * @param $value
     * @return string
     */
    public static function max($value): string
    {
        return static::colon(static::MAX, $value);
    }

    /**
     * @param $value
     * @return string
     */
    public static function size($value): string
    {
        return static::colon(static::SIZE, $value);
    }

    /**
     * @param string $rule
     * @param $value
     * @return string
     */
    protected static function colon(string $rule, $value): string
    {
        return vsprintf('%s:%s', [$rule, $value]);
    }
}
