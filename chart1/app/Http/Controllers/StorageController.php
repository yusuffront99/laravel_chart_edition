<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\storage;
use Illuminate\Support\Carbon;

class StorageController extends Controller
{
    public function index()
    {
        $levels = Storage::pluck('level');
        $dates = Storage::pluck('date');
        // dd($dates);
        return view('storage', compact('levels', 'dates'));

        // dd($data);

        // $mon = date('m', strtotime('2022-03-01 15:30:42'));
        
       
        
        // $last_15_days = Storage::where('date','>=',Carbon::now()->subdays(30))->pluck('level');

        // $now = date('Y-m-d');

        // $data = DB::table('storages')

        // ->whereDate('date', $now)
        
        // ->get();

        // dd($data);
    }


}
