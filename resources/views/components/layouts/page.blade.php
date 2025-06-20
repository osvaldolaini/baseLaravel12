<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ trim($__env->yieldContent('title')) ?: $settings->site_title ?? 'Título Padrão' }}</title>
    <meta name="description"
        content="{{ trim($__env->yieldContent('meta_description')) ?: $settings->site_description ?? 'Descrição padrão' }}">
    <meta name="keywords"
        content="{{ trim($__env->yieldContent('meta_keywords')) ?: $settings->site_keywords ?? 'palavras-chave, padrão' }}">
    <meta property="og:title"
        content="{{ trim($__env->yieldContent('title')) ?: $settings->site_title ?? 'Título Padrão' }}">
    <meta property="og:description"
        content="{{ trim($__env->yieldContent('meta_description')) ?: $settings->site_description ?? 'Descrição padrão' }}">
    <meta property="og:image"
        content="{{ trim($__env->yieldContent('meta_image')) ?: asset('images/seo-default.jpg') }}">


    <x-layouts.page.favicons></x-layouts.page.favicons>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @livewireStyles
</head>

<body class="bg-gray-50 text-gray-900 flex flex-col min-h-screen">

    {{-- Barra de contatos --}}
    <x-layouts.page.contact-bar />
    {{-- Menu superior --}}
    <div class="sticky top-0 z-50">
        <x-layouts.page.header />
    </div>
    {{-- Conteúdo principal --}}
    <main class="flex-grow container mx-auto px-4 py-8">
        @yield('content')
    </main>
    {{-- Rodapé --}}
    <x-layouts.page.footer />

    @livewireScripts
</body>

</html>
