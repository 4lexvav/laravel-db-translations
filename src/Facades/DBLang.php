<?php

declare(strict_types=1);

namespace Vav\Translation\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @method static bool has(string $key)
 * @method static mixed get(string $key, array $replace = [], string $locale = null, bool $fallback = true)
 * @method static string choice(string $key, \Countable|int|array $number, array $replace = [], string $locale = null)
 * @method static string getLocale()
 * @method static void setLocale(string $locale)
 *
 * @see \Illuminate\Translation\Translator
 */
class DBLang extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'db_translator';
    }
}
