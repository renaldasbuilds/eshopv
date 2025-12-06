<!DOCTYPE html>
<html lang="LT">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $settings->meta_title ?? 'Pavadinimas' }}</title>
    @vite(['resources/css/app.css','resources/js/app.js'])

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link 
        href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;500;600;700&display=swap" 
        rel="stylesheet"
    />
    
</head>
<body>
    <div class="min-h-screen bg-green-100">
        <!-- top -->
        @include('partials.header')
        @include('partials.navigation')
        @include('partials.hero')   
    
        <!-- main content -->
        <main class="min-h-[50vh] pt-8 md:pt-28">
            @yield('content')
        </main>

        <!-- footer -->
        @include('partials.footer')
    </div>    
</body>
</html>