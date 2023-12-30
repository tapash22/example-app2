<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HtmlProperty;

class HtmlPropertyController extends Controller
{
    public function index()
    {
        $htmlProperties = HtmlProperty::all();
        return response()->json($htmlProperties);
    }

    public function show($id)
    {
        $htmlProperty = HtmlProperty::findOrFail($id);
        return response()->json($htmlProperty);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'tag' => 'required|string',
            'html_content' => 'required|string',
            'tag_style' => 'json|nullable',
        ]);

        $htmlProperty = HtmlProperty::create($request->all());

        return response()->json($htmlProperty, 201);
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'tag' => 'string',
            'html_content' => 'string',
            'tag_style' => 'json|nullable',
        ]);

        $htmlProperty = HtmlProperty::findOrFail($id);
        $htmlProperty->update($request->all());

        return response()->json($htmlProperty);
    }

    public function destroy($id)
    {
        $htmlProperty = HtmlProperty::findOrFail($id);
        $htmlProperty->delete();

        return response()->json(['message' => 'Html property deleted successfully']);
    }
}
