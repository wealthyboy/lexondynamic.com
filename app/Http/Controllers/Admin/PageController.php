<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Page;

class PageController extends Controller
{
    public function index()
    {
        return response()->json([
            'pages' => Page::query()
                ->latest()
                ->paginate(20),
        ]);
    }
}
