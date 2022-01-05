<?php

namespace App\Http\Controllers;

use App\Models\OckovacieMiesto;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class MiestaController extends Controller
{
    public function index()
    {
        return view('miesta.index', ['miesta'=>OckovacieMiesto::all()]);
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

        $validated['slug'] = Str::slug($validated['nazov']);

        OckovacieMiesto::create($validated);

        return redirect('miesta');
    }

    public function show(OckovacieMiesto $miesto)
    {
        return view('miesta.show',compact('miesto'));
    }

    public function edit($miesto)
    {
        $miesto=OckovacieMiesto::find($miesto);
        return view('miesta.edit',compact('miesto'));
    }


    public function update(Request $request, $miesto)
    {
        $miesto=OckovacieMiesto::find($miesto);
        $validated = $request->validate([
            'nazov' => 'required|string|max:255',
            'adresa' => 'required|string|max:255',
            'popis' => 'required|string|max:255',
            'dennaKapacita' => 'required|int'
        ]);

        $validated['slug'] = Str::slug($validated['nazov']);

        $miesto->update($validated);

        return redirect(route('miesta.index'));
    }

    public function destroy($id)
    {
        if (OckovacieMiesto::destroy($id)) {
            return redirect('miesta');
        }
    }



}
