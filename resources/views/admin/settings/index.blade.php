@extends('layouts.admin')

@section('content')

<div class="w-full max-w-xl border rounded-md border-t p-5 space-y-4">
    <p class="text-2xl font-medium">
        Pagrindiniai puslapio nustatymai
    </p>

    <form action="{{ route('admin.site_settings.update') }}" method="POST" enctype="multipart/form-data" class="space-y-3">
        @csrf
        @method('PUT')
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div class="flex flex-col">
                <label for="site_name" class="text-sm text-gray-500">Puslapio pavadinimas</label>
                <input
                    id="site_name"
                    type="text"
                    name="site_name"
                    value="{{ $site_settings->site_name }}"
                    class="w-full border rounded-sm bg-white p-1">
            </div>

            <div class="flex flex-col">
                <label for="meta_title" class="text-sm text-gray-500">Meta title</label>
                <input
                    id="meta_title"
                    type="text"
                    name="meta_title"
                    value="{{ $site_settings->meta_title }}"
                    class="w-full border rounded-sm bg-white p-1">
            </div>
        </div>
        <div class="flex flex-col">
            <label for="meta_description" class="text-sm text-gray-500">Meta description</label>
            <textarea
                id="meta_description"
                name="meta_description"
                rows="4"
                class="w-full border rounded-sm bg-white p-1">{{ $site_settings->meta_description }}</textarea>
        </div>

        <div class="flex flex-col">
            <label for="heading_1" class="text-sm text-gray-500">h1 SEO</label>
            <input
                id="heading_1"
                type="text"
                name="heading_1"
                value="{{ $site_settings->heading_1 }}"
                class="w-full border rounded-sm bg-white p-1">
        </div>

        <div class="flex flex-col">
            <label for="heading_2" class="text-sm text-gray-500">h2 SEO</label>
            <input
                id="heading_2"
                type="text"
                name="heading_2"
                value="{{ $site_settings->heading_2 }}"
                class="w-full border rounded-sm bg-white p-1">
        </div>

        <div class="flex flex-col">
            <label for="heading_3" class="text-sm text-gray-500">h3 SEO</label>
            <input
                id="heading_3"
                type="text"
                name="heading_3"
                value="{{ $site_settings->heading_3 }}"
                class="w-full border rounded-sm bg-white p-1">
        </div>

        <div class="flex flex-col">
            <label for="footer_text" class="text-sm text-gray-500">Footer tekstas</label>
            <input
                id="footer_text"
                type="text"
                name="footer_text"
                value="{{ $site_settings->footer_text }}"
                class="w-full border rounded-sm bg-white p-1">
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div class="flex flex-col">
                <label for="phone" class="text-sm text-gray-500">Tel. nr.</label>
                <input
                    id="phone"
                    type="tel"
                    name="phone"
                    value="{{ $site_settings->phone }}"
                    class="w-full border rounded-sm bg-white p-1">
            </div>

            <div class="flex flex-col">
                <label for="email" class="text-sm text-gray-500">El. paštas</label>
                <input
                    id="email"
                    type="email"
                    name="email"
                    value="{{ $site_settings->email }}"
                    class="w-full border rounded-sm bg-white p-1">
            </div>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div class="flex flex-col">
                <label for="city" class="text-sm text-gray-500">Miestas</label>
                <input
                    id="city"
                    type="text"
                    name="city"
                    value="{{ $site_settings->city }}"
                    class="w-full border rounded-sm bg-white p-1">
            </div>

            <div class="flex flex-col">
                <label for="country" class="text-sm text-gray-500">Šalis</label>
                <input
                    id="country"
                    type="text"
                    name="country"
                    value="{{ $site_settings->country }}"
                    class="w-full border rounded-sm bg-white p-1">
            </div>
        </div>
        <div class="flex flex-col">
            <label for="working_hours" class="text-sm text-gray-500">Darbo valandos</label>
            <input
                id="working_hours"
                type="text"
                name="working_hours"
                value="{{ $site_settings->working_hours }}"
                class="w-full border rounded-sm bg-white p-1">
        </div>

        <div class="flex flex-col">
            <label for="facebook" class="text-sm text-gray-500">Facebook URL</label>
            <input
                id="facebook"
                type="text"
                name="facebook"
                value="{{ $site_settings->facebook }}"
                class="w-full border rounded-sm bg-white p-1">
        </div>

        <div class="flex flex-col">
            <label for="instagram" class="text-sm text-gray-500">Instagram URL</label>
            <input
                id="instagram"
                type="text"
                name="instagram"
                value="{{ $site_settings->instagram }}"
                class="w-full border rounded-sm bg-white p-1">
        </div>

        <div class="flex flex-col">
            <label for="tiktok" class="text-sm text-gray-500">TikTok URL</label>
            <input
                id="tiktok"
                type="text"
                name="tiktok"
                value="{{ $site_settings->tiktok }}"
                class="w-full border rounded-sm bg-white p-1">
        </div>

        <!-- logotipas -->

        <div class="flex flex-col">
            <label for="logo_path" class="text-sm text-gray-500 mb-1">Logotipas</label>
            @if(!$site_settings->logo_path)
                <label
                    for="logo_path"
                    class="cursor-pointer inline-block bg-gray-200 hover:bg-gray-300 text-sm text-black py-2 px-3 rounded">
                     Pasirinkti failą
                </label>
                <input type="file" id="logo_path" name="logo_path"
                    accept="image/png, image/jpeg, image/webp" />
            @else
                <img src="{{ asset('storage/'. $site_settings->logo_path) }}" class="w-30 h-30" alt="logotipas">
                <label
                    for="logo_path"
                    class="cursor-pointer inline-block bg-gray-200 hover:bg-gray-300 text-sm text-black py-2 px-3 rounded">
                     Pasirinkti failą
                </label>
                <input type="file" id="logo_path" name="logo_path"
                    accept="image/png, image/jpeg, image/webp" />
            @endif
        </div>       
        <div class="flex w-full justify-center"> 
            <button
                type="submit"
                class="bg-gray-200 border rounded-sm border-t hover:bg-white mt-2 p-2">
                Išsaugoti
            </button>
        </div>

    </form>
</div>
@endsection
