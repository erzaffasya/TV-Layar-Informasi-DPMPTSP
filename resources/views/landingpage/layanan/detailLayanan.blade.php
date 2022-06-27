<x-guest-layout>
    <section id="detail-ly-mp">
        <div class="columns is-centered mb-5 mt-3">
            <div class="column detail-ly-mp-card is-8 is-paddingless has-background-white">
                <section class="hero is-medium is-link">
                    <div class="hero-body">
                        <img src="{{ asset("storage/Layanan/Foto/$Layanan->foto") }}">
                    </div>
                </section>
                <section class="detail-ly-mp-content px-5">
                    <div class="columns">
                        <div class="column is-one-fifth">
                            <div class="has-background-white px-4 py-4">
                                <figure class="image is-1by1">
                                    <img src="{{ asset("storage/Layanan/Logo/$Layanan->logo") }}">
                                </figure>
                            </div>
                            <hr>
                            <div class="content">
                                <p class="has-text-weight-bold mb-2">Jadwal Layanan</p>
                                <ul class="is-paddingless ml-3 mt-0">
                                    <li class="mb-2">
                                        <p class="has-text-weight-bold mb-0 is-size-7 has-text-grey">Senin-Kamis</p>
                                        <p class="is-size-7 has-text-grey"><span>Pukul </span>09.00 - 15.00</p>
                                    </li>
                                    <li class="mb-2">
                                        <p class="has-text-weight-bold mb-0 is-size-7 has-text-grey">Jumat</p>
                                        <p class="is-size-7 has-text-grey"><span>Pukul </span>09.00 - 11.30</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="column">
                            <p class="is-size-3 has-text-weight-bold has-text-white">{{ $Layanan->nama_layanan }}</p>
                            <p class="is-size-6 has-text-white">{{ $Layanan->lokasi }}</p>

                            <br>
                            <div>
                                <p class="has-text-weight-bold is-size-7">Tentang</p>
                                <p class="has-text-grey">{!! $Layanan->deskripsi !!}</p>
                            </div>
                            <br>

                            <div class="tabs is-boxed is-fullwidth">
                                <ul>
                                    <li class="is-active" data-tab="menu1">
                                        <a>
                                            Jenis Layanan
                                        </a>
                                    </li>
                                    <li class="" data-tab="menu2">
                                        <a>
                                            Persyaratan
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div id="menu1" class="tab-content current-tab">
                                <div class="content">
                                    <ol>
                                        @foreach ($Layanan->detail_layanan as $item)
                                            <li>{{ $item->jenis_layanan }}</li>
                                        @endforeach
                                    </ol>
                                </div>
                            </div>
                            <div id="menu2" class="tab-content">
                                <div class="content">
                                    {!! $Layanan->persyaratan !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </section>
</x-guest-layout>
