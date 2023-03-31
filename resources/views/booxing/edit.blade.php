      @extends('layout.template')
      <!-- START FORM -->
      @section('konten')
      <p>Form</p>
      <form action='{{ route('booxing.store') }}' method='post'>
        @csrf
        <div class="my-3 p-3 bg-body rounded shadow-sm">
            <div class="mb-3 row">
                <label for="id" class="col-sm-2 col-form-label">ID</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" name='id' id="id">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name='nama' id="nama">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name='alamat' id="alamat">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="no_hp" class="col-sm-2 col-form-label">No Telepon</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" name='no_hp' id="no_hp">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="paket" class="col-sm-2 col-form-label">Paket</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name='paket' id="paket">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="tgl_booxing" class="col-sm-2 col-form-label">Tanggal Booxing</label>
                <div class="col-sm-10">
                    <input type="date" class="form-control" name='tgl_booxing' id="tgl_booxing">
                </div>
                <div class="col-sm-10"><button type="submit" class="btn btn-primary" name="submit">SIMPAN</button></div>
            </div>
        </div>
     </form>
<!-- AKHIR FORM -->

      @endsection


