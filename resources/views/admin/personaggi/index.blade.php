@extends('layouts.admin')

@section('content')

<h1>Personaggi</h1>

<ol>
@foreach ($personaggiList as $personaggio)


<li>
    {{ $personaggio->nome }}
</li>

@endforeach

</ol>


@endsection
