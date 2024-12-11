<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PlantWatering;

class PlantWateringController extends Controller
{
    public function index()
    {
        $plantWaterings = PlantWatering::all();
        return view('plant_waterings.index', compact('plantWaterings'));
    }

    public function create()
    {
        return view('plant_waterings.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'time' => 'required',
            'status' => 'required',
        ]);

        PlantWatering::create($request->all());
        return redirect()->route('plant_waterings.index')->with('success', 'Jadwal berhasil ditambahkan');
    }

    public function edit($id)
    {
        $plantWatering = PlantWatering::findOrFail($id);
        return view('plant_waterings.edit', compact('plantWatering'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'time' => 'required',
            'status' => 'required',
        ]);

        $plantWatering = PlantWatering::findOrFail($id);
        $plantWatering->update($request->all());
        return redirect()->route('plant_waterings.index')->with('success', 'Jadwal berhasil diupdate');
    }

    public function destroy($id)
    {
        $plantWatering = PlantWatering::findOrFail($id);
        $plantWatering->delete();
        return redirect()->route('plant_waterings.index')->with('success', 'Jadwal berhasil dihapus');
    }
}
