@extends('layouts.app2')

@section('content')
    <div class="breadcrumbs m-5">
        <div class="row">
            <div class="col-sm-10">
                <section class="breadcrumbs">
                    <div class="container">
                        <div class="d-flex justify-content-between align-items-center">
                            <h2>Form {{ $data['form']['name'] }}</h2>
                            <ol>
                                <li><a href="#">Home</a></li>
                                <li>Layanan</li>
                            </ol>
                        </div>
                    </div>
                </section>

                <section class="inner-page">
                    <div class="container">
                        <form action="" method="post">
                            @csrf
                            @foreach ($data['field'] as $item)
                                {!! $item !!}
                                <br>
                            @endforeach
                            <div class="text-right">
                                <button class="btn btn-warning mr-3" type="submit" name="kirim"
                                    value="true">Kirim</button>
                            </div>
                        </form>
                    </div>
                </section>
            </div>
            <div class="col-sm mt-5">
                <div class="card mb-3" style="border: none;">
                    <img class="card-img-top" src="https://tatu.serangkab.go.id/img/user-no-image.png" alt="Card image cap">
                    <div class="card-body text-center">
                        <h5 class="card-title">Mohon login terlebih dahulu</h5>
                        <hr>
                        <a href="#" class="btn btn-outline-warning btn-lg btn-block">Login</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


@push('css')
    <style>
        .service-item {
            display: flex;
            align-items: center;
        }

        .service-item img {
            margin-right: 10px;
            /* Tambahkan spasi antara logo dan teks */
        }

        .service-details {
            line-height: normal;
        }

        `
    </style>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
@endpush

@push('js')
    <script>
        $(document).ready(function() {
            $('#servicesTable').DataTable({
                "lengthChange": false,
                "dom": '<"float-left"f>rtip' // Changes layout: moves search box to the left
            });
        });
    </script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
@endpush
