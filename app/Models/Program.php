<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Program
 *
 * @property int $id
 * @property string $name
 * @property int $rank
 * @property int|null $user_id
 * @property-read \App\Models\User|null $user
 * @method static \Illuminate\Database\Eloquent\Builder|Program newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Program newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Program query()
 * @method static \Illuminate\Database\Eloquent\Builder|Program whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Program whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Program whereRank($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Program whereUserId($value)
 * @mixin \Eloquent
 */
class Program extends Model
{
    use HasFactory;

    protected $fillable = ['id','name','rank'];

    public function user()
    {
        return $this->belongsToMany(User::class);
    }
}
