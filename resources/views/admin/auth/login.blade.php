@extends('layouts.auth')
@section('content')
<div class="flex items-center justify-center">
    <div class="w-full max-w-md rounded-2xl border bg-white p-8 shadow-sm">
        <p class="text-center text-xl text-gray-600">Prisijungti</p>
        <form method="POST" action="#" class="p-5">
        @csrf
            <div>
                <label for="email" class="mb-1 block text-sm font-medium text-gray-700 mt-2">El.paštas *</label>
                    <input id="email" 
                            name="email" 
                            type="email" 
                            required autofocus
                            class="w-full rounded-md border px-3 py-2 text-sm shadow-sm focus:border-brand-600 focus:ring-1 focus:ring-brand-600">
            </div>
            <div>
                <label for="password" class="mb-1 block text-sm font-medium text-gray-700 mt-2">Slaptažodis *</label>
                    <input id="password" 
                            name="password" 
                            type="password" 
                            required autofocus
                            class="w-full rounded-md border px-3 py-2 text-sm shadow-sm focus:border-brand-600 focus:ring-1 focus:ring-brand-600">
            </div>
            <button type="submit"
                class="w-full rounded-lg bg-gray-500 px-4 py-2 text-white hover:bg-gray-700 mt-5">
                Prisijungti
            </button>
        </form>
    </div>   
</div>
@endsection