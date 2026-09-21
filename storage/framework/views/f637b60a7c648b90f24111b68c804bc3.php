<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames((['home' => false]));

foreach ($attributes->all() as $__key => $__value) {
    if (in_array($__key, $__propNames)) {
        $$__key = $$__key ?? $__value;
    } else {
        $__newAttributes[$__key] = $__value;
    }
}

$attributes = new \Illuminate\View\ComponentAttributeBag($__newAttributes);

unset($__propNames);
unset($__newAttributes);

foreach (array_filter((['home' => false]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars, $__key, $__value); ?>

<?php
    $isHome = request()->routeIs('home');
    $isAbout = request()->is('tentang*') || request()->routeIs('facilities') || request()->routeIs('contact');
    $isSchool = request()->is('sekolah*') || request()->routeIs('academic') || request()->routeIs('achievements');
    $isActivity = request()->routeIs('news') || request()->is('berita*') || request()->routeIs('gallery') || request()->is('galeri*');
?>

<header
    x-data="{ open: false, activeMenu: null }"
    @keydown.escape.window="open = false; activeMenu = null"
    class="sticky top-0 z-50 border-b border-[#E8E6DC] bg-[#FAF9F5]/90 backdrop-blur-md transition-all"
    data-purpose="site-header"
>
    <div class="mx-auto flex h-20 max-w-7xl items-center justify-between gap-4 px-4 sm:px-6 lg:px-8">
        
        <a
            href="/"
            aria-label="Harapan Mulia Home"
            class="group flex shrink-0 items-center gap-3.5 focus:outline-none"
        >
            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(data_get($foundation?->data, 'logo')): ?>
                <div class="flex h-10 w-10 items-center justify-center overflow-hidden rounded-full bg-white shadow-sm ring-1 ring-black/5 transition-transform duration-300 group-hover:scale-105">
                    <img
                        src="<?php echo e(\App\Models\Content::mediaUrl($foundation->data['logo'])); ?>"
                        alt="Logo yayasan"
                        class="h-full w-full object-contain p-0.5"
                    >
                </div>
            <?php else: ?>
                <div
                    class="flex h-10 w-10 items-center justify-center rounded-full bg-forest text-lime shadow-sm transition-transform duration-300 group-hover:scale-105"
                    data-purpose="brand-logo"
                >
                    <svg
                        class="h-6 w-6 fill-none stroke-current stroke-[2.2]"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        viewBox="0 0 24 24"
                        aria-hidden="true"
                    >
                        <path d="M12 2a10 10 0 0 1 10 10c0 5.523-4.477 10-10 10a10 10 0 0 1-7.071-2.929"></path>
                        <path d="M12 6a6 6 0 0 1 6 6c0 3.314-2.686 6-6 6a6 6 0 0 1-4.243-1.757"></path>
                        <path d="M12 10a2 2 0 0 1 2 2c0 1.105-.895 2-2 2a2 2 0 0 1-1.414-.586"></path>
                    </svg>
                </div>
            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

            <div class="flex flex-col">
                <span class="text-xs font-semibold uppercase tracking-wider text-neutral-500">
                    Yayasan Pendidikan
                </span>
                <span class="text-base font-bold leading-none tracking-tight text-forest-dark">
                    <?php echo e(data_get($foundation?->data, 'short_name', 'Harapan Mulia')); ?>

                </span>
            </div>
        </a>

        
        <nav
            aria-label="Main Navigation"
            class="hidden items-center gap-6 text-sm font-medium text-neutral-700 lg:flex xl:gap-7"
        >
            <a
                href="/"
                <?php if($isHome): ?> aria-current="page" <?php endif; ?>
                class="<?php echo \Illuminate\Support\Arr::toCssClasses([
                    "relative transition-colors hover:text-forest",
                    "font-bold text-forest after:absolute after:-bottom-2 after:left-1/2 after:h-0.5 after:w-5 after:-translate-x-1/2 after:rounded-full after:bg-forest after:content-['']" => $isHome,
                ]); ?>"
            >
                Beranda
            </a>

            
            <div
                class="relative py-2"
                @mouseenter="activeMenu = 'about'"
                @mouseleave="activeMenu = null"
            >
                <button
                    type="button"
                    aria-haspopup="true"
                    :aria-expanded="activeMenu === 'about'"
                    @click="activeMenu = activeMenu === 'about' ? null : 'about'"
                    class="<?php echo \Illuminate\Support\Arr::toCssClasses([
                        'flex items-center gap-1.5 transition-colors focus:outline-none hover:text-forest',
                        'font-bold text-forest' => $isAbout,
                    ]); ?>"
                >
                    <span>Tentang Kami</span>
                    <svg
                        class="h-3.5 w-3.5 stroke-neutral-500 transition-all duration-200"
                        :class="activeMenu === 'about' ? 'rotate-180 stroke-[#174C3C]' : ''"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="2.5"
                        viewBox="0 0 24 24"
                        aria-hidden="true"
                    >
                        <path d="m6 9 6 6 6-6"></path>
                    </svg>
                </button>

                <div
                    x-cloak
                    x-show="activeMenu === 'about'"
                    x-transition:enter="transition ease-out duration-150"
                    x-transition:enter-start="opacity-0 -translate-y-1"
                    x-transition:enter-end="opacity-100 translate-y-0"
                    x-transition:leave="transition ease-in duration-100"
                    x-transition:leave-start="opacity-100 translate-y-0"
                    x-transition:leave-end="opacity-0 -translate-y-1"
                    class="absolute left-0 top-full z-50 w-56 pt-2"
                >
                    <div class="rounded-2xl border border-neutral-200/80 bg-white px-1.5 py-2.5 text-sm font-medium shadow-xl">
                        <a href="/tentang" class="block rounded-xl px-3.5 py-2 text-neutral-700 transition-colors hover:bg-forest-light hover:text-forest">Profil Yayasan</a>
                        <a href="/tentang/visi-misi" class="block rounded-xl px-3.5 py-2 text-neutral-700 transition-colors hover:bg-forest-light hover:text-forest">Visi &amp; Misi</a>
                        <a href="/fasilitas" class="block rounded-xl px-3.5 py-2 text-neutral-700 transition-colors hover:bg-forest-light hover:text-forest">Fasilitas Kampus Terpadu</a>
                        <a href="/kontak" class="block rounded-xl px-3.5 py-2 text-neutral-700 transition-colors hover:bg-forest-light hover:text-forest">Kontak &amp; Kunjungan</a>
                    </div>
                </div>
            </div>

            
            <div
                class="relative py-2"
                @mouseenter="activeMenu = 'school'"
                @mouseleave="activeMenu = null"
            >
                <button
                    type="button"
                    aria-haspopup="true"
                    :aria-expanded="activeMenu === 'school'"
                    @click="activeMenu = activeMenu === 'school' ? null : 'school'"
                    class="<?php echo \Illuminate\Support\Arr::toCssClasses([
                        'flex items-center gap-1.5 transition-colors focus:outline-none hover:text-forest',
                        'font-bold text-forest' => $isSchool,
                    ]); ?>"
                >
                    <span>Sekolah &amp; Akademik</span>
                    <svg
                        class="h-3.5 w-3.5 stroke-neutral-500 transition-all duration-200"
                        :class="activeMenu === 'school' ? 'rotate-180 stroke-[#174C3C]' : ''"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="2.5"
                        viewBox="0 0 24 24"
                        aria-hidden="true"
                    >
                        <path d="m6 9 6 6 6-6"></path>
                    </svg>
                </button>

                <div
                    x-cloak
                    x-show="activeMenu === 'school'"
                    x-transition:enter="transition ease-out duration-150"
                    x-transition:enter-start="opacity-0 -translate-y-1"
                    x-transition:enter-end="opacity-100 translate-y-0"
                    x-transition:leave="transition ease-in duration-100"
                    x-transition:leave-start="opacity-100 translate-y-0"
                    x-transition:leave-end="opacity-0 -translate-y-1"
                    class="absolute left-0 top-full z-50 w-96 pt-2"
                >
                    <div class="grid grid-cols-2 gap-2 rounded-2xl border border-neutral-200/80 bg-white p-3 text-sm font-medium shadow-xl">
                        <div class="p-1.5">
                            <span class="mb-2 block px-2 text-[11px] font-bold uppercase tracking-wider text-neutral-400">Unit Jenjang</span>
                            <a href="/sekolah/sd" class="block rounded-xl px-2.5 py-1.5 text-neutral-700 transition-colors hover:bg-forest-light hover:text-forest">SD Harapan Mulia</a>
                            <a href="/sekolah/smp" class="block rounded-xl px-2.5 py-1.5 text-neutral-700 transition-colors hover:bg-forest-light hover:text-forest">SMP Harapan Mulia</a>
                            <a href="/sekolah/sma" class="block rounded-xl px-2.5 py-1.5 text-neutral-700 transition-colors hover:bg-forest-light hover:text-forest">SMA Harapan Mulia</a>
                        </div>
                        <div class="border-l border-neutral-100 p-1.5">
                            <span class="mb-2 block px-2 text-[11px] font-bold uppercase tracking-wider text-neutral-400">Kurikulum &amp; Program</span>
                            <a href="/akademik" class="block rounded-xl px-2.5 py-1.5 text-neutral-700 transition-colors hover:bg-forest-light hover:text-forest">Kurikulum &amp; Akademik</a>
                            <a href="/prestasi" class="block rounded-xl px-2.5 py-1.5 text-neutral-700 transition-colors hover:bg-forest-light hover:text-forest">Rekam Prestasi Siswa</a>
                            <a href="/sekolah" class="block rounded-xl px-2.5 py-1.5 text-neutral-700 transition-colors hover:bg-forest-light hover:text-forest">Semua Unit Sekolah</a>
                        </div>
                    </div>
                </div>
            </div>

            
            <div
                class="relative py-2"
                @mouseenter="activeMenu = 'activity'"
                @mouseleave="activeMenu = null"
            >
                <button
                    type="button"
                    aria-haspopup="true"
                    :aria-expanded="activeMenu === 'activity'"
                    @click="activeMenu = activeMenu === 'activity' ? null : 'activity'"
                    class="<?php echo \Illuminate\Support\Arr::toCssClasses([
                        'flex items-center gap-1.5 transition-colors focus:outline-none hover:text-forest',
                        'font-bold text-forest' => $isActivity,
                    ]); ?>"
                >
                    <span>Kabar &amp; Aktivitas</span>
                    <svg
                        class="h-3.5 w-3.5 stroke-neutral-500 transition-all duration-200"
                        :class="activeMenu === 'activity' ? 'rotate-180 stroke-[#174C3C]' : ''"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="2.5"
                        viewBox="0 0 24 24"
                        aria-hidden="true"
                    >
                        <path d="m6 9 6 6 6-6"></path>
                    </svg>
                </button>

                <div
                    x-cloak
                    x-show="activeMenu === 'activity'"
                    x-transition:enter="transition ease-out duration-150"
                    x-transition:enter-start="opacity-0 -translate-y-1"
                    x-transition:enter-end="opacity-100 translate-y-0"
                    x-transition:leave="transition ease-in duration-100"
                    x-transition:leave-start="opacity-100 translate-y-0"
                    x-transition:leave-end="opacity-0 -translate-y-1"
                    class="absolute left-0 top-full z-50 w-64 pt-2"
                >
                    <div class="rounded-2xl border border-neutral-200/80 bg-white px-1.5 py-2.5 text-sm font-medium shadow-xl">
                        <a href="/berita" class="block rounded-xl px-3.5 py-2 text-neutral-700 transition-colors hover:bg-forest-light hover:text-forest">Warta &amp; Berita Terkini</a>
                        <a href="/galeri" class="block rounded-xl px-3.5 py-2 text-neutral-700 transition-colors hover:bg-forest-light hover:text-forest">Kehidupan Siswa &amp; Galeri</a>
                    </div>
                </div>
            </div>
        </nav>

        
        <div class="flex shrink-0 items-center gap-2 sm:gap-3.5">
            <a
                href="/cari"
                aria-label="Pencarian"
                class="flex h-10 w-10 items-center justify-center rounded-full text-neutral-600 transition-colors hover:bg-neutral-100 hover:text-forest"
            >
                <svg class="h-5 w-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true">
                    <circle cx="11" cy="11" r="8"></circle>
                    <path d="m21 21-4.3-4.3"></path>
                </svg>
            </a>

            <a
                href="/ppdb"
                class="hidden items-center gap-2 rounded-full border border-[#1b5e46] bg-[#0d3326] px-4 py-2.5 text-xs font-bold text-white shadow-md transition-all duration-200 hover:scale-[1.02] hover:bg-[#154a38] hover:shadow-lg sm:inline-flex xl:px-5 xl:text-sm"
            >
                <span>PPDB 2026/2027</span>
                <svg class="h-4 w-4 text-[#e2b04a]" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24" aria-hidden="true">
                    <path d="M5 12h14M12 5l7 7-7 7"></path>
                </svg>
            </a>

            <button
                type="button"
                @click="open = !open; activeMenu = null"
                :aria-expanded="open"
                aria-controls="mobile-menu"
                aria-label="Buka navigasi"
                class="flex h-10 w-10 items-center justify-center rounded-full text-neutral-700 transition-colors hover:bg-neutral-100 hover:text-forest lg:hidden"
            >
                <svg x-show="!open" class="h-6 w-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true">
                    <path d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
                <svg x-cloak x-show="open" class="h-6 w-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true">
                    <path d="M6 6l12 12M18 6 6 18"></path>
                </svg>
            </button>
        </div>
    </div>

    
    <nav
        id="mobile-menu"
        x-cloak
        x-show="open"
        aria-label="Navigasi mobile"
        class="border-t border-[#E8E6DC] bg-[#FAF9F5] px-4 pb-5 pt-3 sm:px-6 lg:hidden"
    >
        <div class="mx-auto max-h-[calc(100vh-6rem)] max-w-7xl space-y-1 overflow-y-auto">
            <a href="/" class="block rounded-xl px-4 py-3 text-sm font-semibold text-neutral-800 transition-colors hover:bg-forest-light hover:text-forest">Beranda</a>

            <details class="group rounded-2xl" @toggle="if ($event.target.open) { }">
                <summary class="flex cursor-pointer list-none items-center justify-between rounded-xl px-4 py-3 text-sm font-semibold text-neutral-800 transition-colors hover:bg-forest-light hover:text-forest">
                    <span>Tentang Kami</span>
                    <svg class="h-4 w-4 transition-transform group-open:rotate-180" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24" aria-hidden="true"><path d="m6 9 6 6 6-6"></path></svg>
                </summary>
                <div class="ml-3 border-l border-neutral-200 pl-3">
                    <a href="/tentang" class="block rounded-xl px-3 py-2 text-sm text-neutral-600 hover:bg-forest-light hover:text-forest">Profil Yayasan</a>
                    <a href="/tentang/visi-misi" class="block rounded-xl px-3 py-2 text-sm text-neutral-600 hover:bg-forest-light hover:text-forest">Visi &amp; Misi</a>
                    <a href="/fasilitas" class="block rounded-xl px-3 py-2 text-sm text-neutral-600 hover:bg-forest-light hover:text-forest">Fasilitas Kampus Terpadu</a>
                    <a href="/kontak" class="block rounded-xl px-3 py-2 text-sm text-neutral-600 hover:bg-forest-light hover:text-forest">Kontak &amp; Kunjungan</a>
                </div>
            </details>

            <details class="group rounded-2xl">
                <summary class="flex cursor-pointer list-none items-center justify-between rounded-xl px-4 py-3 text-sm font-semibold text-neutral-800 transition-colors hover:bg-forest-light hover:text-forest">
                    <span>Sekolah &amp; Akademik</span>
                    <svg class="h-4 w-4 transition-transform group-open:rotate-180" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24" aria-hidden="true"><path d="m6 9 6 6 6-6"></path></svg>
                </summary>
                <div class="ml-3 border-l border-neutral-200 pl-3">
                    <a href="/sekolah" class="block rounded-xl px-3 py-2 text-sm text-neutral-600 hover:bg-forest-light hover:text-forest">Semua Unit Sekolah</a>
                    <a href="/sekolah/sd" class="block rounded-xl px-3 py-2 text-sm text-neutral-600 hover:bg-forest-light hover:text-forest">SD Harapan Mulia</a>
                    <a href="/sekolah/smp" class="block rounded-xl px-3 py-2 text-sm text-neutral-600 hover:bg-forest-light hover:text-forest">SMP Harapan Mulia</a>
                    <a href="/sekolah/sma" class="block rounded-xl px-3 py-2 text-sm text-neutral-600 hover:bg-forest-light hover:text-forest">SMA Harapan Mulia</a>
                    <a href="/akademik" class="block rounded-xl px-3 py-2 text-sm text-neutral-600 hover:bg-forest-light hover:text-forest">Kurikulum &amp; Akademik</a>
                    <a href="/prestasi" class="block rounded-xl px-3 py-2 text-sm text-neutral-600 hover:bg-forest-light hover:text-forest">Rekam Prestasi Siswa</a>
                </div>
            </details>

            <details class="group rounded-2xl">
                <summary class="flex cursor-pointer list-none items-center justify-between rounded-xl px-4 py-3 text-sm font-semibold text-neutral-800 transition-colors hover:bg-forest-light hover:text-forest">
                    <span>Kabar &amp; Aktivitas</span>
                    <svg class="h-4 w-4 transition-transform group-open:rotate-180" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24" aria-hidden="true"><path d="m6 9 6 6 6-6"></path></svg>
                </summary>
                <div class="ml-3 border-l border-neutral-200 pl-3">
                    <a href="/berita" class="block rounded-xl px-3 py-2 text-sm text-neutral-600 hover:bg-forest-light hover:text-forest">Warta &amp; Berita Terkini</a>
                    <a href="/galeri" class="block rounded-xl px-3 py-2 text-sm text-neutral-600 hover:bg-forest-light hover:text-forest">Kehidupan Siswa &amp; Galeri</a>
                </div>
            </details>

            <a href="/ppdb" class="mt-3 flex items-center justify-center gap-2 rounded-full bg-[#0d3326] px-5 py-3 text-sm font-bold text-white shadow-md sm:hidden">
                <span>PPDB 2026/2027</span>
                <svg class="h-4 w-4 text-[#e2b04a]" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24" aria-hidden="true"><path d="M5 12h14M12 5l7 7-7 7"></path></svg>
            </a>
        </div>
    </nav>
</header>
<?php /**PATH /Users/ferdy/project-fl/yayasan/resources/views/components/navbar.blade.php ENDPATH**/ ?>