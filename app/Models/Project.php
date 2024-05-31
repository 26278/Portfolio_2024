<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'subtitle',
        'image',
        'type',
        'main_text',
        'github',
        'extra_link'
    ];

    public function programmingLanguages()
    {
        return $this->belongsToMany(ProgrammingLanguage::class, 'project_programming_language');
    }
}
