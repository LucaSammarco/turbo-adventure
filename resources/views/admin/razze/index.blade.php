@extends('layouts.admin')

@section('content')

<h1>Razze</h1>

<ol>

@foreach ($razzaList as $razza)

<li>
    {{ $razza->nome }}

</li>
@endforeach

</ol>



@endsection
