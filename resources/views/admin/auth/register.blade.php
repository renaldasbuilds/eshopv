@extends('layouts.auth')
@section('content')
<div class="flex items-center justify-center">
    <div class="w-full max-w-md rounded-2xl border bg-white p-8 shadow-sm">
        <p class="text-center text-xl text-gray-600">Registracija</p>
        <div class="flex items-center">
            <img src="{{ asset('storage/'. ($settings->logo_path ?? 'logo_test.png') }}" class="h-35 w-auto" alt="logo">
        </div>
        <form method="POST" action="{{ route('register.store') }}" class="p-10">
        @csrf
            <div>
                <label for="name" class="mb-1 block text-sm font-medium text-gray-700">Vartotojo vardas *</label>
                    <input id="name" 
                            name="name" 
                            type="text" 
                            required
                            class="w-full rounded-md border px-3 py-2 text-sm shadow-sm focus:border-brand-600 focus:ring-1 focus:ring-brand-600">
            </div>
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
            <div>
                <label for="password_confirm" class="mb-1 block text-sm font-medium text-gray-700 mt-2">Pakartokite slaptažodį *</label>
                    <input id="password_confirm" 
                            name="password_confirmation" 
                            type="password" 
                            required autofocus
                            class="w-full rounded-md border px-3 py-2 text-sm shadow-sm focus:border-brand-600 focus:ring-1 focus:ring-brand-600">
            </div>
            <button type="submit"
                    class="w-full mt-8 rounded-lg text-gray-300 bg-gray-900 p-2 hover:bg-gray-500 bg-gray-900 hover:bg-gray-700">
                 Registruotis
            </button>
        </form>
    </div>   
</div>
@endsection