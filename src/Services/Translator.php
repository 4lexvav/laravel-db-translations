<?php

declare(strict_types=1);

namespace Vav\Translation\Services;

use Illuminate\Translation\Translator as IlluminateTranslator;

class Translator extends IlluminateTranslator
{
    public function get($key, array $replace = [], $locale = null, $fallback = true)
    {
        $locale = $locale ?: $this->locale;

        $this->load('*', '*', $locale);

        $line = $this->loaded['*']['*'][$locale][$key] ?? null;

        if (!isset($line)) {
            $locales = $fallback ? $this->localeArray($locale) : [$locale];

            foreach ($locales as $locale) {
                if (! is_null($line = $this->getLine(
                    '*', '*', $locale, $key, $replace
                ))) {
                    return $line;
                }
            }
        }

        return $this->makeReplacements($line === null ? $key : $line, $replace);
    }
}
