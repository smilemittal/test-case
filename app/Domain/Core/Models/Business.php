<?php

namespace App\Domain\Core\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Business
 * @package App\Domain\Core\Models
 *
 * @property-read int                           $id
 * @property-read string                        $name
 * @property-read string                        $path
 * @property-read string|null                   $phone
 * @property-read string|null                   $email
 * @property-read string|null                   $website
 * @property-read int                           $user_id
 * @property-read int|null                      $parent_business_id
 * @property-read \Carbon\Carbon                $created_at
 * @property-read \Carbon\Carbon                $updated_at
 */
class Business extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'path',
        'phone',
        'email',
        'website',
        'user_id',
        'parent_business_id'
    ];
}
