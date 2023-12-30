<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DeletedCard;

class DeletedCardController extends Controller
{
    public function index()
    {
        $deletedCards = DeletedCard::all();
        return response()->json($deletedCards);
    }

    public function destroy($id)
    {
        $deletedCard = DeletedCard::findOrFail($id);
        $deletedCard->forceDelete();

        return response()->json(['message' => 'Deleted card permanently']);
    }
}
