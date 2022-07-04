<?php
declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Result extends Model
{
    protected $fillable = ['name', 'test_id'];

    public function answers(): BelongsToMany
    {
        return $this->belongsToMany(Answer::class);
    }

    public function test(): BelongsTo
    {
        return $this->belongsTo(Test::class);
    }
}
