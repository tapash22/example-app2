<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\HtmlProperty;

class HtmlDataController extends Controller
{
    public function index()
    {
        $htmlProperties = HtmlProperty::with('dataProperty')->get();

        return response()->json($htmlProperties);
    }
}
