<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Massage;

class MassageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
         $massagees = Massage::latest('created_at')->get();
        return view('pages.admin.massagees.index', compact('massagees'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.publik.home');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            // validas data
            $data = $request->validate([
                'name'=> 'required|string|max:255',
                'email'=> 'required|string|email|max:100|unique:massages,email',
                'pesan'=> 'nullable|string',
            ]);
            // simpan ke database
            Massage::create($data);
             return to_route('home')->with('success', 'Pesan berhasi terkirim');
        } catch (\Throwable $th) {
            return back()->with('error', $th->getMessage());
        }
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
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $data = Massage::findOrFail($id);
            $data->delete();       
            return to_route('admin.massagees.index')->with('success', 'berhasil dihapus') ;
        } catch (\Throwable $th) {
            return back()->with('error', $th->getMessage()) ;
        }
    }
}
