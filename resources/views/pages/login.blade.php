@extends('layouts.app2')
@section('content')
    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                {{-- <h2>Portfolio Details</h2> --}}
                <ol>
                    <li><a href="index.html">Beranda</a></li>
                    <li>Login</li>
                </ol>
            </div>

        </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
        <div class="container">

            <div class="row">

                <div class="col-lg-8">
                    {{-- <h2 class="portfolio-title">This is an example of portfolio detail</h2> --}}
                    <div class="owl-carousel portfolio-details-carousel">
                        <img src="{{ asset('assets2') }}/img/portfolio/portfolio-1.jpg" class="img-fluid" alt="">
                    </div>
                </div>

                @if ($errors->any())
                    <div>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <div class="col-lg-4 portfolio-info">
                    <h3>Login Akun</h3>
                    <form action="{{ route('action_login') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" name="email" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp" placeholder="Enter email">
                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                                else.</small>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" name="password" class="form-control" id="exampleInputPassword1"
                                placeholder="Password">
                        </div>
                        <button type="submit" class="btn btn-primary" name="login">Login</button>
                    </form>
                </div>

            </div>

        </div>
    </section><!-- End Portfolio Details Section -->
@endsection
