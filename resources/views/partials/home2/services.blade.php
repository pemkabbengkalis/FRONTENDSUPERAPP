<section id="features" class="features">
    <div class="container">

        <div class="section-title" data-aos="fade-up">
            <h2>Layanan</h2>
            <p>Layanan yang ada pada Klik-Bermasa</p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="300">
          
        @foreach($layanan as $i => $v)
            <div class="col-lg-3 col-md-4">
                <div class="icon-box">
                    <div style="width:30%;">
                        <img style="width:100%;" src="{{$v->icon}}" alt="">
                    </div>
                    <h3><a href="">{{$v->name}}</a></h3>
                </div>
            </div>
        @endforeach
          
        </div>

    </div>
</section>
