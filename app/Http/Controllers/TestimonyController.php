<?php

namespace App\Http\Controllers;

use App\Testimony;
use Illuminate\Http\Request;

class TestimonyController extends Controller
{
    public function index(Testimony $testimony)
    {
        $testimonies = $testimony->all();
        return view('dashboard.testimony', compact('testimonies'));
    }

    public function store(Request $request, Testimony $testimony)
    {
        $store = $testimony->firstOrCreate(['username' => $request->username, 'testimony' => $request->testimony], $request->all());
        return redirect('/dashboard/testimony')->with('msg', 'successfully added')->withInput();
    }
}
