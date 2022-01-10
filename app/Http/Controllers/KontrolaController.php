<?php

namespace App\Http\Controllers;

use App\Models\Objednavka;
use DateInterval;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KontrolaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        return view ('kontrola.index');
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cislo = $request->get('rodneCislo');
        $exists = DB::table('objednavkas')->select('poradoveCislo')->where('rodneCislo','=',$cislo)->count();
        $premenna = DB::table('objednavkas')->select('poradoveCislo')->where('rodneCislo','=',$cislo)->get();
        $den=DB::table('objednavkas')->select('den')->where('rodneCislo','=',$cislo)->get();
        //$den->dd();
        if ($exists>0) {
            $minutes_to_add = 10 * ($premenna[0]->poradoveCislo%50);
            $time = new DateTime('2022-03-01 07:00');
            $time->add(new DateInterval('PT' . $minutes_to_add . 'M'));
            $time->add(new DateInterval('P'.$den[0]->den.'D'));
            return view('kontrola.uspech',['datum'=>$time]);
        }
        else return view('kontrola.neuspech');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
    public function destroy($id)
    {
        //
    }
}
