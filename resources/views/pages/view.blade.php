@extends('../layouts.default')

@section('content')

    <h1>{{ $client->name }}</h1>

    <b>ID:</b> {{ $client->id }} <br />
    <b>Company:</b> {{ $client->company }} <br />

@endsection