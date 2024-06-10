<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Technology extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug'
    ];

    public function projects() { //la funzione si chiama al plurale perché è MANY projects to MANY technologies
        
        return $this->belongsToMany(Project::class);
    }
}
