<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

    protected $fillable = [
        'taggable_id',
        'taggable_type',
        'name',
        'type',
    ];

    public function taggable()
    {
        return $this->morphTo();
    }
}
