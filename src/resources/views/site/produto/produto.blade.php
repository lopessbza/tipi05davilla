@extends('layout.site')

@section('content')


    @include('site.produto.mobile-header')
    @include('site.produto.mobile-menu')
    @include('site.produto.page-title')
    @include('site.produto.search-popup')
    @include('site.produto.sidebar')
    @include('site.produto.sticky-header') 



@endsection

@push('plugins')
<script src="{{ asset('davilla/js/sticky_sidebar.min.js') }}"></script>
@endpush