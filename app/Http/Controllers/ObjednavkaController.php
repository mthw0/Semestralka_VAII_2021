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
        return view('objednavky.index',['objednavky'=>Objednavka::all()]);
    }

    public function create()
    {
        return view('objednavky.create',['nazvy'=>OckovacieMiesto::query()->get('nazov'),'cislo'=>Objednavka::all('poradoveCislo')->count()+1]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'miesto' => 'required|string|max:255',
            'meno' => 'required|string|max:255',
            'priezvisko' => 'required|string|max:255',
            'telCislo' => 'required|string|min:10|max:10',
            'rodneCislo' => 'required|string|min:11|max:11',
            'poradoveCislo' => 'required|int|unique:objednavkas'

        ]);

        $validated['slug'] = Str::slug($validated['poradoveCislo'], '-');

        Objednavka::create($validated);

        return view ('objednavky.uspech');
    }


    public function show(Objednavka $objednavka)
    {
        return view('objednavky.show',compact('objednavka'));
    }


    public function edit(Objednavka $objednavka)
    {
        return view('objednavky.edit',compact('objednavka'));
    }


    public function update(Request $request,Objednavka $objednavka)
    {
        $validated = $request->validate([
            'miesto' => 'required|string|max:255',
            'meno' => 'required|string|max:255',
            'priezvisko' => 'required|string|max:255',
            'telCislo' => 'required|string|min:10|max:10',
            'rodneCislo' => 'required|string|min:11|max:11',
            'poradoveCislo' => 'required|int|unique:objednavkas'

        ]);

        $validated['slug'] = Str::slug($validated['rodneCislo'], '-');

        $objednavka->update($validated);

        return redirect(route('objednavky.index'));
    }

    public function destroy($id)
    {
        if (Objednavka::destroy($id)) {
            return redirect('objednavky');
        }

    }

}
