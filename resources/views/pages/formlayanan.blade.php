Judul Form : {{$data['form']['name']}}
<form action="" method="post">
    @csrf
    @foreach ($data['field'] as $item)
        {!!$item!!}
        <br>
    @endforeach
    <button type="submit" name="kirim" value="true">Kirim</button>
</form>
