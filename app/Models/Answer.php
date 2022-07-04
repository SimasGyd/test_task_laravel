<?php
declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Answer extends Model
{
    protected $fillable = ['title', 'points', 'is_valid'];

    public function questions(): BelongsToMany
    {
        return $this->belongsToMany(Question::class);
    }
}
