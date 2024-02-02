<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skils extends Model
{
    use HasFactory;

    protected $fillable = [
        'programming_languages_id',
        'name',
        'color',
        'description',
    ];

    public function programmingLanguage()
    {
        return $this->belongsTo(ProgrammingLanguage::class);
    }


}
