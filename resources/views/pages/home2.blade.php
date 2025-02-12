@extends('layouts.app2')
@section('content')
    <main id="main">

        <!-- ======= Clients Section ======= -->
        {{-- <section id="clients" class="clients clients">
            <div class="container">

                <div class="row">

                    <div class="col-lg-2 col-md-4 col-6">
                        <img src="{{asset('')}}assets2/img/clients/client-1.png" class="img-fluid" alt="" data-aos="zoom-in">
                    </div>

                    <div class="col-lg-2 col-md-4 col-6">
                        <img src="{{asset('')}}assets2/img/clients/client-2.png" class="img-fluid" alt="" data-aos="zoom-in"
                            data-aos-delay="100">
                    </div>

                    <div class="col-lg-2 col-md-4 col-6">
                        <img src="{{asset('')}}assets2/img/clients/client-3.png" class="img-fluid" alt="" data-aos="zoom-in"
                            data-aos-delay="200">
                    </div>

                    <div class="col-lg-2 col-md-4 col-6">
                        <img src="{{asset('')}}assets2/img/clients/client-4.png" class="img-fluid" alt="" data-aos="zoom-in"
                            data-aos-delay="300">
                    </div>

                    <div class="col-lg-2 col-md-4 col-6">
                        <img src="{{asset('')}}assets2/img/clients/client-5.png" class="img-fluid" alt="" data-aos="zoom-in"
                            data-aos-delay="400">
                    </div>

                    <div class="col-lg-2 col-md-4 col-6">
                        <img src="{{asset('')}}assets2/img/clients/client-6.png" class="img-fluid" alt="" data-aos="zoom-in"
                            data-aos-delay="500">
                    </div>

                </div>

            </div>
        </section> --}}
        <!-- End Clients Section -->

        <!-- ======= About Us Section ======= -->
        @include('partials.home2.onedata')
        <!-- End About Us Section -->

        <!-- ======= Features Section ======= -->
        @include('partials.home2.services')
        <!-- End Features Section -->

        <!-- ======= Services Section ======= -->
        @include('partials.home2.banner')
        <!-- End Services Section -->

        <!-- ======= More Services Section ======= -->
        @include('partials.home2.news')
        <!-- End More Services Section -->

        <!-- ======= F.A.Q Section ======= -->
        <section id="faq" class="faq">
            <div class="container">

                <div class="section-title" data-aos="fade-up">
                    <h2>Frequently Asked Questions</h2>
                </div>

                <div class="row faq-item d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                    <div class="col-lg-5">
                        <i class="ri-question-line"></i>
                        <h4>Non consectetur a erat nam at lectus urna duis?</h4>
                    </div>
                    <div class="col-lg-7">
                        <p>
                            Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non
                            curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.
                        </p>
                    </div>
                </div><!-- End F.A.Q Item-->

                <div class="row faq-item d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
                    <div class="col-lg-5">
                        <i class="ri-question-line"></i>
                        <h4>Feugiat scelerisque varius morbi enim nunc faucibus a pellentesque?</h4>
                    </div>
                    <div class="col-lg-7">
                        <p>
                            Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit
                            laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est
                            pellentesque elit ullamcorper dignissim.
                        </p>
                    </div>
                </div><!-- End F.A.Q Item-->

                <div class="row faq-item d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
                    <div class="col-lg-5">
                        <i class="ri-question-line"></i>
                        <h4>Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi?</h4>
                    </div>
                    <div class="col-lg-7">
                        <p>
                            Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar
                            elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus
                            pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus.
                        </p>
                    </div>
                </div><!-- End F.A.Q Item-->

                <div class="row faq-item d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="400">
                    <div class="col-lg-5">
                        <i class="ri-question-line"></i>
                        <h4>Ac odio tempor orci dapibus. Aliquam eleifend mi in nulla?</h4>
                    </div>
                    <div class="col-lg-7">
                        <p>
                            Aperiam itaque sit optio et deleniti eos nihil quidem cumque. Voluptas dolorum accusantium sunt
                            sit enim. Provident consequuntur quam aut reiciendis qui rerum dolorem sit odio. Repellat
                            assumenda soluta sunt pariatur error doloribus fuga.
                        </p>
                    </div>
                </div><!-- End F.A.Q Item-->

                <div class="row faq-item d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="500">
                    <div class="col-lg-5">
                        <i class="ri-question-line"></i>
                        <h4>Tempus quam pellentesque nec nam aliquam sem et tortor consequat?</h4>
                    </div>
                    <div class="col-lg-7">
                        <p>
                            Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est ante
                            in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit adipiscing bibendum
                            est. Purus gravida quis blandit turpis cursus in
                        </p>
                    </div>
                </div><!-- End F.A.Q Item-->

            </div>
        </section><!-- End F.A.Q Section -->

        <!-- ======= Contact Section ======= -->
        @include('partials.home2.contact')
        <!-- End Contact Section -->

    </main><!-- End #main -->
@endsection
