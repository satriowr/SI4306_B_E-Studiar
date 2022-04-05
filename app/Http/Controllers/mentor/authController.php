<?php

namespace App\Http\Controllers\mentor;

use App\Http\Controllers\Controller;
use App\Models\CalonMentor;
use Illuminate\Http\Request;

class authController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function registrasi()
    {
        return view('mentor/auth/registrasi');
    }

    public function store_registrasi(Request $request)
    {
        CalonMentor::create([
            'nama' => $request->nama,
            'email' => $request->email,
            'tgl_lahir' => $request->tgl_lahir,
            'tahun_ngajar' => $request->tahun_ngajar,
            'deskripsi' => $request->deskripsi,
        ]);
        return view('mentor/auth/registrasi');
    }

    public function index()
    {
        //
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