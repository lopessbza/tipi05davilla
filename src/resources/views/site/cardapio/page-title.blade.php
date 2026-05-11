@php
    $pageTitle = asset('davilla/images/contato/banner-contato.jpg');
@endphp
 
<section class="page-title" style="background-image:url('{{ $pageTitle }}')">
    <div class="auto-container">
        <h1>{{ $produto->nome_produto ?? 'Cardápio' }}</h1>
       
        <ul class="page-breadcrumb">
            <li><a href="{{ route('home') }}">home</a></li>
           
            @if(isset($produto))
                <li><a href="{{ route('cardapio.index') }}">Cardápio</a></li>
                <li>{{ $produto->nome_produto }}</li>
            @else
                <li>Cardápio</li>
            @endif
        </ul>
    </div>
</section>