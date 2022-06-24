<x-app-layout>
    <div class="row">
        <div class="col-lg-6">

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Ubah Data Layanan</h5>

                    <!-- General Form Elements -->
                    <form action="{{ route('DetailLayanan.update', $DetailLayanan->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                                <div class="row mt-3">
                                    <div class="col-9">
                                        <label for="inputState" class="form-label">Nama Layanan</label>
                                        <input type="text" class="form-control" value="{{ $DetailLayanan->jenis_layanan }}" name="jenis_layanan">
                                        <div class="invalid-feedback">Harap masukkan nama layanan!</div>
                                    </div>
                                </div>
                                <div class="row mt-3 mb-3">
                                    <div class="col-9">
                                        <label for="yourEmail" class="form-label">Deskripsi</label>
                                        <textarea type="text" name="deskripsi" class="form-control form-control-sm" id="yourEmail">{{ $DetailLayanan->deskripsi }}
                                        </textarea>
                                        <div class="invalid-feedback">Harap masukkan Deskripsi!</div>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-9">
                                        <label for="inputNumber" class="col-sm-3 col-form-label">File</label>
                                        <div class="col-sm-9">
                                            <input name="file" class="form-control" type="file" id="formFile">
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-9">
                                        <label for="inputNumber" class="col-sm-3 col-form-label">Foto</label>
                                        <div class="col-sm-9">
                                            <input name="foto" class="form-control" type="file" id="formFile">
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div>
                                        <button type="submit" class="btn btn-primary btn-sm">Submit</button>
                                        <button type="reset" class="btn btn-secondary btn-sm">Reset</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </form><!-- End General Form Elements -->
                </div>
            </div>
        </div>

    </div>
</x-app-layout>
