@extends('./layouts/main')

@section('container')
<h1>halaman about</h1>
<h3>{{ $name }}</h3>
<p>{{ $email }}</p>
<img src="./img/{{ $image }}" width="200px" alt="" class="img-thumbnail rounded-circle">
@endsection
