@extends('layouts.auth')
@section('content')
<div class="flex items-center justify-center">
    <div class="w-full max-w-md rounded-2xl border bg-white p-8 shadow-sm">
        <div class="flex justify-center mt-2">
            <img src="{{ asset('storage/'. $settings->logo_path) }}" class="w-30 h-auto" alt="logo">
        </div>   
        <p class="text-center text-xl text-gray-600 mt-4">Prisijungti</p>
        <!-- error -->
        @if ($errors->any())
            <div id="error" class="bg-red-100 text-red-800 text-sm p-3 rounded">
                <p class="font-semibold mb-1">Klaidos:</p>
                <ul class="list-disc list-inside space-y-0.5">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
       
        <form method="POST" action="{{ route('login.store') }}" class="p-5">
        @csrf
            <div>
                <label for="email" class="mb-1 block text-sm font-medium text-gray-700 mt-2">El.paštas *</label>
                    <input id="email" 
                            name="email" 
                            type="email" 
                            required autofocus
                            class="w-full rounded-md border px-3 py-2 text-sm shadow-sm focus:border-brand-600 focus:ring-1 focus:ring-brand-600">
            @error('email')
                <p class="text-xs text-red-600 mt-1">{{ $message }}</p>
            @enderror
            </div>
                       
            <div>
                <label for="password" class="mb-1 block text-sm font-medium text-gray-700 mt-2">Slaptažodis *</label>
                    <input id="password" 
                            name="password" 
                            type="password" 
                            required autofocus
                            class="w-full rounded-md border px-3 py-2 text-sm shadow-sm focus:border-brand-600 focus:ring-1 focus:ring-brand-600">
            @error('password')
                <p class="text-xs text-red-600 mt-1">{{ $message }}</p>
            @enderror
            </div>
           <button type="submit"
                    class="w-full mt-8 cursor-pointer rounded-lg text-gray-300 bg-gray-900 p-2 hover:bg-gray-500 bg-gray-900 hover:bg-gray-700">
                 Prisijungti
            </button>
    
        </form>
    </div>   
</div>
<script>
    window.addEventListener("load", () => {
        const error = document.getElementById("error");

        if(error){
            setTimeout(() => {
                error.remove();
            }, 5000 );
        }
    });
</script>
@endsection