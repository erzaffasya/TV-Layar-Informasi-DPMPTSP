<x-app-layout>
    <div class="pagetitle">
        <h1>Data Layanan</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Layanan</a></li>
                <li class="breadcrumb-item"><a href="#">Tambah Layanan</a></li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">
            <div class="col-lg-12 recent-sales overflow-auto">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Form Lihat Layanan</h5>
                        <p>Kumpulan Data Layanan.</p>

                        <div class="tab-content pt-2" id="myTabContent">
                            <div class="table-responsive">
                                <table id="myTable" class="datatable hover display compact nowrap">
                                    <thead class="text-center">
                                        <tr>
                                            <th>No.</th>
                                            <th>Nama Layanan</th>
                                            <th>Urut</th>
                                            <th>Lokasi</th>
                                            <th>Logo</th>
                                            <th>Foto</th>
                                            <th>Jadwal</th>
                                            <th>Detail Layanan</th>
                                            {{-- <th>Jadwal Jumat</th> --}}
                                            <th>Deskripsi</th>
                                            <th>Persyaratan</th>
                                            <th>Layanan</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        @foreach ($Layanan as $item)
                                            <tr>
                                                <td style="text-align: center;">{{ $loop->iteration }}</td>
                                                <td
                                                    style="max-width: 18rem;
                                            white-space: nowrap;
                                            overflow: auto;">
                                                    {!! $item->nama_layanan !!}</td>
                                                <td style="text-align: center;">{{ $item->urut }}</td>
                                                <td
                                                    style="max-width: 18rem;
                                            white-space: nowrap;
                                            overflow: auto;
                                            text-overflow: ellipsis;">
                                                    {!! $item->lokasi !!}</td>
                                                <td class="text-center"
                                                    style="max-width: 18rem;
                                                   white-space: nowrap;
                                                   overflow: auto;
                                                   text-overflow: ellipsis;">
                                                    <img height="50" target="_blank"
                                                        src="{{ asset('storage/Layanan/Logo/' . $item->logo) }}">

                                                </td>
                                                <td class="text-center"
                                                    style="max-width: 18rem;
                                                  white-space: nowrap;
                                                  overflow: auto;
                                                  text-overflow: ellipsis;">
                                                    <img target="_blank" height="50"
                                                        src="{{ asset('storage/Layanan/Foto/' . $item->foto) }}">
                                                </td>
                                                <td style="text-align: center;">{!! $item->senin_kamis !!}</td>
                                                {{-- <td style="text-align: center;">{{ $item->jumat }}</td> --}}
                                                <td
                                                    style="max-width: 18rem;
                                            white-space: nowrap;
                                            overflow: auto;
                                            text-overflow: ellipsis;">
                                                    {!! $item->detail_layanan !!}</td>
                                                <td
                                                    style="max-width: 18rem;
                                                white-space: nowrap;
                                                overflow: auto;
                                                text-overflow: ellipsis;">
                                                    {!! $item->deskripsi !!}</td>

                                                <td
                                                    style="max-width: 18rem;
                                                white-space: nowrap;
                                                overflow: auto;
                                                text-overflow: ellipsis;">
                                                    {!! $item->persyaratan !!}</td>
                                                <td
                                                    style="max-width: 18rem;
                                                white-space: nowrap;
                                                overflow: auto;
                                                text-overflow: ellipsis;">
                                                    <ul>
                                                        @foreach ($item->detail_layanan as $item1)
                                                            <li>{{ $item1->jenis_layanan }}</li>
                                                        @endforeach
                                                    </ul>
                                                </td>
                                                {{-- <td>{!! $item->icon !!}</td> --}}
                                                {{-- @if (Auth::Layanan()->role == 'admin') --}}
                                                <td style="text-align: center;">
                                                    <a href="{{ route('Layanan.show', $item->id) }}"
                                                        class="btn btn-success btn-sm " data-toggle="tooltip"
                                                        data-placement="top" title="Tambah Detail Layanan">
                                                        <i class="fa-solid fa-user-plus"></i>

                                                    </a>
                                                    <a href="{{ route('Layanan.edit', $item->id) }}"
                                                        class="btn btn-primary btn-sm">
                                                        <i class="fas fa-edit"></i>
                                                    </a>
                                                    <form class="btn p-0" method="post"
                                                        action="{{ URL::route('Layanan.destroy', $item->id) }}">
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
        </div>

        @push('scripts')
            <script>
                $(document).ready(function() {
                    $('#myTable').DataTable();
                });
            </script>
        @endpush
</x-app-layout>
