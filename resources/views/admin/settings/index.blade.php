@extends('layouts.admin')

@section('content')


<div class="w-full max-w-4xl mx-auto  bg-gray-50 rounded-md p-30 space-y-5">
    <h1 class="text-2xl font-semibold">
        Pagrindiniai puslapio nustatymai
    </h1>

    {{-- Sėkmės žinutė --}}
    @if(session('success'))
        <div id="success" class="bg-green-100 text-green-800 text-sm p-3 rounded">
            {{ session('success') }}
        </div>
    @endif

    {{-- Validacijos klaidos --}}
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

    <form action="{{ route('admin.site_settings.update') }}"
          method="POST"
          enctype="multipart/form-data"
          class="space-y-4">
        @csrf
        @method('PUT')

        {{-- Pavadinimas + meta title --}}
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div class="flex flex-col">
                <label for="site_name" class="text-sm text-gray-600">Puslapio pavadinimas</label>
                <input
                    id="site_name"
                    type="text"
                    name="site_name"
                    value="{{ old('site_name', $site_settings->site_name) }}"
                    class="w-full border rounded-sm bg-white p-1 @error('site_name') border-red-500 @enderror">
                @error('site_name')
                    <p class="text-xs text-red-600 mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="flex flex-col">
                <label for="meta_title" class="text-sm text-gray-600">Meta title</label>
                <input
                    id="meta_title"
                    type="text"
                    name="meta_title"
                    value="{{ old('meta_title', $site_settings->meta_title) }}"
                    class="w-full border rounded-sm bg-white p-1 @error('meta_title') border-red-500 @enderror">
                @error('meta_title')
                    <p class="text-xs text-red-600 mt-1">{{ $message }}</p>
                @enderror
            </div>
        </div>

        {{-- Meta description --}}
        <div class="flex flex-col">
            <label for="meta_description" class="text-sm text-gray-600">Meta description</label>
            <textarea
                id="meta_description"
                name="meta_description"
                rows="4"
                class="w-full border rounded-sm bg-white p-1 @error('meta_description') border-red-500 @enderror">{{ old('meta_description', $site_settings->meta_description) }}</textarea>
            @error('meta_description')
                <p class="text-xs text-red-600 mt-1">{{ $message }}</p>
            @enderror
        </div>

        {{-- SEO headingai --}}
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
            <div class="flex flex-col">
                <label for="heading_1" class="text-sm text-gray-600">H1 SEO</label>
                <input
                    id="heading_1"
                    type="text"
                    name="heading_1"
                    value="{{ old('heading_1', $site_settings->heading_1) }}"
                    class="w-full border rounded-sm bg-white p-1 @error('heading_1') border-red-500 @enderror">
                @error('heading_1')
                    <p class="text-xs text-red-600 mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="flex flex-col">
                <label for="heading_2" class="text-sm text-gray-600">H2 SEO</label>
                <input
                    id="heading_2"
                    type="text"
                    name="heading_2"
                    value="{{ old('heading_2', $site_settings->heading_2) }}"
                    class="w-full border rounded-sm bg-white p-1 @error('heading_2') border-red-500 @enderror">
                @error('heading_2')
                    <p class="text-xs text-red-600 mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="flex flex-col">
                <label for="heading_3" class="text-sm text-gray-600">H3 SEO</label>
                <input
                    id="heading_3"
                    type="text"
                    name="heading_3"
                    value="{{ old('heading_3', $site_settings->heading_3) }}"
                    class="w-full border rounded-sm bg-white p-1 @error('heading_3') border-red-500 @enderror">
                @error('heading_3')
                    <p class="text-xs text-red-600 mt-1">{{ $message }}</p>
                @enderror
            </div>
        </div>

        {{-- Footer tekstas --}}
        <div class="flex flex-col">
            <label for="footer_text" class="text-sm text-gray-600">Footer tekstas</label>
            <input
                id="footer_text"
                type="text"
                name="footer_text"
                value="{{ old('footer_text', $site_settings->footer_text) }}"
                class="w-full border rounded-sm bg-white p-1 @error('footer_text') border-red-500 @enderror">
            @error('footer_text')
                <p class="text-xs text-red-600 mt-1">{{ $message }}</p>
            @enderror
        </div>

        {{-- Kontaktai --}}
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div class="flex flex-col">
                <label for="phone" class="text-sm text-gray-600">Tel. nr.</label>
                <input
                    id="phone"
                    type="tel"
                    name="phone"
                    value="{{ old('phone', $site_settings->phone) }}"
                    class="w-full border rounded-sm bg-white p-1 @error('phone') border-red-500 @enderror">
                @error('phone')
                    <p class="text-xs text-red-600 mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="flex flex-col">
                <label for="email" class="text-sm text-gray-600">El. paštas</label>
                <input
                    id="email"
                    type="email"
                    name="email"
                    value="{{ old('email', $site_settings->email) }}"
                    class="w-full border rounded-sm bg-white p-1 @error('email') border-red-500 @enderror">
                @error('email')
                    <p class="text-xs text-red-600 mt-1">{{ $message }}</p>
                @enderror
            </div>
        </div>

        {{-- Adresas --}}
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div class="flex flex-col">
                <label for="city" class="text-sm text-gray-600">Miestas</label>
                <input
                    id="city"
                    type="text"
                    name="city"
                    value="{{ old('city', $site_settings->city) }}"
                    class="w-full border rounded-sm bg-white p-1 @error('city') border-red-500 @enderror">
                @error('city')
                    <p class="text-xs text-red-600 mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="flex flex-col">
                <label for="country" class="text-sm text-gray-600">Šalis</label>
                <input
                    id="country"
                    type="text"
                    name="country"
                    value="{{ old('country', $site_settings->country) }}"
                    class="w-full border rounded-sm bg-white p-1 @error('country') border-red-500 @enderror">
                @error('country')
                    <p class="text-xs text-red-600 mt-1">{{ $message }}</p>
                @enderror
            </div>
        </div>

        <div class="flex flex-col">
            <label for="address" class="text-sm text-gray-600">Pilnas adresas</label>
            <input
                id="address"
                type="text"
                name="address"
                value="{{ old('address', $site_settings->address) }}"
                class="w-full border rounded-sm bg-white p-1 @error('address') border-red-500 @enderror">
            @error('address')
                <p class="text-xs text-red-600 mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="flex flex-col">
            <label for="working_hours" class="text-sm text-gray-600">Darbo valandos</label>
            <input
                id="working_hours"
                type="text"
                name="working_hours"
                value="{{ old('working_hours', $site_settings->working_hours) }}"
                class="w-full border rounded-sm bg-white p-1 @error('working_hours') border-red-500 @enderror">
            @error('working_hours')
                <p class="text-xs text-red-600 mt-1">{{ $message }}</p>
            @enderror
        </div>

        {{-- Socialai --}}
        <div class="flex flex-col">
            <label for="facebook" class="text-sm text-gray-600">Facebook URL</label>
            <input
                id="facebook"
                type="text"
                name="facebook"
                value="{{ old('facebook', $site_settings->facebook) }}"
                class="w-full border rounded-sm bg-white p-1 @error('facebook') border-red-500 @enderror">
            @error('facebook')
                <p class="text-xs text-red-600 mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="flex flex-col">
            <label for="instagram" class="text-sm text-gray-600">Instagram URL</label>
            <input
                id="instagram"
                type="text"
                name="instagram"
                value="{{ old('instagram', $site_settings->instagram) }}"
                class="w-full border rounded-sm bg-white p-1 @error('instagram') border-red-500 @enderror">
            @error('instagram')
                <p class="text-xs text-red-600 mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="flex flex-col">
            <label for="tiktok" class="text-sm text-gray-600">TikTok URL</label>
            <input
                id="tiktok"
                type="text"
                name="tiktok"
                value="{{ old('tiktok', $site_settings->tiktok) }}"
                class="w-full border rounded-sm bg-white p-1 @error('tiktok') border-red-500 @enderror">
            @error('tiktok')
                <p class="text-xs text-red-600 mt-1">{{ $message }}</p>
            @enderror
        </div>

        {{-- Logotipas --}}
        <div class="flex flex-col space-y-2">
            <span class="text-sm text-gray-600">Logotipas</span>

            @if($site_settings->logo_path)
                <div class="flex items-center gap-4">
                    <img
                        src="{{ asset('storage/' . $site_settings->logo_path) }}"
                        class="w-24 h-auto border rounded bg-white"
                        alt="logotipas">
                </div>
            @endif

            <div>
                <label
                    for="logo"
                    class="cursor-pointer inline-block bg-gray-200 hover:bg-gray-300 text-sm text-black py-2 px-3 rounded">
                    Pasirinkti failą
                </label>
                <input
                    type="file"
                    id="logo"
                    name="logo"
                    class="hidden"
                    accept="image/png,image/jpeg,image/webp,image/svg+xml">
                @error('logo')
                    <p class="text-xs text-red-600 mt-1">{{ $message }}</p>
                @enderror
            </div>
        </div>

        {{-- Submit --}}
        <div class="flex w-full justify-center">
            <button
                type="submit"
                class="bg-gray-800 text-white border border-gray-900 rounded-sm hover:bg-black mt-2 py-2 px-6 text-sm">
                Išsaugoti
            </button>
        </div>
    </form>
</div>


<!-- panaikinam success po 3sec -->
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

@endsection
