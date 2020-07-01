<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $data = Http::get('https://api.kawalcorona.com/indonesia')->json();
        $provinsi = Http::get('https://api.kawalcorona.com/indonesia/provinsi')->json();
        //dd($data);
        return view ('welcome', compact('data','provinsi'));
    }

    public function kasus()
    {

        $dunia = Http::get('https://api.kawalcorona.com/')->json();
        $sembuh = Http::get('https://api.kawalcorona.com/sembuh')->json();
        $meninggal = Http::get('https://api.kawalcorona.com/meninggal')->json();
        $positif = Http::get('https://api.kawalcorona.com/positif')->json();
        //dd($data);
        return view ('dunia', compact('dunia','sembuh','meninggal','positif'));
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
