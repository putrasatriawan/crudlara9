<?php

namespace App\Http\Controllers;

use App\Models\Hobi;
use App\Models\Orang;
use Illuminate\Http\Request;

class OrangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orang = Orang::get();
        return view('orang.index')->with([
            'orang' => $orang
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $hobi = Hobi::all();
        return view('orang.create')->with([
            'hobi' => $hobi,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Orang::create([
            'nama'         => $request->nama,
            'tgl_lahir'   => $request->tgl_lahir,
            'jk'   => $request->jk,
            'alamat'   => $request->alamat,
            'hobi'    => json_encode($request->hobi)
        ]);

        return redirect()->route('orang.index');
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
        $orang = Orang::findOrFail($id);

        return view('orang.edit')->with([
            'orang' => $orang
        ]);
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
        $orang = Orang::find($id);
        $orang->update([
            'nama'         => $request->nama,
            'tgl_lahir'   => $request->tgl_lahir,
            'jk'   => $request->jk,
            'alamat'   => $request->alamat,
            'hobi'    => json_encode($request->hobi)
        ]);
        return redirect()->route('orang.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Orang::findOrFail($id);
        $item->delete();

        return redirect()->route('orang.index');
    }
}