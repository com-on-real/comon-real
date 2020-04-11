<?php

namespace App\Http\Controllers\cv;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class cvController extends Controller
{
    public function index($entreprise = false)
    {
        return view('cv\index', compact('entreprise'));
        // $this->create($new_sub, 'create');
    }
}
