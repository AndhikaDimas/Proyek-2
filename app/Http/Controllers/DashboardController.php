<?php

namespace App\Http\Controllers;

use App\Models\PlantWatering;

class DashboardController extends Controller
{
    public function index()
    {
        $plantWaterings = PlantWatering::all(); // Ambil semua jadwal penyiraman
        return view('dashboard.index', compact('plantWaterings'));
    }
}
