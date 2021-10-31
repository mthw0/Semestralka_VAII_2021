<?php

namespace App\Http\Controllers;

use App\Models\Objednavka;
use App\Models\OckovacieMiesto;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class MiestaController extends Controller
{
    public function index()
    {
        return view('miesta.index', ['miesta' => OckovacieMiesto::all()]);
    }

    public function create()
    {
        return view('miesta.create');

    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nazov' => 'required|string|unique:ockovacie_miestos|max:255',
            'adresa' => 'required|string|max:255',
            'popis' => 'required|string|max:255',
            'dennaKapacita' => 'required|int'
        ]);

        $validated['slug'] = Str::slug($validated['nazov'], '-');

        $miesto = OckovacieMiesto::create($validated);

        return view('miesta.index');

    }

    public function show(OckovacieMiesto $miesto)
    {
        return view('miesta.show');

    }

    public function edit(OckovacieMiesto $miesto)
    {
        return view('miesta.edit');
    }


    public function update(Request $request, OckovacieMiesto $miesto)
    {
    }

    public function destroy(OckovacieMiesto $miesto)
    {
        $miesto->delete();
        return redirect(route('miesta.index'));
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

}
