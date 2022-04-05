@extends('layout')
@section('content')
<section class="min-vh-100 h-custom" style="background-color: #8fc4b7;">
  <div class="container py-5 h-100 d-flex justify-content-center align-items-center">
    <div class="col-7 card p-5">
      <div class="mb-3 text-center">
        <h2>Registrasi Calon Mentor</h2>
      </div>
      <form role="form" action="/mentor/registrasi/pilih_bidang" method="POST">
        @csrf
        <div class="mb-3">
          <label class="form-label">Nama Lengkap</label>
          <input type="text" name="nama" placeholder="Masukan nama lengkap" class="form-control">
        </div>
        <div class="mb-3">
          <label class="form-label">Email address</label>
          <input type="email" name="email" placeholder="Masukan alamat email" class="form-control">
        </div>
        <div class="mb-3">
          <label class="form-label">Tanggal Lahir</label>
          <input type="date" name="tgl_lahir" class="form-control">
        </div>
        <div class="mb-3">
          <label class="form-label">Pengalaman menjadi tenaga ajar</label>
          <div class="input-group">
            <input type="number" placeholder="Berapa lama sudah menjadi tenaga ajar" name="tahun_ngajar"
              class="form-control">
            <div class="input-group-text">tahun</div>
          </div>
        </div>
        <div class="mb-3">
          <label class="form-label">Deksripsi</label>
          <textarea name="deskripsi" class="form-control" rows="5"
            placeholder="Deskripsikan diri anda sebagai calon mentor"></textarea>
        </div>

        <button type="submit" class="btn col-12 btn-primary">Selanjutnya</button>
      </form>
    </div>
  </div>
</section>
@endsection