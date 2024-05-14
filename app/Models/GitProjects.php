<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GitProjects extends Model
{
    use HasFactory;

    protected $fillable = [
        'programming_language_id',
        'name',
        'description',
        'archived',
        'last_update',
        'url',
        'status',
    ];

    public function programmingLanguage()
    {
        return $this->belongsTo(ProgrammingLanguage::class);
    }
}
