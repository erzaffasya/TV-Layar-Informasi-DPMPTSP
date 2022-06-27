<x-guest-layout>
    <section id="si-mp">
        <div class="columns is-multiline">
            @foreach ($Informasi as $item)
                <div class="column is-one-fifth has-background-white">
                    @if ($item->link_redirect != null)
                        <a href="{{ $item->link_redirect }}" target="_blank">
                        @else
                            <a href="{{ route('DetailInformasi', $item->id) }}">
                    @endif

                    <div class="si-mp-card is-flex is-flex-direction-column px-3 pb-3 pt-4">
                        <figure class="mb-1">
                            <img src="{{ asset('storage/Informasi/Logo/' . $item->logo) }}" alt="">
                        </figure>
                        <p class="is-size-6 has-text-grey-light mb-3">{!! $item->deskripsi !!}</p>
                        <button class="button is-link is-fullwidth is-justify-content-space-between is-rounded">
                            <span class="is-size-6 is-uppercase has-text-weight-bold">
                                {{ $item->judul }}
                            </span>
                            <span class="icon is-small">
                                <i class="fa-solid fa-lg fa-circle-arrow-right"></i>
                            </span>
                        </button>
                    </div>
                    </a>
                </div>
            @endforeach
        </div>
    </section>

</x-guest-layout>
