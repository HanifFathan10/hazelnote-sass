<?php

namespace App\Models;

use App\Models\User;
use App\Models\Priority;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Note extends Model
{
    use HasFactory;

    protected $with = ['user', 'priority'];

    protected $fillable = [
        'title',
        'slug',
        'body',
        'priority_id',
        'user_id'
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function priority(): BelongsTo
    {
        return $this->belongsTo(Priority::class);
    }
}
