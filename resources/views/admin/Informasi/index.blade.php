<x-app-layout>
    <div class="pagetitle">
        <h1>Data Informasi</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Informasi</a></li>
                <li class="breadcrumb-item"><a href="#">Tambah Informasi</a></li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">
            <div class="col-lg-12 recent-sales overflow-auto">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Form Lihat Informasi</h5>
                        <p>Kumpulan Data Informasi.</p>

                        <div class="tab-content pt-2" id="myTabContent">
                            <div class="table-responsive">
                                <table id="myTable" class="datatable hover display compact nowrap">
                                    <thead class="text-center">
                                        <tr>
                                            <th>No.</th>
                                            <th>Judul Informasi</th>
                                            <th>Logo</th>
                                            <th>Deskripsi</th>
                                            <th>File</th>
                                            <th>Link Redirect</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        @foreach ($Informasi as $item)
                                            <tr>
                                                <td style="text-align: center;">{{ $item->id }}</td>
                                                <td
                                                    style="max-width: 18rem;
                                            white-space: nowrap;
                                            overflow: auto;">
                                                    {{ $item->judul }}</td>
                                                <td
                                                    style="max-width: 18rem;
                                            white-space: nowrap;
                                            overflow: auto;
                                            text-overflow: ellipsis;">
                                                    <img target="_blank" height="50"
                                                        src="{{ asset('storage/Informasi/Logo/' . $item->logo) }}">
                                                </td>
                                                <td class="text-center"
                                                    style="max-width: 18rem;
                                                  white-space: nowrap;
                                                  overflow: auto;
                                                  text-overflow: ellipsis;">
                                                    {!! $item->deskripsi !!}</td>
                                                </td>
                                                <td class="text-center"
                                                    style="max-width: 18rem;
                                                   white-space: nowrap;
                                                   overflow: auto;
                                                   text-overflow: ellipsis;">
                                                    <a target="_blank"
                                                        href="{{ asset('storage/Informasi/File/' . $item->file) }}">
                                                        <i class="fa-solid fa-download"></i>
                                                    </a>
                                                </td>
                                                <td
                                                    style="max-width: 18rem;
                                        white-space: nowrap;
                                        overflow: auto;">
                                                    {{ $item->link_redirect }}</td>
                                                {{-- <td>{!! $item->icon !!}</td> --}}
                                                {{-- @if (Auth::Informasi()->role == 'admin') --}}
                                                <td style="text-align: center;">
                                                    <a href="{{ route('Informasi.edit', $item->id) }}"
                                                        class="btn btn-primary btn-sm">
                                                        <i class="fas fa-edit"></i>
                                                    </a>
                                                    <form class="btn p-0" method="post"
                                                        action="{{ URL::route('Informasi.destroy', $item->id) }}">
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
