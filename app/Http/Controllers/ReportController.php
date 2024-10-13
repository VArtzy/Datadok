<?php

namespace App\Http\Controllers;

use App\Models\Dataset;
use App\Models\Report;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;
use Inertia\Inertia;

class ReportController extends Controller
{
    public function show(Report $report)
    {
        if(auth()->user()->currentTeam->id !== $report->team_id) {
            abort(403, 'Unauthorized');
        }

        $dataset = Dataset::find($report->dataset_id);
        $file = Storage::get($dataset->path);

        $response = Http::attach('file', $file, $dataset->filename)->post(env('FASTAPI_URL') . '/sum-stats')->json();

        return Inertia::render('Laporan/Show', ['report' => $report, 'data' => $response]);
    }

    public function dashboard()
    {
        return Inertia::render('Dashboard', [
            'datasets' => Dataset::where('team_id', auth()->user()->currentTeam->id)->with('user:id,name')->get(),
            'reports' => Report::where('team_id', auth()->user()->currentTeam->id)->get()
        ]);
    }

    public function index()
    {
        return Inertia::render('Laporan', [
            'datasets' => Dataset::where('team_id', auth()->user()->currentTeam->id)->with('user:id,name')->get(),
            'reports' => Report::where('team_id', auth()->user()->currentTeam->id)->get()
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
