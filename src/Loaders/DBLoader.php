<?php

declare(strict_types=1);

namespace Vav\Translation\Loaders;

use Vav\Translation\Model\Translation;
use Illuminate\Contracts\Translation\Loader;

class DBLoader implements Loader
{
    public function load($locale, $group, $namespace = null)
    {
        return Translation::query()
            ->where('locale', $locale)
            ->get()
            ->pluck('value', 'key')
            ->toArray();
    }

    public function addNamespace($namespace, $hint)
    {
        //
    }

    public function addJsonPath($path)
    {
        //
    }

    public function namespaces()
    {
        return [];
    }
}
