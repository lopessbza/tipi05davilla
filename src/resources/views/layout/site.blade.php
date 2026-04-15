<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        @include('partials.head')
    </head>


<body>
    <div class="page-wrapper">

        @include('partials.preloader')

        @include('partials.header')

        

        <main>
            @yield('content')

            @include('site.home.slider')

            @include('site.home.service')

            @include('site.home.call')
            
            @include('site.home.portifolio')

            @include('site.home.futures')

            @include('site.home.recipes')

            @include('site.home.testimonial')

            @include('site.home.pricing')
 
        </main>

        @include('partials.footer')

    </div>
    
    @include('partials.script')

</body>

</html> 