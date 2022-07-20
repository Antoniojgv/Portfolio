
@isset($coindesk_data)
<section id="coindesk" class="coindesk container">

    <div class="section-title">
        <h2 class="text-dark">{{ $coindesk_data["chartName"] }}</h2>
    </div>

    <div class="row mt-1">

        @foreach( $coindesk_data["bpi"] as $currency )

        <div class="col-12 col-lg my-1 text-center coindesk-bg">
            <p class="coindesk-item"><span class="coindesk-title">{{ $currency["code"]}}:</span> <span class="coindesk-content"> {{$currency["rate"]}} {!! $currency["symbol"] !!}</span></p>
        </div>

        @endforeach

    </div>

    <div class="coindesk-disclaimer">
        <p><small>{{ $coindesk_data["disclaimer"] ?: '' }}</small></p>
        <p><small>Datos obtenidos a través de la API de <a href="https://www.coindesk.com/" target="_blank">coindesk.com</a></small></p>
    </div>

</section>
@endisset
