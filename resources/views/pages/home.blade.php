@extends('layouts.public')
@section('content')
    <main class="" id="main-content">

        <section class="relative pt-8 pb-16 overflow-hidden lg:pt-14 lg:pb-24 bg-cream" data-purpose="hero-section"
            id="beranda">
            <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div class="grid items-center grid-cols-1 gap-10 lg:grid-cols-12 lg:gap-8">

                    <div class="z-20 lg:col-span-6 lg:-mr-8"><span
                            class="inline-block text-xs font-bold tracking-[0.2em] text-neutral-500 uppercase mb-3"
                            data-purpose="eyebrow">{{ $page->text('text_1') }}</span>
                        <h1
                            class="font-serif text-5xl sm:text-6xl lg:text-[76px] leading-[1.05] tracking-tight font-semibold text-neutral-900 mb-6">
                            {{ $page->text('text_2') }}<br class="" />{{ $page->text('text_3') }}</h1>
                        <p class="max-w-lg mb-8 text-base font-normal leading-relaxed sm:text-lg text-neutral-600">
                            {{ $page->text('text_4') }}</p>
                        <div class="flex flex-wrap items-center gap-3.5 mb-12"><a
                                class="inline-flex items-center gap-2.5 px-6 py-3.5 rounded-full bg-forest text-white text-sm font-semibold hover:bg-forest-dark transition-all duration-300 shadow-sm hover:scale-[1.02]"
                                href="/sekolah"><span class="">{{ $page->text('text_5') }}</span><svg class="w-4 h-4"
                                    fill="none" stroke="currentColor" stroke-width="2.5" viewbox="0 0 24 24">
                                    <path class="" d="M5 12h14M12 5l7 7-7 7"></path>
                                </svg></a><a
                                class="inline-flex items-center px-6 py-3.5 rounded-full border border-neutral-300 bg-transparent text-neutral-800 text-sm font-semibold hover:border-neutral-400 hover:bg-black/5 transition-all"
                                href="/tentang">{{ $page->text('text_6') }}</a></div>
                        <div class="grid grid-cols-4 gap-3 pt-6 border-t border-neutral-200/80 sm:gap-6"
                            data-purpose="stats-strip">
                            <div class="">
                                <div class="font-serif text-2xl font-bold sm:text-3xl text-neutral-900">
                                    {{ $page->text('text_7') }}</div>
                                <div
                                    class="text-[11px] sm:text-xs text-neutral-500 uppercase font-medium tracking-tight mt-0.5">
                                    {{ $page->text('text_8') }}</div>
                            </div>
                            <div class="pl-3 border-l border-neutral-200 sm:pl-6">
                                <div class="font-serif text-2xl font-bold sm:text-3xl text-neutral-900">
                                    {{ $page->text('text_9') }}</div>
                                <div
                                    class="text-[11px] sm:text-xs text-neutral-500 uppercase font-medium tracking-tight mt-0.5">
                                    {{ $page->text('text_10') }}</div>
                            </div>
                            <div class="pl-3 border-l border-neutral-200 sm:pl-6">
                                <div class="font-serif text-2xl font-bold sm:text-3xl text-neutral-900">
                                    {{ $page->text('text_11') }}</div>
                                <div
                                    class="text-[11px] sm:text-xs text-neutral-500 uppercase font-medium tracking-tight mt-0.5">
                                    {{ $page->text('text_12') }}</div>
                            </div>
                            <div class="pl-3 border-l border-neutral-200 sm:pl-6">
                                <div class="font-serif text-2xl font-bold sm:text-3xl text-neutral-900">
                                    {{ $page->text('text_13') }}</div>
                                <div
                                    class="text-[11px] sm:text-xs text-neutral-500 uppercase font-medium tracking-tight mt-0.5">
                                    {{ $page->text('text_14') }}</div>
                            </div>
                        </div>
                    </div>

                    <div class="relative flex justify-center lg:col-span-6 lg:justify-end" data-purpose="hero-imagery">
                        <div class="relative w-full max-w-[560px] h-[520px] sm:h-[580px] flex items-center justify-center">
                            <div
                                class="absolute rounded-full pointer-events-none -inset-4 bg-gradient-to-tr from-lime/20 via-forest-light/40 to-transparent blur-2xl opacity-80">
                            </div>
                            <div class="relative w-full h-full overflow-hidden"
                                style="mask-image: radial-gradient(ellipse at 60% 50%, black 50%, rgba(0,0,0,0.85) 65%, transparent 95%), linear-gradient(to right, transparent 0%, rgba(0,0,0,0.6) 18%, black 40%); -webkit-mask-image: radial-gradient(ellipse at 60% 50%, black 50%, rgba(0,0,0,0.85) 65%, transparent 95%), linear-gradient(to right, transparent 0%, rgba(0,0,0,0.6) 18%, black 40%); -webkit-mask-composite: source-in; mask-composite: intersect;">
                                <img alt="Siswa-siswi SMA Harapan Mulia berdiskusi di sekolah"
                                    class="object-cover object-top w-full h-full" decoding="async" fetchpriority="high"
                                    loading="eager" src="{{ $page->media('image_1') }}" />
                                <div
                                    class="absolute inset-0 bg-gradient-to-r from-[#FAF9F5] via-transparent to-transparent pointer-events-none w-1/3">
                                </div>
                                <div
                                    class="absolute inset-x-0 bottom-0 h-24 bg-gradient-to-t from-[#FAF9F5] via-[#FAF9F5]/60 to-transparent pointer-events-none">
                                </div>
                            </div>
                            <div
                                class="absolute -top-3 right-4 sm:right-6 bg-white px-4 py-2 rounded-2xl shadow-xl border-2 border-[#0d3326] transform rotate-2 max-w-[190px] z-10">
                                <p class="font-handwriting text-[#0d3326] text-lg sm:text-xl font-bold leading-tight">
                                    {{ $page->text('text_15') }}</p>
                            </div>
                            <div
                                class="absolute z-10 flex items-center gap-3 px-4 py-3 bg-white border shadow-2xl -bottom-4 -left-3 sm:-left-6 rounded-2xl border-neutral-200">
                                <div
                                    class="w-10 h-10 rounded-[0.75rem] bg-[#0d3326] text-[#e2b04a] flex items-center justify-center font-bold shadow-sm">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2.5"
                                        viewbox="0 0 24 24">
                                        <path class=""
                                            d="M12 2a10 10 0 0 1 10 10c0 5.523-4.477 10-10 10a10 10 0 0 1-7.071-2.929">
                                        </path>
                                        <path class="" d="M12 6a6 6 0 0 1 6 6"></path>
                                    </svg></div>
                                <div class="text-[11px] leading-snug font-semibold text-neutral-800"><span
                                        class="text-[#0d3326] font-bold text-xs uppercase tracking-wider block">{{ $page->text('text_16') }}</span>{{ $page->text('text_17') }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="py-20 bg-white" data-purpose="unit-pendidikan-section" id="unit-pendidikan">
            <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">

                <div class="flex flex-col justify-between gap-6 mb-12 md:flex-row md:items-end">
                    <div class="">
                        <span
                            class="text-xs font-bold tracking-[0.2em] text-neutral-400 uppercase">{{ $page->text('text_18') }}</span>
                        <h2 class="mt-2 font-serif text-3xl font-semibold sm:text-4xl lg:text-5xl text-neutral-900">
                            {{ $page->text('text_19') }}<br class="" />{{ $page->text('text_20') }}</h2>
                    </div>
                    <div class="max-w-md">
                        <p class="mb-3 text-sm leading-relaxed text-neutral-600 sm:text-base">{{ $page->text('text_21') }}
                        </p>
                        <a class="inline-flex items-center gap-1.5 text-sm font-bold text-forest hover:text-forest-dark group"
                            href="/sekolah">
                            <span class="">{{ $page->text('text_22') }}</span>
                            <svg class="w-4 h-4 transition-transform group-hover:translate-x-1" fill="none"
                                stroke="currentColor" stroke-width="2" viewbox="0 0 24 24">
                                <path class="" d="M5 12h14M12 5l7 7-7 7"></path>
                            </svg>
                        </a>
                    </div>
                </div>

                <div class="grid grid-cols-1 gap-8 md:grid-cols-3">
                    <div class="group bg-[#FAF9F5] rounded-3xl overflow-hidden border border-neutral-300/80 shadow-sm hover:shadow-xl hover:border-[#0d3326]/40 transition-all duration-300 flex flex-col"
                        id="unit-sd">
                        <div class="relative overflow-hidden h-60">
                            <img alt="Siswa Sekolah Dasar Harapan Mulia ceria belajar di kelas"
                                class="object-cover w-full h-full transition-transform duration-500 group-hover:scale-105"
                                decoding="async" loading="lazy" src="{{ $page->media('image_2') }}" />
                            <span
                                class="absolute top-4 left-4 px-3.5 py-1 rounded-full bg-[#0d3326] text-white text-xs font-bold shadow-md border border-[#205e4c]">{{ $page->text('text_23') }}</span>
                        </div>
                        <div class="flex flex-col justify-between flex-1 p-6">
                            <div class="">
                                <div class="flex items-center gap-3 mb-3">
                                    <div
                                        class="w-10 h-10 rounded-full bg-[#0d3326] text-white flex items-center justify-center text-xs font-extrabold shadow-sm">
                                        {{ $page->text('text_24') }}</div>
                                    <div class="">
                                        <h3 class="text-base font-bold text-neutral-900">{{ $page->text('text_25') }}</h3>
                                        <p class="text-xs font-medium text-neutral-500">{{ $page->text('text_26') }}</p>
                                    </div>
                                </div>
                                <p class="mb-6 text-sm font-normal leading-relaxed text-neutral-700">
                                    {{ $page->text('text_27') }}</p>
                            </div>
                            <a class="inline-flex items-center gap-1.5 text-xs sm:text-sm font-bold text-[#0d3326] group-hover:text-[#124032] group-hover:underline"
                                href="/kontak">
                                <span class="">{{ $page->text('text_28') }}</span>
                                <svg class="w-4 h-4 transition-transform group-hover:translate-x-1" fill="none"
                                    stroke="currentColor" stroke-width="2.5" viewbox="0 0 24 24">
                                    <path class="" d="M5 12h14M12 5l7 7-7 7"></path>
                                </svg>
                            </a>
                        </div>
                    </div>

                    <div class="group bg-[#FAF9F5] rounded-3xl overflow-hidden border border-neutral-300/80 shadow-sm hover:shadow-xl hover:border-[#0d3326]/40 transition-all duration-300 flex flex-col"
                        id="unit-smp">
                        <div class="relative overflow-hidden h-60">
                            <img alt="Siswa Sekolah Menengah Pertama berdiskusi kelompok"
                                class="object-cover w-full h-full transition-transform duration-500 group-hover:scale-105"
                                decoding="async" loading="lazy" src="{{ $page->media('image_3') }}" />
                            <span
                                class="absolute top-4 left-4 px-3.5 py-1 rounded-full bg-[#0d3326] text-white text-xs font-bold shadow-md border border-[#205e4c]">{{ $page->text('text_29') }}</span>
                        </div>
                        <div class="flex flex-col justify-between flex-1 p-6">
                            <div class="">
                                <div class="flex items-center gap-3 mb-3">
                                    <div
                                        class="w-10 h-10 rounded-full bg-[#0d3326] text-white flex items-center justify-center text-xs font-extrabold shadow-sm">
                                        {{ $page->text('text_30') }}</div>
                                    <div class="">
                                        <h3 class="text-base font-bold text-neutral-900">{{ $page->text('text_31') }}</h3>
                                        <p class="text-xs font-medium text-neutral-500">{{ $page->text('text_32') }}</p>
                                    </div>
                                </div>
                                <p class="mb-6 text-sm font-normal leading-relaxed text-neutral-700">
                                    {{ $page->text('text_33') }}</p>
                            </div>
                            <a class="inline-flex items-center gap-1.5 text-xs sm:text-sm font-bold text-[#0d3326] group-hover:text-[#124032] group-hover:underline"
                                href="/kontak">
                                <span class="">{{ $page->text('text_34') }}</span>
                                <svg class="w-4 h-4 transition-transform group-hover:translate-x-1" fill="none"
                                    stroke="currentColor" stroke-width="2.5" viewbox="0 0 24 24">
                                    <path class="" d="M5 12h14M12 5l7 7-7 7"></path>
                                </svg>
                            </a>
                        </div>
                    </div>

                    <div class="group bg-[#FAF9F5] rounded-3xl overflow-hidden border border-neutral-300/80 shadow-sm hover:shadow-xl hover:border-[#0d3326]/40 transition-all duration-300 flex flex-col"
                        id="unit-sma">
                        <div class="relative overflow-hidden h-60">
                            <img alt="Siswa Sekolah Menengah Atas dengan seragam rapi"
                                class="object-cover w-full h-full transition-transform duration-500 group-hover:scale-105"
                                decoding="async" loading="lazy" src="{{ $page->media('image_4') }}" />
                            <span
                                class="absolute top-4 left-4 px-3.5 py-1 rounded-full bg-[#0d3326] text-white text-xs font-bold shadow-md border border-[#c27803]">{{ $page->text('text_35') }}</span>
                        </div>
                        <div class="flex flex-col justify-between flex-1 p-6">
                            <div class="">
                                <div class="flex items-center gap-3 mb-3">
                                    <div
                                        class="w-10 h-10 rounded-full bg-[#0d3326] text-white flex items-center justify-center text-xs font-extrabold shadow-sm">
                                        {{ $page->text('text_36') }}</div>
                                    <div class="">
                                        <h3 class="text-base font-bold text-neutral-900">{{ $page->text('text_37') }}</h3>
                                        <p class="text-xs font-medium text-neutral-500">{{ $page->text('text_38') }}</p>
                                    </div>
                                </div>
                                <p class="mb-6 text-sm font-normal leading-relaxed text-neutral-700">
                                    {{ $page->text('text_39') }}</p>
                            </div>
                            <a class="inline-flex items-center gap-1.5 text-xs sm:text-sm font-bold text-[#0d3326] group-hover:text-[#124032] group-hover:underline"
                                href="/kontak">
                                <span class="">{{ $page->text('text_40') }}</span>
                                <svg class="w-4 h-4 transition-transform group-hover:translate-x-1" fill="none"
                                    stroke="currentColor" stroke-width="2.5" viewbox="0 0 24 24">
                                    <path class="" d="M5 12h14M12 5l7 7-7 7"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="relative py-20 bg-cream-soft" data-purpose="why-choose-us" id="tentang-kami">
            <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div
                    class="bg-[#0b281e] text-white rounded-[36px] overflow-hidden shadow-2xl border border-[#1b5e46] grid grid-cols-1 lg:grid-cols-12">

                    <div class="flex flex-col justify-between p-8 lg:col-span-7 sm:p-12 lg:p-14">
                        <div class="">
                            <span
                                class="text-xs font-extrabold tracking-[0.2em] text-[#e2b04a] uppercase">{{ $page->text('text_41') }}</span>
                            <h2
                                class="mt-2 mb-4 font-serif text-3xl font-semibold leading-tight text-white sm:text-4xl lg:text-5xl">
                                {{ $page->text('text_42') }}</h2>
                            <p class="max-w-xl mb-8 text-sm font-normal leading-relaxed text-neutral-200 sm:text-base">
                                {{ $page->text('text_43') }}</p>

                            <div class="grid grid-cols-1 gap-4 mb-8 sm:grid-cols-2 sm:gap-6">

                                <div
                                    class="p-5 transition-colors border rounded-2xl bg-white/10 border-white/15 hover:bg-white/15">
                                    <div
                                        class="w-10 h-10 rounded-[0.75rem] bg-[#e2b04a] text-[#0b281e] flex items-center justify-center mb-3 shadow-md font-bold">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2.5"
                                            viewbox="0 0 24 24">
                                            <path class=""
                                                d="M19 14c1.49-1.46 3-3.21 3-5.5A5.5 5.5 0 0 0 16.5 3c-1.76 0-3 .5-4.5 2-1.5-1.5-2.74-2-4.5-2A5.5 5.5 0 0 0 2 8.5c0 2.3 1.5 4.05 3 5.5l7 7Z">
                                            </path>
                                        </svg>
                                    </div>
                                    <h4 class="mb-1 text-sm font-bold text-white">{{ $page->text('text_44') }}</h4>
                                    <p class="text-xs font-normal leading-normal text-neutral-300">
                                        {{ $page->text('text_45') }}</p>
                                </div>

                                <div
                                    class="p-5 transition-colors border rounded-2xl bg-white/10 border-white/15 hover:bg-white/15">
                                    <div
                                        class="w-10 h-10 rounded-[0.75rem] bg-[#e2b04a] text-[#0b281e] flex items-center justify-center mb-3 shadow-md font-bold">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2.5"
                                            viewbox="0 0 24 24">
                                            <path class="" d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                                            <polyline class="" points="9 22 9 12 15 12 15 22"></polyline>
                                        </svg>
                                    </div>
                                    <h4 class="mb-1 text-sm font-bold text-white">{{ $page->text('text_46') }}</h4>
                                    <p class="text-xs font-normal leading-normal text-neutral-300">
                                        {{ $page->text('text_47') }}</p>
                                </div>

                                <div
                                    class="p-5 transition-colors border rounded-2xl bg-white/10 border-white/15 hover:bg-white/15">
                                    <div
                                        class="w-10 h-10 rounded-[0.75rem] bg-[#e2b04a] text-[#0b281e] flex items-center justify-center mb-3 shadow-md font-bold">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2.5"
                                            viewbox="0 0 24 24">
                                            <circle class="" cx="12" cy="7" r="4"></circle>
                                            <path class="" d="M6 21v-2a4 4 0 0 1 4-4h4a4 4 0 0 1 4 4v2"></path>
                                        </svg>
                                    </div>
                                    <h4 class="mb-1 text-sm font-bold text-white">{{ $page->text('text_48') }}</h4>
                                    <p class="text-xs font-normal leading-normal text-neutral-300">
                                        {{ $page->text('text_49') }}</p>
                                </div>

                                <div
                                    class="p-5 transition-colors border rounded-2xl bg-white/10 border-white/15 hover:bg-white/15">
                                    <div
                                        class="w-10 h-10 rounded-[0.75rem] bg-[#e2b04a] text-[#0b281e] flex items-center justify-center mb-3 shadow-md font-bold">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2.5"
                                            viewbox="0 0 24 24">
                                            <polygon class=""
                                                points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                                            </polygon>
                                        </svg>
                                    </div>
                                    <h4 class="mb-1 text-sm font-bold text-white">{{ $page->text('text_50') }}</h4>
                                    <p class="text-xs font-normal leading-normal text-neutral-300">
                                        {{ $page->text('text_51') }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="">
                            <a class="inline-flex items-center gap-2 px-6 py-3 rounded-full bg-white text-[#0b281e] text-sm font-bold hover:bg-[#FAF9F5] shadow-lg transition-all duration-300"
                                href="/tentang">
                                <span class="">{{ $page->text('text_52') }}</span>
                                <svg class="w-4 h-4 text-[#0b281e]" fill="none" stroke="currentColor"
                                    stroke-width="2.5" viewbox="0 0 24 24">
                                    <path class="" d="M5 12h14M12 5l7 7-7 7"></path>
                                </svg>
                            </a>
                        </div>
                    </div>

                    <div class="lg:col-span-5 relative min-h-[380px] lg:min-h-full">
                        <img alt="Gedung Kampus Modern Yayasan Pendidikan Harapan Mulia"
                            class="object-cover w-full h-full" decoding="async" loading="lazy"
                            src="{{ $page->media('image_5') }}" />
                        <div
                            class="absolute inset-0 bg-gradient-to-t from-[#0b281e]/80 via-transparent to-transparent lg:hidden">
                        </div>

                        <div
                            class="absolute bottom-6 right-6 lg:bottom-10 lg:right-8 bg-[#0b281e]/90 backdrop-blur-md px-5 py-3 rounded-2xl border border-white/30 shadow-2xl">
                            <span
                                class="text-xl font-bold tracking-wide text-white font-handwriting sm:text-2xl">{{ $page->text('text_53') }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="py-20 bg-[#FAF9F5] border-y border-neutral-200/80" data-purpose="featured-programs"
            id="akademik">
            <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">

                <div class="flex flex-col justify-between gap-6 mb-12 md:flex-row md:items-end">
                    <div class="">
                        <span
                            class="text-xs font-bold tracking-[0.2em] text-neutral-500 uppercase">{{ $page->text('text_54') }}</span>
                        <h2 class="mt-2 font-serif text-3xl font-semibold sm:text-4xl lg:text-5xl text-neutral-900">
                            {{ $page->text('text_55') }}<br class="" />{{ $page->text('text_56') }}</h2>
                    </div>
                    <a class="inline-flex items-center gap-1.5 text-sm font-bold text-[#0d3326] hover:text-[#124032] group"
                        href="/kontak">
                        <span class="">{{ $page->text('text_57') }}</span>
                        <svg class="w-4 h-4 transition-transform group-hover:translate-x-1" fill="none"
                            stroke="currentColor" stroke-width="2" viewbox="0 0 24 24">
                            <path class="" d="M5 12h14M12 5l7 7-7 7"></path>
                        </svg>
                    </a>
                </div>

                <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-4">

                    <div
                        class="bg-white rounded-3xl overflow-hidden border border-neutral-200 shadow-sm hover:shadow-xl hover:border-[#0d3326]/40 transition-all duration-300 flex flex-col group">
                        <div class="h-48 overflow-hidden">
                            <img alt="Laboratorium Sains dan Robotik"
                                class="object-cover w-full h-full transition-transform duration-500 group-hover:scale-105"
                                decoding="async" loading="lazy" src="{{ $page->media('image_6') }}" />
                        </div>
                        <div class="flex flex-col justify-between flex-1 p-5">
                            <div class="">
                                <h3 class="mb-2 text-base font-bold text-neutral-900">{{ $page->text('text_58') }}</h3>
                                <p class="text-xs leading-relaxed text-neutral-600">{{ $page->text('text_59') }}</p>
                            </div>
                            <div class="flex items-center justify-between pt-3 mt-4 border-t border-neutral-100">
                                <span
                                    class="text-[11px] font-bold text-[#0d3326] uppercase tracking-wider">{{ $page->text('text_60') }}</span>
                                <span
                                    class="w-8 h-8 rounded-full bg-[#0d3326] text-white flex items-center justify-center group-hover:bg-[#124032] transition-colors shadow-sm">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2"
                                        viewbox="0 0 24 24">
                                        <path class="" d="M5 12h14M12 5l7 7-7 7"></path>
                                    </svg>
                                </span>
                            </div>
                        </div>
                    </div>

                    <div
                        class="bg-white rounded-3xl overflow-hidden border border-neutral-200 shadow-sm hover:shadow-xl hover:border-[#0d3326]/40 transition-all duration-300 flex flex-col group">
                        <div class="h-48 overflow-hidden">
                            <img alt="Kegiatan debat dan bahasa asing"
                                class="object-cover w-full h-full transition-transform duration-500 group-hover:scale-105"
                                decoding="async" loading="lazy" src="{{ $page->media('image_7') }}" />
                        </div>
                        <div class="flex flex-col justify-between flex-1 p-5">
                            <div class="">
                                <h3 class="mb-2 text-base font-bold text-neutral-900">{{ $page->text('text_61') }}</h3>
                                <p class="text-xs leading-relaxed text-neutral-600">{{ $page->text('text_62') }}</p>
                            </div>
                            <div class="flex items-center justify-between pt-3 mt-4 border-t border-neutral-100">
                                <span
                                    class="text-[11px] font-bold text-[#0d3326] uppercase tracking-wider">{{ $page->text('text_63') }}</span>
                                <span
                                    class="w-8 h-8 rounded-full bg-[#0d3326] text-white flex items-center justify-center group-hover:bg-[#124032] transition-colors shadow-sm">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2"
                                        viewbox="0 0 24 24">
                                        <path class="" d="M5 12h14M12 5l7 7-7 7"></path>
                                    </svg>
                                </span>
                            </div>
                        </div>
                    </div>

                    <div
                        class="bg-white rounded-3xl overflow-hidden border border-neutral-200 shadow-sm hover:shadow-xl hover:border-[#0d3326]/40 transition-all duration-300 flex flex-col group">
                        <div class="h-48 overflow-hidden">
                            <img alt="Siswa melukis dan mengekspresikan seni rupa"
                                class="object-cover w-full h-full transition-transform duration-500 group-hover:scale-105"
                                decoding="async" loading="lazy" src="{{ $page->media('image_8') }}" />
                        </div>
                        <div class="flex flex-col justify-between flex-1 p-5">
                            <div class="">
                                <h3 class="mb-2 text-base font-bold text-neutral-900">{{ $page->text('text_64') }}</h3>
                                <p class="text-xs leading-relaxed text-neutral-600">{{ $page->text('text_65') }}</p>
                            </div>
                            <div class="flex items-center justify-between pt-3 mt-4 border-t border-neutral-100">
                                <span
                                    class="text-[11px] font-bold text-[#0d3326] uppercase tracking-wider">{{ $page->text('text_66') }}</span>
                                <span
                                    class="w-8 h-8 rounded-full bg-[#0d3326] text-white flex items-center justify-center group-hover:bg-[#124032] transition-colors shadow-sm">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2"
                                        viewbox="0 0 24 24">
                                        <path class="" d="M5 12h14M12 5l7 7-7 7"></path>
                                    </svg>
                                </span>
                            </div>
                        </div>
                    </div>

                    <div
                        class="bg-white rounded-3xl overflow-hidden border border-neutral-200 shadow-sm hover:shadow-xl hover:border-[#0d3326]/40 transition-all duration-300 flex flex-col group">
                        <div class="h-48 overflow-hidden">
                            <img alt="Pelatihan kepemimpinan dan pramuka"
                                class="object-cover w-full h-full transition-transform duration-500 group-hover:scale-105"
                                decoding="async" loading="lazy" src="{{ $page->media('image_9') }}" />
                        </div>
                        <div class="flex flex-col justify-between flex-1 p-5">
                            <div class="">
                                <h3 class="mb-2 text-base font-bold text-neutral-900">{{ $page->text('text_67') }}</h3>
                                <p class="text-xs leading-relaxed text-neutral-600">{{ $page->text('text_68') }}</p>
                            </div>
                            <div class="flex items-center justify-between pt-3 mt-4 border-t border-neutral-100">
                                <span
                                    class="text-[11px] font-bold text-[#0d3326] uppercase tracking-wider">{{ $page->text('text_69') }}</span>
                                <span
                                    class="w-8 h-8 rounded-full bg-[#0d3326] text-white flex items-center justify-center group-hover:bg-[#124032] transition-colors shadow-sm">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2"
                                        viewbox="0 0 24 24">
                                        <path class="" d="M5 12h14M12 5l7 7-7 7"></path>
                                    </svg>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="relative py-16 overflow-hidden border-y border-sage-border bg-cream-soft"
            data-purpose="community-editorial-banner">
            <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div class="grid items-center grid-cols-1 gap-8 lg:grid-cols-12">

                    <div class="lg:col-span-6">
                        <span
                            class="text-xs font-bold tracking-[0.2em] text-neutral-500 uppercase block mb-3">{{ $page->text('text_70') }}</span>
                        <div class="grid grid-cols-4 gap-4">
                            <div class="">
                                <div class="font-serif text-3xl font-bold sm:text-4xl text-forest">
                                    {{ $page->text('text_71') }}</div>
                                <div class="text-[11px] font-semibold text-neutral-600 uppercase mt-1">
                                    {{ $page->text('text_72') }}</div>
                            </div>
                            <div class="pl-4 border-l border-neutral-300">
                                <div class="font-serif text-3xl font-bold sm:text-4xl text-forest">
                                    {{ $page->text('text_73') }}</div>
                                <div class="text-[11px] font-semibold text-neutral-600 uppercase mt-1">
                                    {{ $page->text('text_74') }}</div>
                            </div>
                            <div class="pl-4 border-l border-neutral-300">
                                <div class="font-serif text-3xl font-bold sm:text-4xl text-forest">
                                    {{ $page->text('text_75') }}</div>
                                <div class="text-[11px] font-semibold text-neutral-600 uppercase mt-1">
                                    {{ $page->text('text_76') }}</div>
                            </div>
                            <div class="pl-4 border-l border-neutral-300">
                                <div class="font-serif text-3xl font-bold sm:text-4xl text-forest">
                                    {{ $page->text('text_77') }}</div>
                                <div class="text-[11px] font-semibold text-neutral-600 uppercase mt-1">
                                    {{ $page->text('text_78') }}</div>
                            </div>
                        </div>
                    </div>

                    <div class="flex items-center gap-6 lg:col-span-6 lg:border-l lg:border-neutral-300 lg:pl-10">
                        <div
                            class="items-center justify-center flex-shrink-0 hidden rounded-full sm:flex w-14 h-14 bg-forest text-lime">
                            <svg class="w-8 h-8" fill="none" stroke="currentColor" stroke-width="2"
                                viewbox="0 0 24 24">
                                <path class=""
                                    d="M12 2a10 10 0 0 1 10 10c0 5.523-4.477 10-10 10a10 10 0 0 1-7.071-2.929"></path>
                            </svg>
                        </div>
                        <blockquote
                            class="font-serif text-lg italic leading-relaxed sm:text-xl lg:text-2xl text-forest-dark">
                            {{ $page->text('text_79') }}</blockquote>
                    </div>
                </div>
            </div>
        </section>


        <section class="py-20 bg-white" data-purpose="achievements-section" id="prestasi">
            <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">

                <div class="flex flex-col justify-between gap-6 mb-10 md:flex-row md:items-end">
                    <div class="">
                        <span
                            class="text-xs font-bold tracking-[0.2em] text-neutral-400 uppercase">{{ $page->text('text_80') }}</span>
                        <h2 class="mt-1 font-serif text-3xl font-semibold sm:text-4xl lg:text-5xl text-neutral-900">
                            {{ $page->text('text_81') }}<br class="" />{{ $page->text('text_82') }}</h2>
                        <p class="mt-2 text-sm text-neutral-600">{{ $page->text('text_83') }}</p>
                    </div>

                    <div class="flex flex-wrap items-center gap-3">
                        <div class="inline-flex p-1 bg-white border rounded-full border-neutral-200">
                            <a class="px-4 py-1.5 rounded-full text-xs font-bold bg-forest text-white"
                                href="/kontak">{{ $page->text('text_84') }}</a>
                            <a class="px-4 py-1.5 rounded-full text-xs font-medium text-neutral-600 hover:text-forest"
                                href="/kontak">{{ $page->text('text_85') }}</a>
                            <a class="px-4 py-1.5 rounded-full text-xs font-medium text-neutral-600 hover:text-forest"
                                href="/kontak">{{ $page->text('text_86') }}</a>
                            <a class="px-4 py-1.5 rounded-full text-xs font-medium text-neutral-600 hover:text-forest"
                                href="/kontak">{{ $page->text('text_87') }}</a>
                        </div>
                        <div class="flex items-center gap-2">
                            <a aria-label="Sebelumnya"
                                class="flex items-center justify-center transition-colors bg-white border rounded-full w-9 h-9 border-neutral-200 text-neutral-700 hover:bg-forest hover:text-white"
                                href="/kontak">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2.5"
                                    viewbox="0 0 24 24">
                                    <path class="" d="m15 19-7-7 7-7"></path>
                                </svg>
                            </a>
                            <a aria-label="Selanjutnya"
                                class="flex items-center justify-center transition-colors bg-white border rounded-full w-9 h-9 border-neutral-200 text-neutral-700 hover:bg-forest hover:text-white"
                                href="/kontak">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2.5"
                                    viewbox="0 0 24 24">
                                    <path class="" d="m9 5 7 7-7 7"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-1 gap-6 mb-8 md:grid-cols-3">
                    <div
                        class="overflow-hidden transition-all duration-300 bg-white border shadow-sm rounded-3xl border-neutral-300/80 hover:shadow-xl group">
                        <div class="relative h-56">
                            <img alt="Juara Olimpiade Sains Nasional"
                                class="object-cover w-full h-full transition-transform duration-500 group-hover:scale-105"
                                decoding="async" loading="lazy" src="{{ $page->media('image_10') }}" />
                            <span
                                class="absolute top-3 right-3 bg-[#c27803] text-white text-xs font-bold px-3.5 py-1 rounded-full shadow-md flex items-center gap-1">{{ $page->text('text_88') }}</span>
                        </div>
                        <div class="p-5">
                            <span
                                class="text-[11px] font-bold text-[#0d3326] uppercase tracking-wider">{{ $page->text('text_89') }}</span>
                            <h3 class="mt-1 mb-2 text-base font-bold text-neutral-900">{{ $page->text('text_90') }}</h3>
                            <p class="text-xs leading-relaxed text-neutral-600">{{ $page->text('text_91') }}</p>
                        </div>
                    </div>

                    <div
                        class="overflow-hidden transition-all duration-300 bg-white border shadow-sm rounded-3xl border-neutral-300/80 hover:shadow-xl group">
                        <div class="relative h-56">
                            <img alt="Juara Robotik Nasional"
                                class="object-cover w-full h-full transition-transform duration-500 group-hover:scale-105"
                                decoding="async" loading="lazy" src="{{ $page->media('image_11') }}" />
                            <span
                                class="absolute top-3 right-3 bg-[#334155] text-white text-xs font-bold px-3.5 py-1 rounded-full shadow-md flex items-center gap-1">{{ $page->text('text_92') }}</span>
                        </div>
                        <div class="p-5">
                            <span
                                class="text-[11px] font-bold text-[#0d3326] uppercase tracking-wider">{{ $page->text('text_93') }}</span>
                            <h3 class="mt-1 mb-2 text-base font-bold text-neutral-900">{{ $page->text('text_94') }}</h3>
                            <p class="text-xs leading-relaxed text-neutral-600">{{ $page->text('text_95') }}</p>
                        </div>
                    </div>

                    <div
                        class="overflow-hidden transition-all duration-300 bg-white border shadow-sm rounded-3xl border-neutral-300/80 hover:shadow-xl group">
                        <div class="relative h-56">
                            <img alt="Juara Tari Tradisional"
                                class="object-cover w-full h-full transition-transform duration-500 group-hover:scale-105"
                                decoding="async" loading="lazy" src="{{ $page->media('image_12') }}" />
                            <span
                                class="absolute top-3 right-3 bg-[#c27803] text-white text-xs font-bold px-3.5 py-1 rounded-full shadow-md flex items-center gap-1">{{ $page->text('text_96') }}</span>
                        </div>
                        <div class="p-5">
                            <span
                                class="text-[11px] font-bold text-[#0d3326] uppercase tracking-wider">{{ $page->text('text_97') }}</span>
                            <h3 class="mt-1 mb-2 text-base font-bold text-neutral-900">{{ $page->text('text_98') }}</h3>
                            <p class="text-xs leading-relaxed text-neutral-600">{{ $page->text('text_99') }}</p>
                        </div>
                    </div>
                </div>
                <div class="">
                    <a class="inline-flex items-center gap-1.5 text-sm font-bold text-forest hover:text-forest-dark group"
                        href="/prestasi">
                        <span class="">{{ $page->text('text_100') }}</span>
                        <svg class="w-4 h-4 transition-transform group-hover:translate-x-1" fill="none"
                            stroke="currentColor" stroke-width="2" viewbox="0 0 24 24">
                            <path class="" d="M5 12h14M12 5l7 7-7 7"></path>
                        </svg>
                    </a>
                </div>
            </div>
        </section>


        <section class="py-20 bg-cream" data-purpose="school-life-gallery" id="kehidupan">
            <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">

                <div class="flex flex-col justify-between gap-6 mb-12 md:flex-row md:items-end">
                    <div class="">
                        <span
                            class="text-xs font-bold tracking-[0.2em] text-neutral-400 uppercase">{{ $page->text('text_101') }}</span>
                        <h2 class="mt-2 font-serif text-3xl font-semibold sm:text-4xl lg:text-5xl text-neutral-900">
                            {{ $page->text('text_102') }}<br class="" />{{ $page->text('text_103') }}</h2>
                    </div>
                    <div class="max-w-md">
                        <p class="mb-4 text-sm leading-relaxed text-neutral-600 sm:text-base">
                            {{ $page->text('text_104') }}</p>
                        <a class="inline-flex items-center gap-2 px-5 py-2.5 rounded-full bg-forest text-white text-xs sm:text-sm font-semibold hover:bg-forest-dark transition-all"
                            href="/galeri">
                            <span class="">{{ $page->text('text_105') }}</span>
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2"
                                viewbox="0 0 24 24">
                                <path class="" d="M5 12h14M12 5l7 7-7 7"></path>
                            </svg>
                        </a>
                    </div>
                </div>

                <div class="grid grid-cols-1 gap-5 sm:grid-cols-2 lg:grid-cols-3">

                    <div class="relative h-64 overflow-hidden rounded-3xl group">
                        <img alt="Aktivitas musik dan ekstrakurikuler siswa"
                            class="object-cover w-full h-full transition-transform duration-500 group-hover:scale-105"
                            decoding="async" loading="lazy" src="{{ $page->media('image_13') }}" />
                        <div
                            class="absolute inset-0 flex items-end p-5 bg-gradient-to-t from-black/60 via-transparent to-transparent">
                            <span class="text-sm font-semibold text-white">{{ $page->text('text_106') }}</span>
                        </div>
                    </div>

                    <div class="relative h-64 overflow-hidden rounded-3xl group">
                        <img alt="Perpustakaan modern ramah siswa"
                            class="object-cover w-full h-full transition-transform duration-500 group-hover:scale-105"
                            decoding="async" loading="lazy" src="{{ $page->media('image_14') }}" />
                        <div
                            class="absolute inset-0 flex items-end p-5 bg-gradient-to-t from-black/60 via-transparent to-transparent">
                            <span class="text-sm font-semibold text-white">{{ $page->text('text_107') }}</span>
                        </div>
                    </div>

                    <div class="relative h-64 overflow-hidden rounded-3xl group">
                        <img alt="Kelas terbuka dan interaktif"
                            class="object-cover w-full h-full transition-transform duration-500 group-hover:scale-105"
                            decoding="async" loading="lazy" src="{{ $page->media('image_15') }}" />
                        <div
                            class="absolute inset-0 flex items-end p-5 bg-gradient-to-t from-black/60 via-transparent to-transparent">
                            <span class="text-sm font-semibold text-white">{{ $page->text('text_108') }}</span>
                        </div>
                    </div>

                    <div class="relative h-64 overflow-hidden rounded-3xl group">
                        <img alt="Taman sekolah asri"
                            class="object-cover w-full h-full transition-transform duration-500 group-hover:scale-105"
                            decoding="async" loading="lazy" src="{{ $page->media('image_16') }}" />
                        <div
                            class="absolute inset-0 flex items-end p-5 bg-gradient-to-t from-black/60 via-transparent to-transparent">
                            <span class="text-sm font-semibold text-white">{{ $page->text('text_109') }}</span>
                        </div>
                    </div>

                    <div class="relative h-64 overflow-hidden rounded-3xl group">
                        <img alt="Olahraga dan kebersamaan siswa"
                            class="object-cover w-full h-full transition-transform duration-500 group-hover:scale-105"
                            decoding="async" loading="lazy" src="{{ $page->media('image_17') }}" />
                        <div
                            class="absolute inset-0 flex items-end p-5 bg-gradient-to-t from-black/60 via-transparent to-transparent">
                            <span class="text-sm font-semibold text-white">{{ $page->text('text_110') }}</span>
                        </div>
                    </div>

                    <a class="flex flex-col justify-between h-64 p-6 text-white transition-colors rounded-3xl bg-forest group hover:bg-forest-dark"
                        href="/ppdb">
                        <div class="flex items-center justify-center w-10 h-10 rounded-full bg-lime/20 text-lime">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2.5"
                                viewbox="0 0 24 24">
                                <path class="" d="M5 12h14M12 5l7 7-7 7"></path>
                            </svg>
                        </div>
                        <div class="">
                            <h3
                                class="mb-2 font-serif text-2xl font-bold leading-snug transition-colors group-hover:text-lime">
                                {{ $page->text('text_111') }}</h3>
                            <p class="text-xs text-neutral-300">{{ $page->text('text_112') }}</p>
                        </div>
                    </a>
                </div>
            </div>
        </section>


        <section class="relative py-20 overflow-hidden text-white bg-forest-dark" data-purpose="admissions-ppdb"
            id="ppdb">
            <div class="absolute -top-32 -left-32 w-96 h-96 rounded-full bg-[#1b5e46]/20 blur-3xl pointer-events-none">
            </div>
            <div class="absolute -bottom-32 -right-32 w-96 h-96 rounded-full bg-[#0b281e] blur-3xl pointer-events-none">
            </div>
            <div class="relative z-10 px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div class="grid items-center grid-cols-1 gap-12 lg:grid-cols-12">

                    <div class="lg:col-span-6">
                        <span
                            class="inline-block text-xs font-extrabold tracking-[0.25em] text-[#e2b04a] uppercase mb-3">{{ $page->text('text_113') }}</span>
                        <h2
                            class="mb-6 font-serif text-4xl font-semibold leading-tight text-white sm:text-5xl lg:text-6xl">
                            {{ $page->text('text_114') }}<br class="" />{{ $page->text('text_115') }}</h2>
                        <p class="max-w-lg mb-8 text-base font-normal leading-relaxed text-neutral-200">
                            {{ $page->text('text_116') }}</p>

                        <div class="flex flex-wrap items-center gap-4 mb-10">
                            <a class="inline-flex items-center gap-2 px-7 py-3.5 rounded-full bg-[#c27803] text-white font-bold text-sm hover:bg-[#a36302] transition-all duration-200 shadow-xl shadow-black/20 hover:scale-[1.02] border border-[#d98204]"
                                href="/ppdb">
                                <span class="">{{ $page->text('text_117') }}</span>
                                <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" stroke-width="2.5"
                                    viewbox="0 0 24 24">
                                    <path class="" d="M5 12h14M12 5l7 7-7 7"></path>
                                </svg>
                            </a>
                            <a class="inline-flex items-center px-6 py-3.5 rounded-full border border-white/40 text-white font-semibold text-sm hover:bg-white/10 transition-colors"
                                href="/kontak">{{ $page->text('text_118') }}</a>
                        </div>

                        <div
                            class="grid grid-cols-1 gap-4 pt-6 text-xs border-t sm:grid-cols-3 border-white/15 text-neutral-200">
                            <div class="flex items-center gap-2.5">
                                <svg class="w-4 h-4 text-[#e2b04a] flex-shrink-0" fill="none" stroke="currentColor"
                                    stroke-width="2.5" viewbox="0 0 24 24">
                                    <path class="" d="M20 6 9 17l-5-5"></path>
                                </svg>
                                <span class="font-medium">{{ $page->text('text_119') }}</span>
                            </div>
                            <div class="flex items-center gap-2.5">
                                <svg class="w-4 h-4 text-[#e2b04a] flex-shrink-0" fill="none" stroke="currentColor"
                                    stroke-width="2.5" viewbox="0 0 24 24">
                                    <path class="" d="M20 6 9 17l-5-5"></path>
                                </svg>
                                <span class="font-medium">{{ $page->text('text_120') }}</span>
                            </div>
                            <div class="flex items-center gap-2.5">
                                <svg class="w-4 h-4 text-[#e2b04a] flex-shrink-0" fill="none" stroke="currentColor"
                                    stroke-width="2.5" viewbox="0 0 24 24">
                                    <path class="" d="M20 6 9 17l-5-5"></path>
                                </svg>
                                <span class="font-medium">{{ $page->text('text_121') }}</span>
                            </div>
                        </div>
                    </div>

                    <div class="relative flex justify-center lg:col-span-6 lg:justify-end">
                        <div
                            class="relative w-full max-w-md h-[460px] rounded-[38px] overflow-hidden shadow-2xl border-4 border-white/20">
                            <img alt="Siswa bahagia belajar di Yayasan Pendidikan Harapan Mulia"
                                class="object-cover w-full h-full" decoding="async" loading="lazy"
                                src="{{ $page->media('image_18') }}" />
                            <div
                                class="absolute inset-0 bg-gradient-to-t from-[#0b281e]/90 via-transparent to-transparent">
                            </div>

                            <div
                                class="absolute bottom-6 left-6 right-6 p-4 rounded-2xl bg-[#0b281e]/90 backdrop-blur-md border border-white/30 shadow-2xl">
                                <p class="font-handwriting text-2xl text-[#e2b04a] font-bold">
                                    {{ $page->text('text_122') }}</p>
                                <p class="text-xs text-neutral-200 mt-0.5 font-normal">{{ $page->text('text_123') }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="py-20 bg-cream" data-purpose="school-locations" id="kontak">
            <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">

                <div class="max-w-2xl mx-auto text-center mb-14">
                    <span
                        class="text-xs font-bold tracking-[0.2em] text-neutral-400 uppercase">{{ $page->text('text_124') }}</span>
                    <h2 class="mt-2 mb-3 font-serif text-3xl font-semibold sm:text-4xl text-neutral-900">
                        {{ $page->text('text_125') }}</h2>
                    <p class="text-sm text-neutral-600">{{ $page->text('text_126') }}</p>
                </div>

                <div class="grid grid-cols-1 gap-6 md:grid-cols-3">
                    <div
                        class="flex items-center gap-4 p-5 transition-shadow bg-white border shadow-sm rounded-3xl border-neutral-300/80 hover:shadow-md">
                        <div class="flex-shrink-0 w-20 h-20 overflow-hidden rounded-2xl bg-neutral-100">
                            <img alt="Kampus SD" class="object-cover w-full h-full" decoding="async" loading="lazy"
                                src="{{ $page->media('image_19') }}" />
                        </div>
                        <div class="">
                            <div
                                class="inline-block text-[11px] font-bold text-white bg-[#0d3326] px-2.5 py-0.5 rounded-full mb-1 shadow-sm">
                                {{ $page->text('text_127') }}</div>
                            <h4 class="text-sm font-bold text-neutral-900">{{ $page->text('text_128') }}</h4>
                            <p class="text-xs text-neutral-500 mt-0.5">{{ $page->text('text_129') }}</p>
                            <a class="text-xs font-bold text-[#0d3326] hover:underline inline-flex items-center gap-1 mt-1.5"
                                href="/kontak">{{ $page->text('text_130') }}</a>
                        </div>
                    </div>

                    <div
                        class="flex items-center gap-4 p-5 transition-shadow bg-white border shadow-sm rounded-3xl border-neutral-300/80 hover:shadow-md">
                        <div class="flex-shrink-0 w-20 h-20 overflow-hidden rounded-2xl bg-neutral-100">
                            <img alt="Kampus SMP" class="object-cover w-full h-full" decoding="async" loading="lazy"
                                src="{{ $page->media('image_20') }}" />
                        </div>
                        <div class="">
                            <div
                                class="inline-block text-[11px] font-bold text-white bg-[#0d3326] px-2.5 py-0.5 rounded-full mb-1 shadow-sm">
                                {{ $page->text('text_131') }}</div>
                            <h4 class="text-sm font-bold text-neutral-900">{{ $page->text('text_132') }}</h4>
                            <p class="text-xs text-neutral-500 mt-0.5">{{ $page->text('text_133') }}</p>
                            <a class="text-xs font-bold text-[#0d3326] hover:underline inline-flex items-center gap-1 mt-1.5"
                                href="/kontak">{{ $page->text('text_134') }}</a>
                        </div>
                    </div>

                    <div
                        class="flex items-center gap-4 p-5 transition-shadow bg-white border shadow-sm rounded-3xl border-neutral-300/80 hover:shadow-md">
                        <div class="flex-shrink-0 w-20 h-20 overflow-hidden rounded-2xl bg-neutral-100">
                            <img alt="Kampus SMA" class="object-cover w-full h-full" decoding="async" loading="lazy"
                                src="{{ $page->media('image_21') }}" />
                        </div>
                        <div class="">
                            <div
                                class="inline-block text-[11px] font-bold text-white bg-[#0d3326] px-2.5 py-0.5 rounded-full mb-1 shadow-sm">
                                {{ $page->text('text_135') }}</div>
                            <h4 class="text-sm font-bold text-neutral-900">{{ $page->text('text_136') }}</h4>
                            <p class="text-xs text-neutral-500 mt-0.5">{{ $page->text('text_137') }}</p>
                            <a class="text-xs font-bold text-[#0d3326] hover:underline inline-flex items-center gap-1 mt-1.5"
                                href="/kontak">{{ $page->text('text_138') }}</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>
@endsection
