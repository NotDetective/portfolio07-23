<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Code extends Model
{
    use HasFactory;

    protected $fillable = [
        'programing_language_id',
        'project_id',
        'code',
    ];

    public function programingLanguage()
    {
        return $this->belongsTo(ProgramingLanguage::class);
    }

    public function project()
    {
        return $this->belongsTo(Project::class);
    }
}
