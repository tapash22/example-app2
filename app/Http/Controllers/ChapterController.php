<?php

namespace App\Http\Controllers;
use App\Models\Chapter;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ChapterController extends Controller
{
    public function index()
    {
        $chapters = Chapter::all();
        return response()->json($chapters);
    }

    public function store(Request $request)
    {
        $request->validate([
            'book_id' => 'required|exists:books,id',
            'title' => 'required|string|max:255',
        ]);

        $chapter = Chapter::create($request->all());

        return response()->json($chapter, Response::HTTP_CREATED);
    }

    public function show(Chapter $chapter)
    {
        return response()->json($chapter);
    }

    public function update(Request $request, Chapter $chapter)
    {
        $request->validate([
            'title' => 'required|string|max:255',
        ]);

        $chapter->update($request->all());

        return response()->json($chapter);
    }

    public function destroy(Chapter $chapter)
    {
        $chapter->delete();

        return response()->json(null, Response::HTTP_NO_CONTENT);
    }
}
