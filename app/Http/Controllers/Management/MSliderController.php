<?php

namespace App\Http\Controllers\Management;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MSliderController extends Controller
{
    public function index()
    {
        return view('admin.slider.slider');
    }
}
