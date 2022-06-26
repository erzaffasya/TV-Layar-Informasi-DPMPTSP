<x-guest-layout>
    <section id="ly-mp">
        <div class="columns is-multiline my-5">
            @foreach ($Layanan as $item)
                <div class="column is-4 has-background-white">
                    <a href="{{ url('Layanan-MPP/'.$item->id) }}">
                        <div class="px-3 pb-3 pt-4">
                            <div class="columns ly-mp-card">
                                <div class="column is-5 px-0 py-0">
                                    <figure>
                                        <img src="{{ asset("storage/Layanan/Foto/$item->foto") }}" alt=""
                                            class="ly-mp-img">
                                        <img src="{{ asset("storage/Layanan/Logo/$item->logo") }}" alt=""
                                            class="ly-mp-logo">
                                    </figure>
                                </div>
                                <div class="column">
                                    <p class="is-size-5 has-text-weight-bold is-uppercase has-text-dark">
                                        {{ $item->nama_layanan }}
                                    </p>
                                    <p class="is-size-6 has-text-grey has-text-weight-semibold">{{ $item->lokasi }}</p>
                                    <div class="content mt-3">
                                        <p class="has-text-weight-bold mb-0 has-text-grey-dark">Jenis Layanan</p>
                                        <ol class="ml-4 mt-0 is-size-7 has-text-grey has-text-weight-semibold">
                                            @foreach ($item->detail_layanan as $item1)
                                                <li>{{ $item1->jenis_layanan }}</li>
                                            @endforeach
                                        </ol>
                                        <button
                                            class="button ly-mp-btn-dtl is-link is-fullwidth is-justify-content-space-between">
                                            <span>
                                                Lihat Detail
                                            </span>
                                            <span class="icon is-small">
                                                <i class="fa-solid fa-lg fa-circle-arrow-right"></i>
                                            </span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </section>
</x-guest-layout>
