<?php

namespace App\Http\Controllers;

use App\Models\Data;
use Illuminate\Http\Request;

class DataController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $sv = Data::latest()->paginate();
        return view('e-modul.index',compact('sv'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //

        return view('e-modul.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request,)
    {
        //
        
        $sv = Data::create($request->all());

        if ($request->hasFile('image')){
            $request->file('image')->move('images/', $request->file('image')->getClientOriginalName());
            $sv->image = $request->file('image')->getClientOriginalName();
            $sv->save();
        }

        if ($request->hasFile('doc')){
            $request->file('doc')->move('dokumen/', $request->file('doc')->getClientOriginalName());
            $sv->doc = $request->file('doc')->getClientOriginalName();
            $sv->save();
        }

        return redirect('e-modul');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $sv = Data::findOrFail($id);

        return view('e-modul.edit',compact('sv'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //

        $Data = Data::findOrFail($id);    
        $Data->update($request->all());


        if ($request->hasFile('image')){
            $request->file('image')->move('images/', $request->file('image')->getClientOriginalName());
            $Data->image = $request->file('image')->getClientOriginalName();
            $Data->save();
        }

        if ($request->hasFile('doc')){
            $request->file('doc')->move('dokumen/', $request->file('doc')->getClientOriginalName());
            $Data->doc = $request->file('doc')->getClientOriginalName();
            $Data->save();
        }
        
        $Data->save();
        return redirect()->route('e-modul.index');
    
        
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $hapus = Data::findOrFail($id);
        $hapus->delete();
        return redirect('e-modul');

    }
}
