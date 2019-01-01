<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Hasil_motor;

class Hasil_motorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $hasil_motors = Hasil_motor::orderBy('id', 'DESC')->paginate(5);
        return view('hasil_motor.index', compact('hasil_motors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('hasil_motor.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $this->validate($request, [
            'nama' => 'required',
            'spesifikasi' => 'required'
        ]);

        $hasil_motor = Hasil_motor::create($request->all());

        return redirect()->route('hasil_motor.index')->with('message', 'Artikel berhasil dibuat!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $hasil_motor = Hasil_motor::findOrFail($id);
        return view('hasil_motor.show', compact('hasil_motor'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $hasil_motor = Hasil_motor::findOrFail($id);
        return view('hasil_motor.edit', compact('hasil_motor'));
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
        $this->validate($request, [
            'nama' => 'required',
            'spesifikasi' => 'required'
        ]);

        $hasil_motor = Hasil_motor::findOrFail($id)->update($request->all());

        return redirect()->route('hasil_motor.index')->with('message', 'Hasil_motor berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $hasil_motor = Hasil_motor::findOrFail($id)->delete();
        return redirect()->route('hasil_motor.index')->with('message', 'Artikel berhasil dihapus!');
    }
}
