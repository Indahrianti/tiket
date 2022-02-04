<?php

namespace App\Http\Controllers;

use App\Models\Kereta;
use App\Models\Penumpang;
use Illuminate\Http\Request;

class PenumpangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $penumpang = Penumpang::all();
         return view('penumpang.index', compact('penumpang'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kereta = Kereta::all();
        return view('penumpang.create', compact('kereta'));    
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $penumpang = new penumpang;
        $penumpang->nama_penumpang = $request->nama_penumpang;
        $penumpang->kereta_id = $request->kereta_id;
        
        $penumpang->kelas = $request->kelas;
        $penumpang->tgl = $request->tgl;
        $penumpang->jml_penumpang = $request->jml_penumpang;

        $penumpang->save();
        return redirect()->route('penumpang.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Penumpang  $penumpang
     * @return \Illuminate\Http\Response
     */
    public function show( $id)
    {
        $penumpang = Penumpang::findOrFail($id);
        return view('penumpang.show', compact('penumpang'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Penumpang  $penumpang
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       /* $penumpang = Penumpang::findOrFail($id);
        $kereta = Kereta::all();
        return view('penumpang.edit', compact('penumpang','kereta')); */
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Penumpang  $penumpang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        $penumpang = Penumpang::findOrFail($id);
        $penumpang->nama_penumpang = $request->nama_penumpang;
        $penumpang->kereta_id = $request->kereta_id;
       
        $penumpang->kelas = $request->kelas;
        $penumpang->tgl = $request->tgl;
        $penumpang->jml_penumpang = $request->jml_penumpang;

        $penumpang->save();

        return redirect()->route('penumpang.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Penumpang  $penumpang
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        $penumpang = Penumpang::findOrFail($id);
        $penumpang->delete();
        return redirect()->route('penumpang.index');
    }

    public function pemesanan($id)
    {
        $penumpang = Penumpang::findOrFail($id);
       
        return view('transaksi.create', compact('penumpang'));
    }
}
