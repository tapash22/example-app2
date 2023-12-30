<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Chapter;

class Section extends Model
{
    use HasFactory;
    protected $fillable = ['chapter_id', 'title', 'content'];

    public function chapter()
    {
        return $this->belongsTo(Chapter::class);
    }
}
