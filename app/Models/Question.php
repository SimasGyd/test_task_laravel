<?php
declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Question extends Model
{
    protected $fillable  = ['title'];

    public function tests(): BelongsToMany
    {
        return $this->belongsToMany(Test::class);
    }

    public function answers(): BelongsToMany
    {
        return $this->belongsToMany(Answer::class);
    }
}
