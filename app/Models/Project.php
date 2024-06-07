<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'description',
        'url',
        'type_id'
    ];

    public function type() { //la funzione si chiama al singolare perché è ONE type to MANY projects
        
        return $this->belongsTo(Type::class);
    }

    public function technologies() { //la funzione si chiama al plurale perché è MANY technologies to MANY projects
        
        return $this->belongsToMany(Technology::class);
    }
}
