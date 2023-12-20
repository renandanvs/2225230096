<?php

namespace App\Http\Controllers;

use App\Models\renanda;
use Illuminate\Http\Request;

use function PHPUnit\Framework\returnSelf;

class renan extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        $data=renanda::all();
        return view('UAS/Index')->with('data',$data);




    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('UAS/Input');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'Nama'=>'required',
            'NIM'=>'required|numeric',
            'Kelas'=>'required',
            'Angkatan'=>'required|numeric'
        ]);
        $data=[
            'Nama'=> $request->input('Nama'),
            'NIM'=> $request->input('NIM'),
            'Kelas'=> $request->input('Kelas'),
            'Angkatan'=> $request->input('Angkatan'),
        ];
        renanda::create($data);
        return redirect('/UAS');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data=renanda::where('Nama', $id)->first();
        return view ('UAS/Edit')->with('data',$data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'Nama'=>'required',
            'NIM'=>'required|numeric',
            'Kelas'=>'required',
            'Angkatan'=>'required|numeric'
        ]);
        $data=[
            'Nama'=> $request->input('Nama'),
            'NIM'=> $request->input('NIM'),
            'Kelas'=> $request->input('Kelas'),
            'Angkatan'=> $request->input('Angkatan'),
        ];
        renanda::create('Nama', $id)->update($data);
        return redirect('/UAS');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data=renanda::where('Nama', $id)->delete();
        return redirect('/UAS')->with('succes', 'Data Dihapus!');
    }
}
