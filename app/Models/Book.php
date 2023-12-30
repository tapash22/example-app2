<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Chapter;

class Book extends Model
{
    use HasFactory;

    protected $fillable = ['title'];

    public function chapters()
    {
        return $this->hasMany(Chapter::class);
    }
}
