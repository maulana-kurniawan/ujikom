<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;

class DashboardController extends Controller
{
    public function index()
    {
        if (!Session::has('logged')) {
            return redirect()->back()->withSuccess("Anda belum login!");
        }

        return view('dashboard');
    }
}
