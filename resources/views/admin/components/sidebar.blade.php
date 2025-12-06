<aside class="fixed top-0 left-0 h-full w-64 bg-bray-900 text-white bg-gray-800">
    <div class="p-2 border-b border-white flex justify-center">
        <a href="{{ route('home.index') }}">
            <img src="{{ asset('storage/'. $settings->logo_path) }}" class="w-8 md:w-16 h-auto">
            <p class="text-sm mt-1">{{ $settings->site_name }}</p>
        </a>
    </div>    
    <nav class="p-6">
      <ul class="flex flex-col gap-2">

        <li class="block p-3 rounded-md hover:bg-gray-900 background:bg-white">
            <a href="{{ route('admin.index') }}">Pagrindinis</a>
        </li>
        <li class="block p-3 rounded-md hover:bg-gray-900 active:bg-gray-800">
            <a href="#">Užsakymai</a>
        </li>
         <li class="block p-3 rounded-md hover:bg-gray-900 active:bg-gray-800">
            <a href="#">Prekės</a>
        </li>

        <li class="block p-3 rounded-md hover:bg-gray-900 active:bg-gray-800">
            <a href="{{ route('admin.category.index') }}">Prekių kategorijos</a>
        </li>

        <li class="block p-3 rounded-md hover:bg-gray-900 active:bg-gray-800">
            <a href="#">Prekių medžiagos</a>
        </li>

        <li class="block p-3 rounded-md hover:bg-gray-900 active:bg-gray-800">
            <a href="#">Prekių spalvos</a>
        </li>

         <li class="block p-3 rounded-md hover:bg-gray-900 active:bg-gray-800">
            <a href="#">Nuolaidos</a>
        </li>

        <li class="block p-3 rounded-md hover:bg-gray-900 active:bg-gray-800">
            <a href="#">Dinaminiai puslapiai</a>
        </li>

        <li class="block p-3 rounded-md hover:bg-gray-900 active:bg-gray-800">
            <a href="{{ route('admin.site_settings') }}">Nustatymai</a>
        </li>

        <!-- atsijungti -->
        <li class="block p-3 rounded-md text-red-500 hover:bg-gray-900 active:bg-gray-800">
            <a href="{{ route('admin.logout') }}">Atsijungti</a>
        </li>
      </ul>
    </nav>  
</aside>