<x-app-layout>
    <div class="row">
        <div class="col-lg-8">

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Tambah Data Layanan</h5>

                    <!-- General Form Elements -->
                    <form action="{{ route('Layanan.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-3">
                            <label for="inputText" class="col-sm-3 col-form-label">Nama Layanan</label>
                            <div class="col-sm-9">
                                <input type="text" name="nama_layanan" class="form-control" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputText" class="col-sm-3 col-form-label">Urut</label>
                            <div class="col-sm-9">
                                <input type="text" name="urut" value="" class="form-control" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputText" class="col-sm-3 col-form-label">Lokasi</label>
                            <div class="col-sm-9">
                                <input type="text" name="lokasi" class="form-control" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputNumber" class="col-sm-3 col-form-label">Logo</label>
                            <div class="col-sm-9">
                                <input name="logo" class="form-control" type="file" id="formFile" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputNumber" class="col-sm-3 col-form-label">Foto</label>
                            <div class="col-sm-9">
                                <input name="foto" class="form-control" type="file" id="formFile">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputPassword" class="col-sm-3 col-form-label">Deskripsi</label>
                            <div class="col-sm-9">
                                <textarea name="deskripsi" class="form-control" style="height: 100px"></textarea>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputPassword" class="col-sm-3 col-form-label">Persyaratan</label>
                            <div class="col-sm-9">
                                <textarea name="persyaratan" class="form-control" style="height: 100px"></textarea>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="inputPassword" class="col-sm-3 col-form-label">Jadwal Senin-Kamis</label>
                            <div class="col-sm-9">
                                <input type="text" name="senin_kamis" class="form-control" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputPassword" class="col-sm-3 col-form-label">Jadwal Jumat</label>
                            <div class="col-sm-9">
                                <input type="text" name="jumat" class="form-control" required>
                            </div>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <button type="reset" class="btn btn-secondary">Reset</button>
                        </div>

                    </form><!-- End General Form Elements -->
                </div>
            </div>
        </div>

    </div>
</x-app-layout>
