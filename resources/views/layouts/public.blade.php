@php
    $seo = $item ?? ($page ?? null);
    $title = $seo?->meta_title ?: ($seo?->title ?: 'Pencarian — Harapan Mulia');
    $description = $seo?->meta_description ?: ($seo?->description ?: $foundation?->description);
    $ogImage = $seo?->image_url ?: (isset($page) ? $page->media('image_1') : '');
    $isHome = request()->routeIs('home');
@endphp
<!DOCTYPE html>
<html lang="id" class="scroll-smooth motion-reduce:scroll-auto">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title }}</title>
    <meta name="description" content="{{ $description }}">
    <link rel="canonical" href="{{ url()->current() }}">
    <meta property="og:title" content="{{ $title }}">
    <meta property="og:description" content="{{ $description }}">
    <meta property="og:image" content="{{ $ogImage }}">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:type" content="{{ ($kind ?? '') === 'berita' ? 'article' : 'website' }}">
    <meta property="og:locale" content="id_ID">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Caveat:wght@600;700&family=Manrope:wght@400;500;600;700;800&family=Newsreader:ital,opsz,wght@0,6..72,400;0,6..72,500;0,6..72,600;0,6..72,700;1,6..72,400;1,6..72,600&family=Material+Symbols+Outlined:wght@400&display=swap"
        rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @php
        $schema = [
            '@context' => 'https://schema.org',
            '@type' => isset($school) ? 'School' : (($kind ?? '') === 'berita' ? 'Article' : 'Organization'),
            'name' => $title,
            'url' => url()->current(),
            'description' => $description,
        ];
        if (($kind ?? '') === 'berita') {
            $schema += [
                'headline' => $item->title,
                'datePublished' => $item->published_at?->toIso8601String(),
                'author' => ['@type' => 'Person', 'name' => data_get($item->data, 'author', 'Tim Redaksi')],
            ];
        }
    @endphp
    <script type="application/ld+json">{!! json_encode($schema, JSON_HEX_TAG | JSON_HEX_AMP | JSON_HEX_APOS | JSON_HEX_QUOT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES) !!}</script>
    @if (config('services.analytics.measurement_id'))
        <script async src="https://www.googletagmanager.com/gtag/js?id={{ config('services.analytics.measurement_id') }}">
        </script>
        <script>
            window.dataLayer = window.dataLayer || [];

            function gtag() {
                dataLayer.push(arguments)
            }
            gtag('js', new Date());
            gtag('config', @json(config('services.analytics.measurement_id')));
        </script>
    @endif
    @if (config('services.analytics.search_console'))
        <meta name="google-site-verification" content="{{ config('services.analytics.search_console') }}">
    @endif
</head>

<body
    class="min-h-screen overflow-x-hidden font-sans antialiased {{ $isHome ? 'pb-0 bg-cream text-neutral-800 selection:bg-lime/60 selection:text-forest-dark' : 'pb-16 bg-cream text-on-surface selection:bg-lime/60 lg:pb-0' }}"
    x-data="portal">
    <a href="#main-content"
        class="sr-only focus:not-sr-only focus:fixed focus:top-2 focus:left-2 focus:z-[100] focus:bg-white focus:p-4 focus:rounded-xl">Lewati
        ke konten utama</a>
    <x-navbar :home="$isHome" />
    @if (session('success'))
        <div role="status"
            class="fixed z-50 max-w-xl p-5 mx-auto text-white shadow-lg top-24 left-4 right-4 rounded-2xl bg-forest">
            {{ session('success') }}</div>
    @endif
    @if ($errors->any())
        <div role="alert"
            class="relative z-40 max-w-3xl p-5 mx-auto mt-24 rounded-xl bg-error-container text-on-error-container">
            <p>Periksa kembali isian Anda.</p>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    @yield('content')
    @if (isset($school))
        <x-school-information :school="$school" />
    @endif
    <x-footer />
    @unless ($isHome)
        <div
            class="fixed inset-x-0 bottom-0 z-40 flex items-center justify-between px-5 py-3 border-t border-sage-border bg-cream/95 backdrop-blur lg:hidden">
            <a href="/sekolah" class="text-sm font-semibold text-forest">Unit Sekolah</a><a href="/ppdb"
                class="px-5 py-2 text-sm font-bold rounded-full bg-lime text-forest-dark">Informasi PPDB →</a>
        </div>
    @endunless
    <div x-cloak x-show="lightbox" x-trap.inert.noscroll="lightbox" @keydown.escape.window="lightbox = null"
        @click.self="lightbox = null"
        class="fixed inset-0 z-[100] flex items-center justify-center bg-forest-night/95 p-6" role="dialog"
        aria-modal="true" aria-label="Pratinjau foto"><button @click="lightbox = null"
            class="absolute px-4 py-2 bg-white rounded-full right-6 top-6 text-forest" aria-label="Tutup foto">Tutup
            ×</button><img :src="lightbox" alt="Foto galeri pilihan"
            class="max-h-[85vh] max-w-full object-contain"></div>
</body>

</html>
