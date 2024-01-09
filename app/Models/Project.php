<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    
    // aggiungere ai model Type e Project i metodi per definire la relazione one to many (hasMany e belongsTo)
    protected $fillable = [
        'title',
        'description',
        'image',
        'url',
        'start_date',
        'end_date',
        'slug',
        'type_id'
    ];

    public function type()
    {
        return $this->belongsTo(Type::class);
    }
}

