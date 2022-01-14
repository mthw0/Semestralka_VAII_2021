<?php

namespace App\Http\Controllers;

use App\Models\OckovacieMiesto;
use DateInterval;
use DateTime;
use Illuminate\Http\Request;
use App\Models\Objednavka;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;

class ObjednavkaController extends Controller
{

    public function index()
    {
        $objednavky = Objednavka::orderBy('miesto')->orderBy('poradoveCislo')->paginate(20);
        return view('objednavky.index', ['objednavky' => $objednavky]);
    }

    public function create()
    {
        $nazvy = [];
        foreach (OckovacieMiesto::all() as $miesto) {
            $nazvy[] = $miesto->nazov;

        }
        return view('objednavky.create', ['nazvy' => $nazvy]);
    }

    public function store(Request $request)
    {
        $poradoveCislo = Objednavka::query()->where('miesto', '=', $request['miesto'])->max('poradoveCislo') + 1;

        for ($x = 0; $x < Objednavka::query()->where('miesto', '=', $request['miesto'])->max('poradoveCislo'); $x++) {
            if (!Objednavka::where('miesto', '=', $request['miesto'])->where('poradoveCislo', '=', $x)->exists()) {
                $poradoveCislo = $x;
                break;
            }
        }

        $dennaKapcita = OckovacieMiesto::where('nazov', '=', $request->miesto)->pluck('dennaKapacita');
        $request->merge([
            'poradoveCislo' => $poradoveCislo,
            'den' => intdiv($poradoveCislo, $dennaKapcita[0])
        ]);

        $validated = $request->validate([
            'miesto' => 'required|string|max:255',
            'meno' => 'required|string|max:255',
            'priezvisko' => 'required|string|max:255',
            'telCislo' => 'required|string|min:10|max:10',
            'rodneCislo' => 'required|string|min:11|max:11',
            'den' => 'required|int',
            'poradoveCislo' => 'required|int'

        ]);

        Objednavka::create($validated);

        $den = DB::table('objednavkas')->select('den')->where('rodneCislo', '=', $request->rodneCislo)->get();
        $miesto = DB::table('objednavkas')->select('miesto')->where('rodneCislo', '=', $request->rodneCislo)->pluck('miesto');
        $miesto = $miesto[0];
        $dennaKapcita = OckovacieMiesto::where('nazov', $miesto)->pluck('dennaKapacita');
        $dennaKapcita = $dennaKapcita[0];
        $minutes_to_add = 10 * ($poradoveCislo % $dennaKapcita);
        $time = new DateTime('2022-03-01 07:00');
        $time->add(new DateInterval('PT' . $minutes_to_add . 'M'));
        $time->add(new DateInterval('P' . $den[0]->den . 'D'));
        return view('objednavky.uspech', ['datum' => $time, 'miesto' => $miesto]);
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
            $nazvy[] = $miesto->nazov;
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
            'poradoveCislo' => ['required', 'int', Rule::unique('objednavkas')->where(function ($query) use ($request) {
                return $query->where('miesto', $request->miesto);
            })]

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
