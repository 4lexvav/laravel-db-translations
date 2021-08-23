<?php

declare(strict_types=1);

namespace Vav\Translation\Model;

use Illuminate\Database\Eloquent\Model;

/**
 * @property-read int $id
 * @property string $key
 * @property string $locale
 * @property string $value
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 */
class Translation extends Model
{
    protected $table = 'db_translations';
}
