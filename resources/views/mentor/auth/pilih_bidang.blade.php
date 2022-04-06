@extends('layout')
@section('content')
<section class="min-vh-100 h-custom primary-bg">
  <div class="container py-5 h-100 d-flex justify-content-center align-items-center">
    <div class="col-10 card">
      <div class="row">
        <div class="col-5 p-0">
          <img src="/img/study.jpg" width="100%" height="100%" alt="" srcset="">
        </div>
        <div class="col-7 card p-5">
          <div class="mb-4 text-center">
            <h1>Input Jenis Bidang</h2>
          </div>
          <form role="form" action="/mentor/store_registrasi" enctype="multipart/form-data" method="POST">
            @csrf
            <div class="mb-3">
              <label class="form-label">Jenis Bidang</label>
              <input type="text" name="bidang" placeholder="Masukan jenis bidang contoh: matematika, agama, sejarah"
                class="form-control" required>
            </div>
            <div class="mb-3">
              <label class="form-label">Tarif ajar</label>
              <div class="input-group">
                <div class="input-group-text">Rp.</div>
                <input type="number" placeholder="Harga tarif mengajar anda" name="tarif" class="form-control" required>
              </div>
            </div>
            <div class="mb-3">
              <label class="form-label">Nama Kelas</label>
              <input type="text" name="nama_kelas" placeholder="Masukan nama kelas yang akan anda ajar"
                class="form-control" required>
            </div>
            <div class="mb-3">
              <label class="form-label">Gambar</label>
              <input type="file" name="gambar" class="form-control" required>
            </div>

            <div class="mb-3">
              <label class="form-label">Deksripsi</label>
              <textarea name="deskripsi" class="form-control" rows="5" placeholder="Deskripsikan kelas anda"
                required></textarea>
            </div>

            <button type="submit" class="btn col-12 btn-primary">Daftar</button>
            <a href="#" class="btn mt-2 col-12 secondary-bg">Batal</a>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection