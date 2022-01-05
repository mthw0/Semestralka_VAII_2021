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
        $poradoveCislo=Objednavka::max('poradoveCislo')+1;
        for ($x = 1; $x < Objednavka::max('poradoveCislo'); $x++) {
            if (!Objednavka::where('poradoveCislo', '=', $x)->exists())
            {
                $poradoveCislo=$x;
            }
        }
        return view('objednavky.create',['nazvy'=>OckovacieMiesto::query()->get('nazov'),'cislo'=>$poradoveCislo]);
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


    public function edit($objednavka)
    {
        $objednavka=Objednavka::find($objednavka);
        $nazvy=OckovacieMiesto::query()->get('nazov');
        return view('objednavky.edit',compact('objednavka','nazvy'));
    }


    public function update(Request $request, $objednavka)
    {
        $objednavka=Objednavka::find($objednavka);
        $validated = $request->validate([
            'miesto' => 'required|string|max:255',
            'meno' => 'required|string|max:255',
            'priezvisko' => 'required|string|max:255',
            'telCislo' => 'required|string|min:10|max:10',
            'rodneCislo' => 'required|string|min:11|max:11',
            'poradoveCislo' => 'required|int|unique:objednavkas,poradoveCislo,'.$objednavka->id

        ]);

        $validated['slug'] = Str::slug($validated['poradoveCislo'], '-');

        $objednavka->update($validated);

        return redirect(route('objednavky.index'));
    }

    /*
    public function destroy($id)
    {
        if (Objednavka::destroy($id)) {
            return redirect('admin/objednavky');
        }

    }
*/
    public function destroy($id){

        if (Objednavka::destroy($id)) {
            return response('success',200);
        }
    }

}
