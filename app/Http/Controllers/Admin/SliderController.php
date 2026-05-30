<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Slider;

class SliderController extends Controller
{
    public function index()
    {
        return response()->json([
            'sliders' => Slider::query()
                ->orderBy('sort_order')
                ->latest()
                ->paginate(20),
        ]);
    }
}
