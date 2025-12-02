<!DOCTYPE html>
<html lang="LT">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    @vite(['resources/css/app.css','resources/js/app.js'])

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link 
        href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;500;600;700&display=swap" 
        rel="stylesheet"
    />    
</head>
<body>
    <div class="min-h-screen bg-gray-300">
        <!-- admin sidebar -->        
        @include('admin.components.sidebar')
        <!-- main content -->
        <main class="ml-64 p-6">
            @yield('content')
        </main>

        <!-- footer -->
    </div>    
</body>
</html>