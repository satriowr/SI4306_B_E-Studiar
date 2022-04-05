@extends('layout')
@section('content')
<section class="min-vh-100 h-custom" style="background-color: #8fc4b7;">
  <div class="container py-5 h-100 d-flex justify-content-center align-items-center">
    <div class="col-7 card p-5">
      <div class="mb-3 text-center">
        <h2>Pilih jenis bidang yang akan diajar</h2>
      </div>
      <form role="form" action="/mentor/store_registrasi" method="POST">
        @csrf
        <div class="mb-3">
          <label class="form-label">Jenis Bidang</label>
          <input type="text" name="bidang" placeholder="Masukan jenis bidang contoh: matematika, agama, sejarah"
            class="form-control">
        </div>
        <div class="mb-3">
          <label class="form-label">Tarif ajar</label>
          <div class="input-group">
            <div class="input-group-text">Rp.</div>
            <input type="number" placeholder="Harga tarif mengajar anda" name="tarif" class="form-control">
          </div>
        </div>
        <div class="mb-3">
          <label class="form-label">Nama Kelas</label>
          <input type="text" name="nama_kelas" placeholder="Masukan nama kelas yang akan anda ajar"
            class="form-control">
        </div>

        <div class="mb-3">
          <label class="form-label">Deksripsi</label>
          <textarea name="deskripsi" class="form-control" rows="5" placeholder="Deskripsikan kelas anda"></textarea>
        </div>

        <button type="submit" class="btn col-12 btn-primary">Daftar</button>
        <a href="#" class="btn mt-2 col-12 btn-danger">Batal</a>
      </form>
    </div>
  </div>
</section>
@endsection