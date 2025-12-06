@extends('layouts.admin')
@section('content')

@extends('layouts.admin')
@section('content')
<div class="w-full mx-auto rounded-md p-10 space-y-5">
    <h1>Kategorijos pridėjimas</h1>

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

    <form action="{{ route('admin.category.store') }}" method="POST" enctype="multipart/form-data" class="space-y-4 max-w-md">
        @csrf
        @method('PUT')
        <div class="flex flex-col">
            <label for="title" class="text-sm mb-2 font-medium text-gray-600">Pavadinimas</label>
            <input type="text" name="title" id="title" 
                    class="border rounded-sm bg-white p-1 @error('heading_1') border-red-500 @enderror">
            @error('meta_description')
                <p class="text-xs text-red-600 mt-1">{{ $message }}</p>
            @enderror        
        </div>
        <div class="flex flex-col">
            <label for="descript" class="text-sm mb-2 font-medium text-gray-600">Trumpas aprašymas</label>
            <textarea
                id="description"
                name="description"
                rows="4"
                class="border rounded-sm bg-white p-1 @error('meta_description') border-red-500 @enderror"></textarea>
            @error('meta_description')
                <p class="text-xs text-red-600 mt-1">{{ $message }}</p>
            @enderror
        </div>
    </form>

</div>
@endsection