@extends ('layout.layout')

@section ('title', 'Migrante')

@section ('content')
    @include('layout.header')
    @include('include.banner')
    @include('include.ofertas')
    @include('include.ciudades')
    @include('include.ranking')
    @include('include.membresias')

@endsection


@push('scripts')

@endpush

