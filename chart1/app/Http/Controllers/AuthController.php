<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;


class AuthController extends Controller
{
    public function index()
    {
        $storage = Storage::select(DB::raw("COUNT(*) as count "), DB::raw("MONTHNAME(data_input) as data_name"))
                ->whereYear('data_input', date('Y'))
                ->groupBy(DB::raw("data_name"))
                ->orderBy('id', 'ASC')
                ->pluck('count', 'data_name');

        $labels = $storage->keys();
        $storages = $storage->values();

        return view('index', compact('labels', 'data'));
    }
}
