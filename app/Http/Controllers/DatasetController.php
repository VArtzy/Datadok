<?php

namespace App\Http\Controllers;

use App\Models\Dataset;
use Illuminate\Http\Request;
use Inertia\Inertia;

class DatasetController extends Controller
{
    public function index()
    {
        return Inertia::render('Sumberdata', [
            'datasets' => Dataset::where('team_id', auth()->user()->currentTeam->id)->with('user:id,name')->get()
        ]);
    }

    public function upload(Request $request)
    {
        Dataset::create([
            'filename' => $request->file('fakta')->getClientOriginalName(),
            'path' => $request->file('fakta')->store('files'),
            'team_id' => auth()->user()->currentTeam->id,
            'user_id' => auth()->id()
        ]);
        return redirect()->route('sumberdata')->banner('Berhasil menambahkan data');
    }
}
