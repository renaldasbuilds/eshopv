<header class="w-full bg-green-100">
    <div class="mx-auto max-w-6xl">
        <div class="flex items-center justify-between w-full sm:h-24 md:h-35">
            <!-- Logo -->
            <a href="/" class="flex items-center">
                <img src="{{ asset('storage/'. $settings->logo_path) }}" class="w-12 md:w-30 h-auto" alt="Logo"> 
            </a>

            <!-- Navigacija -->
            <nav class="hidden md:flex items-center gap-12">
                <a href="#" class="text-base font-medium text-gray-800 hover:text-gray-950">
                    Pradžia
                </a>
                <a href="#" class="text-base font-medium text-gray-800 hover:text-gray-950">
                    Apie mus
                </a>
                <a href="#" class="text-base font-medium text-gray-800 hover:text-gray-950">
                    Kontaktai
                </a>
                <a href="#" class="text-base font-medium text-gray-800 hover:text-gray-950">
                    Paslaugos
                </a>
                <a href="#" class="text-base font-medium text-gray-800 hover:text-gray-950">
                    Parduotuvė
                </a>
            </nav>

            <!-- iconos -->
            <div class="flex items-center gap-10">
                <a href="#">
                    <x-heroicon-o-magnifying-glass class="w-7 h-7 text-gray-500" />
                </a> 
                <a href="#">
                    <x-heroicon-o-shopping-bag class="w-7 h-7 text-gray-500" />
                </a>             
            </div> 
        </div>              
    </div>
</header>
