<x-app-layout>
    <div class="row">
        <div class="col-lg-8">

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Ubah Data Layanan</h5>

                    <!-- General Form Elements -->
                    <form action="{{route('Layanan.update',$Layanan->id)}}" method="post"  enctype="multipart/form-data">
                        @csrf
                        @method("PUT")
                        <div class="row mb-3">
                            <label for="inputText" class="col-sm-3 col-form-label">Nama Layanan</label>
                            <div class="col-sm-9">
                                <input type="text" name="nama_layanan" value="{{$Layanan->nama_layanan}}" class="form-control" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputText" class="col-sm-3 col-form-label">Urut</label>
                            <div class="col-sm-9">
                                <input type="text" name="urut" value="{{$Layanan->urut}}" class="form-control" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputText" class="col-sm-3 col-form-label">Lokasi</label>
                            <div class="col-sm-9">
                                <input type="text" name="lokasi" value="{{$Layanan->lokasi}}" class="form-control" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputNumber" class="col-sm-3 col-form-label">Logo</label>
                            <div class="col-sm-9">
                                <input name="logo" class="form-control" type="file" id="formFile">
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
                                <textarea name="deskripsi" class="form-control" style="height: 100px">{{$Layanan->deskripsi}}</textarea>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputPassword" class="col-sm-3 col-form-label">Persyaratan</label>
                            <div class="col-sm-9">
                                <textarea name="persyaratan" class="form-control" style="height: 100px">{{$Layanan->persyaratan}}</textarea>
                            </div>
                        </div>          
                        
                        <div class="row mb-3">
                            <label for="inputPassword" class="col-sm-3 col-form-label">Jadwal </label>
                            <div class="col-sm-9">
                                <textarea name="senin_kamis" class="form-control" style="height: 100px">{{ $Layanan->senin_kamis }}</textarea>
                                {{-- <input type="text" name="senin_kamis" class="form-control" value="{{ $Layanan->senin_kamis }}" required> --}}
                            </div>
                        </div>
                                
                        <div class="row mb-3">
                            <label for="inputPassword" class="col-sm-3 col-form-label">Detail Layanan </label>
                            <div class="col-sm-9">
                                <textarea name="detail_layanan" class="form-control" style="height: 100px">{{ $Layanan->detail_layanan }}</textarea>
                                {{-- <input type="text" name="senin_kamis" class="form-control" value="{{ $Layanan->senin_kamis }}" required> --}}
                            </div>
                        </div>
                        {{-- <div class="row mb-3">
                            <label for="inputPassword" class="col-sm-3 col-form-label">Jadwal Jumat</label>
                            <div class="col-sm-9">
                                <input type="hidden" value="-" name="jumat" class="form-control">
                            </div>
                        </div>           --}}
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
