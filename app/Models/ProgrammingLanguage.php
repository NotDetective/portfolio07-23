<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProgrammingLanguage extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'color',
        'description',
    ];

    public function projects()
    {
        return $this->hasMany(Projects::class);
    }

    public function skills()
    {
        return $this->hasOne(Skils::class);
    }
}
