{{$data['instansi']}} <br>
@foreach ($data['list_layanan'] as $item)
    Nama Layanan : {{$item['nama']}} <br>
    Keterangan : {{$item['keterangan']}} <br>
    Link : {!!$item['jenis'] == 'APLIKASI' ? '<a href="' . $item['api_link'] . '">Link</a>' : '<a href="' .route('pengajuan', $item['id']) . '">Link</a>'!!}
@endforeach
