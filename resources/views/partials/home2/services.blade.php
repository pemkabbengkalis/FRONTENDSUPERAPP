<section id="features" class="features">
    <div class="container">
        <div class="section-title" data-aos="fade-up">
            <h2>Layanan</h2>
            <p>Silahkan pilih layanan yang anda butuhkan</p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="300">
            @foreach($layanan as $layananItem)
            <div class="col-lg-3 col-md-4">
                <div class="icon-box">
                    <div style="width: 30%;">
                        <img class="icon-layanan" src="{{ $layananItem->icon }}" alt=" LOGO LAYANAN {{ $layananItem->name }}">
                    </div>
                    <h3><a href="{{ route('detail_layanan', $layananItem->id) }}">{{ $layananItem->name }}</a></h3>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
