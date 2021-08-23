<?php

use Vav\Translation\Facades\DBLang;

if (!function_exists('__db')) {
    /**
     * Translate the given message.
     *
     * @param  string|null  $key
     * @param  array  $replace
     * @param  string|null  $locale
     * @return string|array|null
     */
    function __db($key = null, $replace = [], $locale = null)
    {
        if (is_null($key)) {
            return $key;
        }

        return trans_db($key, $replace, $locale);
    }
}

if (!function_exists('trans_db')) {
    /**
     * Translate the given message.
     *
     * @param  string|null  $key
     * @param  array  $replace
     * @param  string|null  $locale
     * @return \Illuminate\Contracts\Translation\Translator|string|array|null
     */
    function trans_db($key = null, $replace = [], $locale = null)
    {
        if (is_null($key)) {
            return DBLang::getFacadeRoot();
        }

        return DBLang::get($key, $replace, $locale);
    }
}

if (!function_exists('trans_choice_db')) {
    /**
     * Translates the given message based on a count.
     *
     * @param  string  $key
     * @param  \Countable|int|array  $number
     * @param  array  $replace
     * @param  string|null  $locale
     * @return string
     */
    function trans_choice_db($key, $number, array $replace = [], $locale = null)
    {
        if (is_null($key)) {
            return DBLang::getFacadeRoot();
        }

        return DBLang::choice($key, $number, $replace, $locale);
    }
}
