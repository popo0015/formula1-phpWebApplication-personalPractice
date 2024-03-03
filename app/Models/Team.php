<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Team extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'origin', 'history', 'color_hex'];

    /**
     * a Post has many Comments
     *
     * @return HasMany
     */
    public function comments(): HasMany
    {
        return $this->hasMany(Driver::class);
    }
}
