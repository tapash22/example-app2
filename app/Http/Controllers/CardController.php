<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Card;

class CardController extends Controller
{
    public function index()
    {
        $cards = Card::all();
        return response()->json($cards);
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string',
            'description' => 'required|string',
        ]);

        $card = Card::create($request->all());

        return response()->json($card, 201);
    }

    public function show($id)
    {
        $card = Card::findOrFail($id);
        return response()->json($card);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string',
            'description' => 'required|string',
        ]);

        $card = Card::findOrFail($id);
        $card->update($request->all());

        return response()->json($card);
    }

    public function destroy($id)
    {
        $card = Card::withTrashed()->findOrFail($id);

        if ($card->trashed()) {
            $card->forceDelete();
            $message = 'Card permanently deleted successfully';
        } else {
            $card->delete();
            $message = 'Card deleted successfully';
        }

        return response()->json(['message' => $message]);
    }
}
