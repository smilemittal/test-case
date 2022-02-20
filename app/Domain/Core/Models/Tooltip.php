<?php

namespace App\Domain\Core\Models;

use Database\Factories\TooltipFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Tooltip
 * @package App\Domain\Core\Models
 *
 * @property-read int                           $id
 * @property-read string                        $key
 * @property-read string                        $value
 */
class Tooltip extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'key',
        'value',
    ];

    /**
     * Create a new factory instance for the model.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    protected static function newFactory()
    {
        return TooltipFactory::new();
    }
}
