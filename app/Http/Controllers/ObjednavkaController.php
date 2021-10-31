<?php

namespace App\Http\Controllers;

use App\Models\OckovacieMiesto;
use Illuminate\Http\Request;
use App\Models\Objednavka;
use Illuminate\Support\Str;


class ObjednavkaController extends Controller
{


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        return view('objednavky.index',['objednavky'=>Objednavka::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function create()
    {
        return view('objednavky.create',['nazvy'=>OckovacieMiesto::query()->get('nazov'),'cislo'=>Objednavka::all('poradoveCislo')->count()+1]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Routing\Redirector
     */
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

        $validated['slug'] = Str::slug($validated['rodneCislo'], '-');

        Objednavka::create($validated);

        return view ('objednavky.uspech');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function show(Objednavka $objednavka)
    {
        return view('objednavky.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('objednavky.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Objednavka $objednavka)
    {
        $objednavka->delete();
        return redirect(route('miesta.index'));
    }

}
