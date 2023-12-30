<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Card extends Model
{

    use HasFactory, SoftDeletes;
    
    protected $fillable = ['title', 'description'];

    protected static function boot()
    {
        parent::boot();

        // Handle the deleting event to move the record to the deleted_cards table
        static::deleting(function ($card) {
            $deletedCard = new DeletedCard([
                'title' => $card->title,
                'description' => $card->description,
            ]);

            $deletedCard->save();
        });
    }
}
