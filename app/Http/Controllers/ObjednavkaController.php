<?php

namespace App\Http\Controllers;

use App\Models\OckovacieMiesto;
use Illuminate\Http\Request;
use App\Models\Objednavka;
use Illuminate\Support\Str;

class ObjednavkaController extends Controller
{

    public function index()
    {
        $objednavky = Objednavka::orderBy('miesto')->orderBy('poradoveCislo')->get();
        return view('objednavky.index', ['objednavky' => $objednavky]);
    }

    public function create()
    {
        $nazvy = [];
        foreach (OckovacieMiesto::all() as $miesto) {
            if (Objednavka::all()->where('miesto', '=', $miesto->nazov)->count() < $miesto->dennaKapacita) {
                array_push($nazvy, $miesto->nazov);
            }
        }
        return view('objednavky.create', ['nazvy' => $nazvy]);
    }

    public function store(Request $request)
    {
        $poradoveCislo = Objednavka::query()->where('miesto', '=', $request['miesto'])->max('poradoveCislo') + 1;

        for ($x = 1; $x < Objednavka::query()->where('miesto', '=', $request['miesto'])->max('poradoveCislo'); $x++) {
            if (!Objednavka::where('miesto', '=', $request['miesto'])->where('poradoveCislo', '=', $x)->exists()) {
                $poradoveCislo = $x;
                break;
            }
        }

        $request->merge([
            'poradoveCislo' => $poradoveCislo,
        ]);

        $validated = $request->validate([
            'miesto' => 'required|string|max:255',
            'meno' => 'required|string|max:255',
            'priezvisko' => 'required|string|max:255',
            'telCislo' => 'required|string|min:10|max:10',
            'rodneCislo' => 'required|string|min:11|max:11',
            'poradoveCislo' => 'required|int'

        ]);

        Objednavka::create($validated);
        return view('objednavky.uspech');

    }


    public function show(Objednavka $objednavka)
    {
        return view('objednavky.show', compact('objednavka'));
    }


    public function edit($objednavka)
    {
        $objednavka = Objednavka::find($objednavka);
        $nazvy = [];
        foreach (OckovacieMiesto::all() as $miesto) {
            if (Objednavka::all()->where('miesto', '=', $miesto->nazov)->count() < $miesto->dennaKapacita) {
                array_push($nazvy, $miesto->nazov);
            }
        }
        return view('objednavky.edit', compact('objednavka', 'nazvy'));
    }


    public function update(Request $request, $objednavka)
    {
        $objednavka = Objednavka::find($objednavka);
        $validated = $request->validate([
            'miesto' => 'required|string|max:255',
            'meno' => 'required|string|max:255',
            'priezvisko' => 'required|string|max:255',
            'telCislo' => 'required|string|min:10|max:10',
            'rodneCislo' => 'required|string|min:11|max:11',
            'poradoveCislo' => 'required|int|unique:objednavkas,poradoveCislo,' . $objednavka->id

        ]);

        $objednavka->update($validated);

        return redirect(route('objednavky.index'));
    }

    public function destroy($id)
    {
        if (Objednavka::destroy($id)) {
            return response('success', 200);
        }
    }

}
