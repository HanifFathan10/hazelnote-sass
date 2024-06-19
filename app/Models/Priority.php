<?php

namespace App\Models;

use App\Models\Note;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Priority extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function notes(): HasMany
    {
        return $this->hasMany(Note::class);
    }
}
