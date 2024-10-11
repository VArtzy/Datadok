<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DatasetController extends Controller
{
    public function upload(Request $request)
    {
        $request->file('fakta')->store('files');
        return redirect()->route('sumberdata')->banner('Berhasil menambahkan data');
    }
}
