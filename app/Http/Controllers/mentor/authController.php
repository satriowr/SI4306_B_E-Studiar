<?php

namespace App\Http\Controllers\mentor;

use App\Http\Controllers\Controller;
use App\Models\BidangAjar;
use App\Models\CalonMentor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

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

    public function pilih_bidang(Request $request)
    {
        $ID = generateMentorID();
        $calonMentor = array("id" => $ID, "nama" => $request->nama, "email" => $request->email, "tgl_lahir" => $request->tgl_lahir, "tahun_ngajar" => $request->tahun_ngajar, "deskripsi" => $request->deskripsi);
        Session::put('calonMentorTemporary', $calonMentor);
        return view('mentor/auth/pilih_bidang');
    }

    public function store_registrasi(Request $request)
    {
        $imgName = $request->gambar;
        if ($request->gambar) {
            $imgName = time() . '-' . $request->gambar->getClientOriginalName();
        }


        $data_calon_mentor = Session::get('calonMentorTemporary');
        DB::transaction(function () use ($request, $data_calon_mentor, $imgName) { // Start the transaction

            $calonMentor = new CalonMentor();
            $calonMentor->id = $data_calon_mentor['id'];
            $calonMentor->nama = $data_calon_mentor['nama'];
            $calonMentor->email = $data_calon_mentor['email'];
            $calonMentor->tgl_lahir = $data_calon_mentor['tgl_lahir'];
            $calonMentor->tahun_ngajar = $data_calon_mentor['tahun_ngajar'];
            $calonMentor->deskripsi = $data_calon_mentor['deskripsi'];
            $calonMentor->save();

            $bidangAjar = new BidangAjar();
            $bidangAjar->id_mentor = $data_calon_mentor['id'];
            $bidangAjar->bidang = $request->bidang;
            $bidangAjar->nama_kelas = $request->nama_kelas;
            $bidangAjar->tarif = $request->tarif;
            $bidangAjar->deskripsi = $request->deskripsi;
            $bidangAjar->gambar = $imgName;
            $bidangAjar->save();
        }); // End transaction

        $request->gambar->move(public_path('img/kelas/' . $data_calon_mentor['id']), $imgName);

        Session::forget('calonMentorTemporary');
        return view('index');
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