<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Book;
use App\Models\Section;

class Chapter extends Model
{
    use HasFactory;
    protected $fillable = ['book_id','title'];

    public function book()
    {
        return $this->belongsTo(Book::class);
    }

    public function sections()
    {
        return $this->hasMany(Section::class);
    }
}
