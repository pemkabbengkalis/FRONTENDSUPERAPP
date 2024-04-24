@extends('layouts.app2')

@section('content')
    <div class="breadcrumbs m-5" style="background-color: #fff !important">
        <div class="row">
            <div class="col-sm-10">
                <section class="breadcrumbs">
                    <div class="container">
                        <div class="d-flex justify-content-between align-items-center">
                            <h2>{{ $data['instansi'] }}</h2>
                            <ol>
                                <li><a href="#">Home</a></li>
                                <li>Layanan</li>
                            </ol>
                        </div>
                    </div>
                </section>

                <section class="inner-page">
                    <div class="container">
                        <table id="servicesTable" class="display">
                            <thead>
                                <tr class="bg-warning text-center">
                                    <th>Layanan</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data['list_layanan'] as $item)
                                    <tr>
                                        <td>
                                            <div class="service-item">
                                                <img src="https://diskominfotik.bengkaliskab.go.id/editor/content_upload/images/logo%20kabupaten%20bengkalis.png"
                                                    alt="Logo" width="30">
                                                <div class="service-details">
                                                    <strong>{{ $item['nama'] }}</strong><br>
                                                    <small class="text-muted">{{ $item['keterangan'] }}</small>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            {!! $item['jenis'] == 'APLIKASI'
                                                ? '<a href="' . $item['api_link'] . '">
                                                    <i class="icofont-send-mail icofont-2x"></i>
                                                    </a>'
                                                : '<a href="' . route('pengajuan', $item['id']) . '">
                                                    <i class="icofont-send-mail icofont-2x"></i>
                                                </a>' !!}
                                        </td>
                                        
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
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
