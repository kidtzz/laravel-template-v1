@extends('layouts/contentNavbarLayout')

@section('title', 'Input Rekening')

@section('content')

<h4 class="fw-bold py-3 mb-4">
  <span class="text-muted fw-light">Input /</span> Rekening
</h4>

<div class="row">
  <!-- Form controls -->
  <h5 class="card-header">Input Rekening</h5>
  <div class="col-md-6">
    <div class="card mb-4">
      <h5 class="card-header">Virtual Account</h5>
      <div class="card-body">
        <div class="mb-3">
          <label for="exampleFormControlSelect1" class="form-label">Bank</label>
          <select class="form-select" id="exampleFormControlSelect1" aria-label="Default select example">
            <option selected>- Select -</option>
            <option value="1">BCA</option>
            <option value="2">MANDIRI</option>
            <option value="3">BNI</option>
            <option value="3">BRI</option>
          </select>
        </div>
        <div class="mb-3">
          <label for="namarekening" class="form-label">Nama Pemilik Rekening </label>
          <input type="text" class="form-control" id="namarekening" />
        </div>
        <div class="mb-3">
          <label for="nomorrekening" class="form-label">Nomor Rekening </label>
          <input type="number" class="form-control" id="nomorrekening" />
        </div>
        <div class="d-grid ">
          <button type="button" class="btn btn-primary">Buat Virtual Acount</button>
        </div>

      </div>
    </div>
  </div>

  <div class="col-md-6">
    <div class="card mb-4">
      <h5 class="card-header fw-semibold">History Transaksi</h5>

      <div class="card-body">
        <p class="mb-0">We'll never share your details with anyone else.</p>
        <div class="mb-3">
          <label for="namarekening" class="form-label">Nama Pemilik Rekening </label>
          <input type="text" class="form-control" id="namarekening" />
        </div>
        <div class="mb-3">
          <label for="nomorrekening" class="form-label">Nomor Rekening </label>
          <input type="number" class="form-control" id="nomorrekening" />
        </div>
        <div class="d-grid ">
          <button type="button" class="btn btn-primary">Saya Telah Melakukan Pembayaran</button>
        </div>

      </div>
    </div>
  </div>

  <h5 class="card-header">Cara Pembayaran</h5>
  <div class="col-md mb-4 mb-md-0">
    <div class="accordion mt-3" id="accordionExample">
      <div class="card accordion-item active">
        <h2 class="accordion-header" id="headingOne">
          <button type="button" class="accordion-button" data-bs-toggle="collapse" data-bs-target="#accordionOne" aria-expanded="true" aria-controls="accordionOne">
            ATM BCA
          </button>
        </h2>

        <div id="accordionOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
          <div class="accordion-body">
            <ol>
              <li class="mt-10 mb-10">Masukkan Kartu ATM BCA &amp; PIN</li>
              <li class="mt-10 mb-10">Pilih menu Transaksi Lainnya &gt; Transfer &gt; ke Rekening BCA Virtual Account</li>
              <li class="mt-10 mb-10">Masukkan 5 angka kode perusahaan untuk Tokopedia (80777) dan Nomor HP yang terdaftar di akun Tokopedia Anda (Contoh: 807770821869369)</li>
              <li class="mt-10 mb-10">Di halaman konfirmasi, pastikan detil pembayaran sudah sesuai seperti No VA, Nama, Perus/Produk dan Total Tagihan</li>
              <li class="mt-10 mb-10">Masukkan Jumlah Transfer sesuai dengan Total Tagihan</li>
              <li class="mt-10 mb-10">Ikuti instruksi untuk menyelesaikan transaksi</li>
              <li class="mt-10 mb-10">Simpan struk transaksi sebagai bukti pembayaran</li>
            </ol>
          </div>
        </div>
      </div>
      <div class="card accordion-item">
        <h2 class="accordion-header" id="headingTwo">
          <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#accordionTwo" aria-expanded="false" aria-controls="accordionTwo">
            m-BCA (BCA mobile)
          </button>
        </h2>
        <div id="accordionTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
          <div class="accordion-body">
            <ol>
              <li class="mt-10 mb-10">Lakukan log in pada aplikasi BCA Mobile</li>
              <li class="mt-10 mb-10">Pilih menu m-BCA, kemudian masukkan kode akses m-BCA</li>
              <li class="mt-10 mb-10">Pilih m-Transfer &gt; BCA Virtual Account</li>
              <li class="mt-10 mb-10">Pilih dari Daftar Transfer, atau masukkan 5 angka kode perusahaan untuk Tokopedia (80777) dan Nomor HP yang terdaftar di akun Tokopedia Anda (Contoh: 807770821869369)</li>
              <li class="mt-10 mb-10">Masukkan pin m-BCA</li>
              <li class="mt-10 mb-10">Pembayaran selesai. Simpan notifikasi yang muncul sebagai bukti pembayaran</li>
            </ol>
          </div>
        </div>
      </div>
      <div class="card accordion-item">
        <h2 class="accordion-header" id="headingThree">
          <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#accordionThree" aria-expanded="false" aria-controls="accordionThree">
            Internet Banking BCA
          </button>
        </h2>
        <div id="accordionThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
          <div class="accordion-body">
            <ol>
              <li class="mt-10 mb-10">Login pada alamat Internet Banking BCA (<a href="https://klikbca.com" target="_blank">https://klikbca.com</a>)</li>
              <li class="mt-10 mb-10">Pilih menu Pembayaran Tagihan &gt; Pembayaran &gt; BCA Virtual Account</li>
              <li class="mt-10 mb-10">Pada kolom kode bayar, masukkan 5 angka kode perusahaan untuk Tokopedia (80777) dan Nomor HP yang terdaftar di akun Tokopedia Anda (Contoh: 807770821869369)</li>
              <li class="mt-10 mb-10">Di halaman konfirmasi, pastikan detil pembayaran sudah sesuai seperti Nomor BCA Virtual Account, Nama Pelanggan dan Jumlah Pembayaran</li>
              <li class="mt-10 mb-10">Masukkan <span class="italic">password</span> dan mToken</li>
              <li class="mt-10 mb-10">Cetak/simpan struk pembayaran BCA Virtual Account sebagai bukti pembayaran</li>
            </ol>
          </div>
        </div>
      </div>
    </div>
  </div>

</div>
@endsection