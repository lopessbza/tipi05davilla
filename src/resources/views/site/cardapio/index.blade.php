@extends('layout.site')

@section('content')

    @include('site.cardapio.page-title')
    @include('site.cardapio.portifolio')



@endsection

@push('plugins')
    <script src="{{ asset('davilla/js/mixitup.js') }}"></script>
@endpush



<script>
    document.addEventListener('DOMContentLoaded', function() {
        const filtroInicial = "{{ $categoriaAtiva }}"; 

        if (filtroInicial !== 'all') {
            const botao = document.querySelector(`[data-filter="${filtroInicial}"]`);

            if (botao) {
                botao.click();
            }
        }
    });
</script>