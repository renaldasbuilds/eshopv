@extends('layouts.admin')
@section('content')
<div class="w-full mx-auto  bg-gray-50 rounded-md p-30 space-y-5">
    <div class="gap-4 mb-5">
        <h1 class="text-2xl font-semibold py-2">
            Prekių kategorijos
        </h1>
        <a href="{{ route('admin.category.create') }}"
                class="px-6 py-2 bg-green-300 font-medium rounded-md hover:bg-green-500">
                Pridėti
        </a>
    </div>
    <!-- žinutės -->
    @if(session('success'))
        <div id="success" class="bg-green-100 text-green-800 text-sm p-3 rounded">
            {{ session('success') }}
        </div>
    @endif

    @if ($errors->any())
        <div id="error" class="bg-red-100 text-red-800 text-sm p-3 rounded">
            <p class="font-semibold mb-1">Yra klaidų formoje:</p>
            <ul class="list-disc list-inside space-y-0.5">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <table class="min-w-full divide-y divide-gray-300 border rounded-md">
        <thead class="bg-gray-200">
            <tr>
                <th class="px-4 py-2 text-left text-sm font-semibold text-gray-700">ID</th>
                <th class="px-4 py-2 text-left text-sm font-semibold text-gray-700">Pavadinimas</th>
                <th class="px-4 py-2 text-left text-sm font-semibold text-gray-700">Nuotrauka</th>
                <th class="px-4 py-2 text-left text-sm font-semibold text-gray-700">Slug</th>
                <th class="px-4 py-2 text-left text-sm font-semibold text-gray-700">Veiksmai</th>
            </tr>
        </thead>
        <tbody class="divide-y divide-gray-200">
            @forelse ($categories as $i)
                <tr class="hover:bg-gray-50">
                    <td class="px-4 py-2 text-sm text-gray-900">{{ $i->id }}</td>
                    <td class="px-4 py-2 text-sm text-gray-900">{{ $i->title }}</td>
                    <td class="px-4 py-2">
                        <img src="{{ $i->image_path
                                    ? asset('storage/'. $i->image_path)
                                    : asset('images/image_placeholder.png') }}"
                                     class="w-22 h-auto rounded-md shadow-sm" alt="{{ $i->title }}">
                    </td>
                    <td class="px-4 py-2 text-sm text-gray-500">{{ $i->slug }}</td>
                    <td>
                        <div class="flex items-center gap-4 pl-3">
                            <a href="#">
                                <x-heroicon-o-pencil-square class="w-7 h-7 text-gray-500 cursor-pointer rounded-sm hover:bg-red-500" />
                            </a>        
                            <!-- delete svg -->
                             <form method="POST" action="{{ route('admin.category.destroy', $i->id) }}"
                                onsubmit="return confirm('Ar tikrai norite ištrinti?')">
                                @csrf
                                @method('DELETE')
                                    <button type="submit">
                                        <x-heroicon-o-trash class="w-7 h-7 text-gray-500 cursor-pointer rounded-sm hover:bg-red-500" /></div>
                                    </button>    
                            </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="4" class="px-4 py-3 text-center text-gray-500">Kategorijų nėra</td>
                </tr>
            @endforelse
        </tbody>
    </table>

</div>    
@endsection

<script>
    window.addEventListener("load", () => {
        const success = document.getElementById("success");
        if(success){
            setTimeout(() => {
                    success.remove();
            }, 3000);
        }
    });
</script>