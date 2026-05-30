<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Page;
use App\Models\Slider;
use App\Models\User;

class DashboardController extends Controller
{
    public function index()
    {
        return response()->json([
            'users' => User::count(),
            'pages' => Page::count(),
            'sliders' => Slider::count(),
        ]);
    }
}
