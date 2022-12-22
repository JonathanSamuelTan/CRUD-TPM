<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Katalog_Obat;

class ObatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $obat = Katalog_Obat::all();
        return view('welcome', compact('obat'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
        return view('add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required | min:3',
            'pbf' => 'required',
            'stok' => 'required | numeric | min:1',
            'harga' => 'required | numeric | min:1',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);
        $extension = $request->file('image')->getClientOriginalExtension();
        $filename = $request->nama . '.' . $extension;
        $request->file('image')->storeAs('/public/Obat', $filename);
        Katalog_Obat::create([
            'nama' => $request->nama,
            'pbf' => $request->pbf,
            'stok' => $request->stok,
            'harga' => $request->harga,
            'image' => $filename
        ]);
        return redirect()->route('welcome');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $item = Katalog_Obat::findOrFail($id);
        return view('productDetail', compact('item'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = Katalog_Obat::findOrFail($id);
        return view("UpdateObat", compact('item'));

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
        $validated = $request->validate([
            'nama' => 'required | min:3',
            'pbf' => 'required',
            'stok' => 'required | numeric | min:1',
            'harga' => 'required | numeric | min:1',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);
        $extension = $request->file('image')->getClientOriginalExtension();
        $filename = $request->nama . '.' . $extension;
        $request->file('image')->storeAs('/public/Obat', $filename);
        $item = Katalog_Obat::findOrFail($id)->update([
            'nama' => $request->nama,
            'pbf' => $request->pbf,
            'stok' => $request->stok,
            'harga' => $request->harga,
            'image' => $filename
        ]);
        return redirect()->route('welcome');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Katalog_Obat::destroy($id);
        return redirect()->route('welcome');
    }


    
}
