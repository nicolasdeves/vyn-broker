@extends('layouts.master')

@section('content')

    <div class="container flex m-5-0">
        <div class="d-flex justify-content-end">
            <button class="btn search-button" data-bs-toggle="modal" data-bs-target="#add-property-modal">Adicionar</button>
        </div>
    </div>

    @include('components.add-property-modal')

    <style>
        .search-button {
            font-size: 1.5rem;
            font-weight: bold;
            color: var(--text-color);
            padding: 0.7rem;
            background: var(--primary-color);

        }

        .btn:hover {
            background: var(--primary-color);
            opacity: 0.8;
        }
    </style>

@endsection
