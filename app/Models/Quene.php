<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Quene
 *
 * @property int $id
 * @property string|null $status
 * @property int|null $user_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\User|null $user
 * @method static \Illuminate\Database\Eloquent\Builder|Quene newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Quene newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Quene query()
 * @method static \Illuminate\Database\Eloquent\Builder|Quene whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Quene whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Quene whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Quene whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Quene whereUserId($value)
 * @mixin \Eloquent
 */
class Quene extends Model
{
    use HasFactory;

    protected $fillable = ['status'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
