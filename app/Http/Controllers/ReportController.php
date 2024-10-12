<?php

namespace App\Http\Controllers;

use App\Models\Dataset;
use App\Models\Report;
use Illuminate\Http\Request;
use Inertia\Inertia;

class ReportController extends Controller
{
    public function index()
    {
        return Inertia::render('Laporan', [
            'datasets' => Dataset::where('team_id', auth()->user()->currentTeam->id)->with('user:id,name')->get()
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => ['required', 'max:255'],
            'description' => ['required'],
            'dataset_id' => ['required', 'exists:datasets,id']
        ]);

        Report::create([
            'title' => $request->title,
            'description' => $request->description,
            'dataset_id' => $request->dataset_id,
            'team_id' => auth()->user()->currentTeam->id,
            'user_id' => auth()->id()
        ]);

        return redirect()->route('laporan')->banner('Laporan berhasil ditambahkan.');
    }
}
