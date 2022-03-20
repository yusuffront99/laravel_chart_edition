<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\storage;

class StorageController extends Controller
{
    public function index()
    {
        $levels = Storage::pluck('level');
        $dates = Storage::pluck('date');
        // dd($dates);
        return view('storage', compact('levels', 'dates'));
    }
}
