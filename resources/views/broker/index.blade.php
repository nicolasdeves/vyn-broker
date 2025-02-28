@extends('layouts.master')

@section('content')

@include('components.filter')

<h1 class="d-flex justify-content-center mt-3">

    @if (count($properties) > 0)
    Imóveis
    @else
    Nenhum imóvel encontrado
    @endif

</h1>

@include('components.card')

@endsection




