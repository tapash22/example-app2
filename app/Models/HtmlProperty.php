<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HtmlProperty extends Model
{
    use HasFactory;

    protected $fillable = ['tag', 'html_content', 'style','tag_style'];

    public function dataProperty()
    {
        return $this->hasOne(DataProperty::class);
    }
}
