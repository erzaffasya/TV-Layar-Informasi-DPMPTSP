<x-app-layout>
    <div class="row">
        <div class="col-lg-6">

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Ubah Data Informasi</h5>

                    <!-- General Form Elements -->
                    <form action="{{route('Informasi.update',$Informasi->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method("PUT")
                        <div class="row mb-3">
                            <label for="inputText" class="col-sm-2 col-form-label">Judul</label>
                            <div class="col-sm-10">
                                <input type="text" name="judul" value="{{$Informasi->judul}}" class="form-control" required>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="inputNumber" class="col-sm-2 col-form-label">Logo</label>
                            <div class="col-sm-10">
                                <input name="logo" class="form-control" type="file" id="formFile">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Deskripsi</label>
                            <div class="col-sm-10">
                                <textarea name="deskripsi" class="form-control" style="height: 100px">{!!$Informasi->deskripsi!!}</textarea>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputNumber" class="col-sm-2 col-form-label">File</label>
                            <div class="col-sm-10">
                                <input class="form-control" name="file" type="file" id="formFile">
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Link Redirect</label>
                            <span class="input-group-text" id="basic-addon3">https://</span>
                            <input type="text" name="link_redirect" class="form-control" value="{{$Informasi->link_redirect}}" id="basic-url" aria-describedby="basic-addon3">
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
