<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sections extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'classes_id'];

    public function class()
    {
        return $this->belongsTo(Classes::class);
    }
    public function students()
    {
        return $this->hasMany(Students::class);
    }
}
