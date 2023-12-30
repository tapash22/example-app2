<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataProperty extends Model
{
    use HasFactory;

    protected $fillable = ['data_content'];

    public function htmlProperty()
    {
        return $this->belongsTo(HtmlProperty::class);
    }
}
