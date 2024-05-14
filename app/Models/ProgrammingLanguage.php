<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProgrammingLanguage extends Model
{
    use HasFactory;

    protected $fillable = [
        'type',
        'name',
        'color',
    ];

    public function GitProject()
    {
        return $this->hasOne(GitProjects::class, 'programming_language_id');
    }
}
