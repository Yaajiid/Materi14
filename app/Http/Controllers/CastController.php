<?php

namespace App\Http\Controllers;

use App\Models\Cast;
use Illuminate\Http\Request;

class CastController extends Controller
{
    public function index()
    {
        $casts = Cast::all();
        return view('cast.index')->with('casts', $casts);
    }

    public function create()
    {
        return view('cast.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required|string|max:255',
            'umur' => 'required|integer',
            'bio' => 'required|string',
        ]);

        Cast::create($validatedData);

        return redirect('/cast');
    }

    public function show($cast_id)
    {
        $cast = Cast::findOrFail($cast_id);
        return view('cast.show', compact('cast'));
    }

    public function edit($cast_id)
    {
        $cast = Cast::findOrFail($cast_id);
        return view('cast.edit', compact('cast'));
    }

    public function update(Request $request, $cast_id)
    {
        $validatedData = $request->validate([
            'nama' => 'required|string|max:255',
            'umur' => 'required|integer',
            'bio' => 'required|string',
        ]);

        $cast = Cast::findOrFail($cast_id);
        $cast->update($validatedData);

        return redirect('/cast');
    }

    public function destroy($id)
    {
        $cast = Cast::findOrFail($id);
        $cast->delete();
    
        if ($cast) {
            return redirect()->route('cast.index')->with(['success' => 'Data pemain film berhasil dihapus!']);
        } else {
            return redirect()->route('cast.index')->with(['error' => 'Gagal menghapus data pemain film!']);
        }
    }
    
    

}
