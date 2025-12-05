<aside class="fixed top-0 left-0 h-full w-64 bg-bray-900 text-white bg-gray-600">
    <nav class="p-6">
      <ul class="flex flex-col gap-2">


        <li class="block p-3 rounded-md hover:bg-gray-900 background:bg-white">
            <a href="{{ route('admin.index') }}">Pagrindinis</a>
        </li>
         <li class="block p-3 rounded-md hover:bg-gray-900 active:bg-gray-800">
            <a href="#">Prekės</a>
        </li>

        <li class="block p-3 rounded-md hover:bg-gray-900 active:bg-gray-800">
            <a href="#">Kategorijos</a>
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