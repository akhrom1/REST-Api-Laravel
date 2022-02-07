<?php

namespace App\Http\Controllers;

use App\Models\Nama;
use Illuminate\Http\Request;

class NamaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // return Nama::all();
        $namas = Nama::all();
        return view('api_view', compact('namas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('tambah');
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
        $nama = new Nama;
        $nama->first_name = $request->first_name;
        $nama->last_name = $request->last_name;
        
        $nama->save();

        // return response()->json([
        //     'first_name' => $nama->first_name,
        //     'last_name'  => $nama->last_name,
        //     'result'     =>'create data suksek'
        // ]);
         return redirect('/namas');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Nama  $nama
     * @return \Illuminate\Http\Response
     */
    public function show(Nama $nama)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Nama  $nama
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $nama = Nama::find($id);
        return view('edit', compact('nama'));   

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Nama  $nama
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $first_name = $request->first_name;
        $last_name = $request->last_name;

        $nama = Nama::find($id);
        $nama->first_name = $first_name;
        $nama->last_name = $last_name;
        $nama->save();

        return redirect('/namas');

        // return response()->json([
        //     'first_name'    =>$nama->first_name,
        //     'last_name'     =>$nama->last_name,
        //     'result'     =>'update data sukses'

        // ]);


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Nama  $nama
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $nama = Nama::find($id);
        $nama->delete();

        // return 'data delete';
        return redirect('/namas');

    }
}
