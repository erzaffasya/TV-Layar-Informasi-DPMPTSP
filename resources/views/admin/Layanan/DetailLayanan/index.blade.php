<x-app-layout>
    <div class="pagetitle">
        {{-- <h1>Undangan Kolaborasi Cipta</h1> --}}
        {{-- <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/dashboard">Hak Cipta</a></li>
                <li class="breadcrumb-item"><a href="{{ route('Layanan.index') }}">List Pra Pengajuan</a></li>
                <li class="breadcrumb-item active">Undangan Cipta</li>
            </ol>
        </nav> --}}
    </div><!-- End Page Title -->
    <section class="section dashboard">
        <div class="row">
            <div class="col-lg-12 recent-sales overflow-auto">
                <div class="row col-lg-8">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Form Tambah Detail Layanan</h5>
                            <p>Isilah form berikut untuk menambah Detail Layanan</p>

                            <form action="{{ route('DetailLayanan.store') }}" method="post"
                                enctype="multipart/form-data" class="row g-3 justify-content-center needs-validation"
                                novalidate>
                                @csrf

                                <div class="row mt-3">
                                    <div class="col-9">
                                        <label for="inputState" class="form-label">Nama Layanan</label>
                                        <input type="text" class="form-control" name="jenis_layanan">
                                        <input type="hidden" name="layanan_id" value="{{ $Layanan->id }}">
                                        <div class="invalid-feedback">Harap masukkan nama layanan!</div>
                                    </div>
                                </div>
                                <div class="row mt-3 mb-3">
                                    <div class="col-9">
                                        <label for="yourEmail" class="form-label">Deskripsi</label>
                                        <textarea type="text" name="deskripsi" class="form-control form-control-sm" id="yourEmail">
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
                                        <a href="{{route('Layanan.index')}}" class="btn btn-danger btn-sm">Back</a>
                                        <button type="submit" class="btn btn-primary btn-sm">Submit</button>
                                    </div>
                                </div>
                            </form><!-- Vertical Form -->
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Detail Layanan</h5>
                            <p>Data Detail Layanan.</p>

                            <table id="myTable" class="datatable hover display compact nowrap">
                                <thead class="text-center">
                                    <tr>
                                        <th>No.</th>
                                        <th>Nama Layanan</th>
                                        <th>Deskripsi</th>
                                        <th>File</th>
                                        <th>Foto</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($DetailLayanan as $item)
                                        <tr>
                                            <td style="text-align: center;">{{ $item->id }}</td>
                                            <td
                                                style="max-width: 18rem;
                                    white-space: nowrap;
                                    overflow: auto;">
                                                {!! $item->jenis_layanan !!}</td>
                                            <td
                                                style="max-width: 18rem;
                                    white-space: nowrap;
                                    overflow: auto;
                                    text-overflow: ellipsis;">
                                                {!! $item->deskripsi !!}</td>
                                            <td class="text-center"
                                                style="max-width: 18rem;
                                           white-space: nowrap;
                                           overflow: auto;
                                           text-overflow: ellipsis;">
                                                <a target="_blank"
                                                    href="{{ asset('storage/DetailLayanan/File/' . $item->file) }}">
                                                    <i class="fa-solid fa-download"></i>
                                                </a>
                                            </td>
                                            <td class="text-center"
                                                style="max-width: 18rem;
                                          white-space: nowrap;
                                          overflow: auto;
                                          text-overflow: ellipsis;">
                                                <img target="_blank" height="50"
                                                    src="{{ asset('storage/DetailLayanan/Foto/' . $item->foto) }}">
                                            </td>

                                            <td style="text-align: center;">

                                                <a href="{{ route('DetailLayanan.edit', $item->id) }}"
                                                    class="btn btn-primary btn-sm">
                                                    <i class="fas fa-edit"></i>
                                                </a>
                                                <form class="btn p-0" method="post"
                                                    action="{{ URL::route('DetailLayanan.destroy', $item->id) }}">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button onclick="return confirm('Apakah Anda yakin?')"
                                                        type="submit" class="btn btn-danger btn-sm"
                                                        data-toggle="tooltip" data-placement="top" title="Hapus">
                                                        <i class="far fa-trash-alt"></i>
                                                    </button>
                                                </form>
                                            </td>
                                            {{-- @endif --}}

                                        </tr>
                                    @endforeach


                                </tbody>
                                <tfoot>

                                    <tr>
                                        {{-- <th>ID</th>
                                <th>judul</th>
                                <th>isi</th>
                                <th>Action</th> --}}
                                    </tr>
                                </tfoot>
                            </table>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>
