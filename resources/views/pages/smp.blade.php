@extends('layouts.public')
@section('content')
<main class="pt-20" id="main-content">
<div class="flex flex-col w-full">

<section class="w-full bg-[#FAF9F5] border-b border-gray-200 py-3">
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex flex-wrap items-center justify-between gap-3 text-body-sm text-on-surface-variant">
<nav aria-label="Breadcrumb" class="flex items-center gap-1.5 font-label-md">
<a class="text-secondary hover:text-primary transition-colors" href="/kontak">{{ $page->text('text_1') }}</a>
<span aria-hidden="true" class="text-[14px] font-symbols font-normal not-italic leading-none normal-case whitespace-nowrap [font-feature-settings:'liga'] [word-wrap:normal]">chevron_right</span>
<a class="text-secondary hover:text-primary transition-colors" href="/sekolah">{{ $page->text('text_2') }}</a>
<span aria-hidden="true" class="text-[14px] font-symbols font-normal not-italic leading-none normal-case whitespace-nowrap [font-feature-settings:'liga'] [word-wrap:normal]">chevron_right</span>
<span class="text-primary font-bold">{{ $page->text('text_3') }}</span>
</nav>
<div class="flex flex-wrap items-center gap-2">
<span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-surface-container-lowest text-primary font-label-sm shadow-sm border border-gray-200">
<span aria-hidden="true" class="text-[14px] text-amber-600 font-symbols font-normal not-italic leading-none normal-case whitespace-nowrap [font-feature-settings:'liga'] [word-wrap:normal] [font-variation-settings:'FILL'_1]">verified</span>{{ $page->text('text_4') }}</span>
<span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-surface-container-lowest text-secondary font-label-sm shadow-sm border border-gray-200">
<span aria-hidden="true" class="text-[14px] font-symbols font-normal not-italic leading-none normal-case whitespace-nowrap [font-feature-settings:'liga'] [word-wrap:normal]">group</span>{{ $page->text('text_5') }}</span>
<span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-primary text-tertiary-fixed font-label-sm font-semibold">
<span aria-hidden="true" class="text-[14px] font-symbols font-normal not-italic leading-none normal-case whitespace-nowrap [font-feature-settings:'liga'] [word-wrap:normal]">psychology</span>{{ $page->text('text_6') }}</span>
</div>
</div>
</section>

<section class="w-full py-16 lg:py-24 relative overflow-hidden">

<div class="absolute -top-32 -left-20 w-96 h-96 rounded-full bg-surface-container-high/40 blur-3xl pointer-events-none"></div>
<div class="absolute top-1/2 -right-32 w-96 h-96 rounded-full bg-tertiary-fixed/30 blur-3xl pointer-events-none"></div>
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
<div class="grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-14 items-center">

<div class="lg:col-span-7 flex flex-col items-start">
<div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-primary/10 text-primary font-label-sm uppercase tracking-wider mb-5 border border-primary/20">
<span class="w-2 h-2 rounded-full bg-primary animate-pulse"></span>{{ $page->text('text_7') }}</div>
<h1 class="editorial-serif font-headline-2xl text-4xl sm:text-5xl lg:text-[56px] lg:leading-[64px] text-primary font-normal tracking-tight mb-6">{{ $page->text('text_8') }}<span class="italic font-serif text-primary-container underline decoration-tertiary-fixed decoration-4 underline-offset-8">{{ $page->text('text_9') }}</span>
</h1>
<p class="font-body-xl text-body-xl text-on-surface-variant leading-relaxed max-w-2xl mb-8">{{ $page->text('text_10') }}</p>

<div class="flex flex-wrap items-center gap-4 mb-10 w-full sm:w-auto">
<a class="inline-flex items-center justify-center gap-2 px-7 py-3.5 rounded-full bg-tertiary-fixed text-on-tertiary-fixed font-label-lg font-bold hover:bg-tertiary-fixed-dim transition-all duration-200 shadow-sm hover:scale-[1.02]" href="#alur-ppdb">
<span class="">{{ $page->text('text_11') }}</span>
<span aria-hidden="true" class="text-[18px] font-symbols font-normal not-italic leading-none normal-case whitespace-nowrap [font-feature-settings:'liga'] [word-wrap:normal]">arrow_forward</span>
</a>
<a class="inline-flex items-center justify-center gap-2 px-6 py-3.5 rounded-full bg-surface-container-lowest text-primary font-label-lg hover:bg-surface-container-low transition-all duration-200 shadow-sm border border-outline-variant/30" href="#konsultasi-minat">
<span aria-hidden="true" class="text-[18px] text-primary font-symbols font-normal not-italic leading-none normal-case whitespace-nowrap [font-feature-settings:'liga'] [word-wrap:normal]">forum</span>
<span class="">{{ $page->text('text_12') }}</span>
</a>
</div>

<div class="w-full grid grid-cols-2 sm:grid-cols-4 gap-4 p-5 sm:p-6 bg-surface-container-lowest rounded-[3rem] shadow-sm border border-outline-variant/25">
<div class="flex flex-col border-r border-outline-variant/20 pr-3 last:border-none">
<span class="editorial-serif font-headline-xl text-3xl sm:text-4xl font-bold text-primary">{{ $page->text('text_13') }}</span>
<span class="font-body-sm text-xs sm:text-sm text-on-surface-variant mt-1">{{ $page->text('text_14') }}</span>
</div>
<div class="flex flex-col border-r border-outline-variant/20 pr-3 last:border-none">
<span class="editorial-serif font-headline-xl text-3xl sm:text-4xl font-bold text-primary">{{ $page->text('text_15') }}</span>
<span class="font-body-sm text-xs sm:text-sm text-on-surface-variant mt-1">{{ $page->text('text_16') }}</span>
</div>
<div class="flex flex-col border-r border-outline-variant/20 pr-3 last:border-none">
<span class="editorial-serif font-headline-xl text-3xl sm:text-4xl font-bold text-primary">{{ $page->text('text_17') }}</span>
<span class="font-body-sm text-xs sm:text-sm text-on-surface-variant mt-1">{{ $page->text('text_18') }}</span>
</div>
<div class="flex flex-col">
<span class="editorial-serif font-headline-xl text-3xl sm:text-4xl font-bold text-primary">{{ $page->text('text_19') }}</span>
<span class="font-body-sm text-xs sm:text-sm text-on-surface-variant mt-1">{{ $page->text('text_20') }}</span>
</div>
</div>
</div>

<div class="lg:col-span-5 relative">
<div class="relative rounded-2xl overflow-hidden shadow-2xl bg-surface-container border-4 border-surface-container-lowest">
<img alt="Tiga siswa SMP Harapan Mulia berseragam rapi, satu siswi berhijab dan dua siswa laki-laki, sedang bekerja sama dengan antusias menguji sensor mikrokontroler robotik di atas meja lab kayu modern. Cahaya alami masuk melalui jendela tinggi arsitektural bernuansa hangat, tanaman monstera di latar belakang, komposisi editorial majalah prestisius bertema edukasi sains." class="w-full h-[500px] object-cover" decoding="async" fetchpriority="high" loading="eager" src="{{ $page->media('image_1') }}"/>
<div class="absolute inset-0 bg-gradient-to-t from-primary/85 via-primary/20 to-transparent"></div>
<div class="absolute bottom-6 left-6 right-6 text-on-primary">
<span class="font-label-sm text-xs uppercase tracking-widest text-tertiary-fixed block mb-1">{{ $page->text('text_21') }}</span>
<p class="editorial-serif text-xl sm:text-2xl italic leading-snug text-surface-bright">{{ $page->text('text_22') }}</p>
</div>
</div>

<div class="absolute -bottom-6 -left-6 sm:-left-8 max-w-xs bg-surface-container-lowest p-4 sm:p-5 rounded-2xl shadow-xl hidden sm:flex items-start gap-3 border border-outline-variant/30 z-20">
<div class="w-10 h-10 rounded-full bg-primary-container text-tertiary-fixed flex items-center justify-center flex-shrink-0 shadow-sm">
<span aria-hidden="true" class="text-[20px] font-symbols font-normal not-italic leading-none normal-case whitespace-nowrap [font-feature-settings:'liga'] [word-wrap:normal]">psychology_alt</span>
</div>
<div class="">
<p class="editorial-serif italic text-primary text-sm sm:text-base leading-snug">{{ $page->text('text_23') }}</p>
<span class="font-label-sm text-xs text-secondary font-semibold block mt-1">{{ $page->text('text_24') }}</span>
</div>
</div>
</div>
</div>
</div>
</section>

<section class="w-full py-16 bg-[#FFFFFF] border-y border-gray-200">
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
<div class="bg-[#FAF9F5] rounded-2xl p-6 sm:p-10 lg:p-12 shadow-sm border border-gray-200">
<div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12 items-center">

<div class="lg:col-span-4 flex flex-col items-center sm:items-start text-center sm:text-left">
<div class="relative w-48 h-48 sm:w-56 sm:h-56 rounded-2xl overflow-hidden shadow-md bg-surface-container mb-4 border border-gray-200">
<img alt="Potret bersahaja dan ramah Bpk Ahmad Fauzi, Kepala Sekolah SMP Harapan Mulia, berjas gelap rapi tanpa dasi di ruang perpustakaan sekolah yang terang benderang. Lensa tajam, pose hangat merangkul masa depan pendidikan remaja, warna hijau sage lembut mendominasi suasana." class="w-full h-full object-cover" decoding="async" loading="lazy" src="{{ $page->media('image_2') }}"/>
</div>
<h3 class="editorial-serif font-headline-sm text-2xl font-bold text-primary">{{ $page->text('text_25') }}</h3>
<span class="font-label-md text-xs uppercase tracking-wider text-secondary font-bold block mt-0.5">{{ $page->text('text_26') }}</span>
<span class="font-body-sm text-xs text-on-surface-variant mt-1.5">{{ $page->text('text_27') }}</span>
</div>

<div class="lg:col-span-8 flex flex-col">
<div class="inline-flex items-center gap-2 mb-2">
<span aria-hidden="true" class="text-amber-600 text-[18px] font-symbols font-normal not-italic leading-none normal-case whitespace-nowrap [font-feature-settings:'liga'] [word-wrap:normal]">format_quote</span>
<span class="font-label-sm text-xs uppercase tracking-widest text-primary font-bold">{{ $page->text('text_28') }}</span>
</div>
<h2 class="editorial-serif font-headline-lg text-2xl sm:text-3xl lg:text-[32px] text-primary font-normal leading-snug mb-4">{{ $page->text('text_29') }}</h2>
<div class="space-y-3 font-body-md text-on-surface-variant leading-relaxed text-sm sm:text-base">
<p class="">{{ $page->text('text_30') }}</p>
<p class="">{{ $page->text('text_31') }}</p>
</div>

<div class="grid grid-cols-1 sm:grid-cols-3 gap-3 mt-6 pt-4 border-t border-gray-200">
<div class="flex items-center gap-2.5 p-2.5 rounded-[3rem] bg-white border border-gray-200 shadow-sm">
<span aria-hidden="true" class="text-primary text-[22px] font-symbols font-normal not-italic leading-none normal-case whitespace-nowrap [font-feature-settings:'liga'] [word-wrap:normal]">security</span>
<div class="">
<span class="font-label-sm text-xs text-primary font-bold block">{{ $page->text('text_32') }}</span>
<span class="text-[11px] text-on-surface-variant">{{ $page->text('text_33') }}</span>
</div>
</div>
<div class="flex items-center gap-2.5 p-2.5 rounded-[3rem] bg-white border border-gray-200 shadow-sm">
<span aria-hidden="true" class="text-primary text-[22px] font-symbols font-normal not-italic leading-none normal-case whitespace-nowrap [font-feature-settings:'liga'] [word-wrap:normal]">diversity_3</span>
<div class="">
<span class="font-label-sm text-xs text-primary font-bold block">{{ $page->text('text_34') }}</span>
<span class="text-[11px] text-on-surface-variant">{{ $page->text('text_35') }}</span>
</div>
</div>
<div class="flex items-center gap-2.5 p-2.5 rounded-[3rem] bg-white border border-gray-200 shadow-sm">
<span aria-hidden="true" class="text-primary text-[22px] font-symbols font-normal not-italic leading-none normal-case whitespace-nowrap [font-feature-settings:'liga'] [word-wrap:normal]">psychology</span>
<div class="">
<span class="font-label-sm text-xs text-primary font-bold block">{{ $page->text('text_36') }}</span>
<span class="text-[11px] text-on-surface-variant">{{ $page->text('text_37') }}</span>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>

<section class="w-full py-20">
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
<div class="flex flex-col md:flex-row md:items-end justify-between gap-4 mb-12">
<div class="">
<span class="font-label-sm text-xs uppercase tracking-widest text-secondary font-bold block mb-1">{{ $page->text('text_38') }}</span>
<h2 class="editorial-serif font-headline-xl text-3xl sm:text-4xl text-primary font-normal">{{ $page->text('text_39') }}</h2>
</div>
<p class="font-body-md text-sm sm:text-base text-on-surface-variant max-w-md">{{ $page->text('text_40') }}</p>
</div>
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">

<div class="bg-surface-container-lowest rounded-2xl p-6 sm:p-7 shadow-sm border border-gray-200 flex flex-col justify-between hover:shadow-md hover:border-primary/30 transition-all group">
<div class="">
<div class="w-12 h-12 rounded-2xl bg-primary text-tertiary-fixed flex items-center justify-center mb-5 group-hover:scale-110 transition-transform shadow-sm">
<span aria-hidden="true" class="text-[24px] font-symbols font-normal not-italic leading-none normal-case whitespace-nowrap [font-feature-settings:'liga'] [word-wrap:normal]">memory</span>
</div>
<span class="font-label-sm text-xs text-secondary font-bold uppercase tracking-wider block mb-1">{{ $page->text('text_41') }}</span>
<h3 class="editorial-serif font-headline-sm text-xl font-bold text-primary mb-2">{{ $page->text('text_42') }}</h3>
<p class="font-body-sm text-sm text-on-surface-variant leading-relaxed">{{ $page->text('text_43') }}</p>
</div>
<ul class="mt-6 pt-4 border-t border-gray-200 space-y-1.5 font-body-sm text-xs sm:text-sm text-secondary font-medium">
<li class="flex items-center gap-2"><span aria-hidden="true" class="text-[16px] text-primary font-symbols font-normal not-italic leading-none normal-case whitespace-nowrap [font-feature-settings:'liga'] [word-wrap:normal]">check_circle</span>{{ $page->text('text_44') }}</li>
<li class="flex items-center gap-2"><span aria-hidden="true" class="text-[16px] text-primary font-symbols font-normal not-italic leading-none normal-case whitespace-nowrap [font-feature-settings:'liga'] [word-wrap:normal]">check_circle</span>{{ $page->text('text_45') }}</li>
</ul>
</div>

<div class="bg-surface-container-lowest rounded-2xl p-6 sm:p-7 shadow-sm border border-gray-200 flex flex-col justify-between hover:shadow-md hover:border-primary/30 transition-all group">
<div class="">
<div class="w-12 h-12 rounded-2xl bg-primary text-tertiary-fixed flex items-center justify-center mb-5 group-hover:scale-110 transition-transform shadow-sm">
<span aria-hidden="true" class="text-[24px] font-symbols font-normal not-italic leading-none normal-case whitespace-nowrap [font-feature-settings:'liga'] [word-wrap:normal]">record_voice_over</span>
</div>
<span class="font-label-sm text-xs text-secondary font-bold uppercase tracking-wider block mb-1">{{ $page->text('text_46') }}</span>
<h3 class="editorial-serif font-headline-sm text-xl font-bold text-primary mb-2">{{ $page->text('text_47') }}</h3>
<p class="font-body-sm text-sm text-on-surface-variant leading-relaxed">{{ $page->text('text_48') }}</p>
</div>
<ul class="mt-6 pt-4 border-t border-gray-200 space-y-1.5 font-body-sm text-xs sm:text-sm text-secondary font-medium">
<li class="flex items-center gap-2"><span aria-hidden="true" class="text-[16px] text-primary font-symbols font-normal not-italic leading-none normal-case whitespace-nowrap [font-feature-settings:'liga'] [word-wrap:normal]">check_circle</span>{{ $page->text('text_49') }}</li>
<li class="flex items-center gap-2"><span aria-hidden="true" class="text-[16px] text-primary font-symbols font-normal not-italic leading-none normal-case whitespace-nowrap [font-feature-settings:'liga'] [word-wrap:normal]">check_circle</span>{{ $page->text('text_50') }}</li>
</ul>
</div>

<div class="bg-surface-container-lowest rounded-2xl p-6 sm:p-7 shadow-sm border border-gray-200 flex flex-col justify-between hover:shadow-md hover:border-primary/30 transition-all group">
<div class="">
<div class="w-12 h-12 rounded-2xl bg-primary text-tertiary-fixed flex items-center justify-center mb-5 group-hover:scale-110 transition-transform shadow-sm">
<span aria-hidden="true" class="text-[24px] font-symbols font-normal not-italic leading-none normal-case whitespace-nowrap [font-feature-settings:'liga'] [word-wrap:normal]">hiking</span>
</div>
<span class="font-label-sm text-xs text-secondary font-bold uppercase tracking-wider block mb-1">{{ $page->text('text_51') }}</span>
<h3 class="editorial-serif font-headline-sm text-xl font-bold text-primary mb-2">{{ $page->text('text_52') }}</h3>
<p class="font-body-sm text-sm text-on-surface-variant leading-relaxed">{{ $page->text('text_53') }}</p>
</div>
<ul class="mt-6 pt-4 border-t border-gray-200 space-y-1.5 font-body-sm text-xs sm:text-sm text-secondary font-medium">
<li class="flex items-center gap-2"><span aria-hidden="true" class="text-[16px] text-primary font-symbols font-normal not-italic leading-none normal-case whitespace-nowrap [font-feature-settings:'liga'] [word-wrap:normal]">check_circle</span>{{ $page->text('text_54') }}</li>
<li class="flex items-center gap-2"><span aria-hidden="true" class="text-[16px] text-primary font-symbols font-normal not-italic leading-none normal-case whitespace-nowrap [font-feature-settings:'liga'] [word-wrap:normal]">check_circle</span>{{ $page->text('text_55') }}</li>
</ul>
</div>

<div class="bg-surface-container-lowest rounded-2xl p-6 sm:p-7 shadow-sm border border-gray-200 flex flex-col justify-between hover:shadow-md hover:border-primary/30 transition-all group">
<div class="">
<div class="w-12 h-12 rounded-2xl bg-primary text-tertiary-fixed flex items-center justify-center mb-5 group-hover:scale-110 transition-transform shadow-sm">
<span aria-hidden="true" class="text-[24px] font-symbols font-normal not-italic leading-none normal-case whitespace-nowrap [font-feature-settings:'liga'] [word-wrap:normal]">favorite</span>
</div>
<span class="font-label-sm text-xs text-secondary font-bold uppercase tracking-wider block mb-1">{{ $page->text('text_56') }}</span>
<h3 class="editorial-serif font-headline-sm text-xl font-bold text-primary mb-2">{{ $page->text('text_57') }}</h3>
<p class="font-body-sm text-sm text-on-surface-variant leading-relaxed">{{ $page->text('text_58') }}</p>
</div>
<ul class="mt-6 pt-4 border-t border-gray-200 space-y-1.5 font-body-sm text-xs sm:text-sm text-secondary font-medium">
<li class="flex items-center gap-2"><span aria-hidden="true" class="text-[16px] text-primary font-symbols font-normal not-italic leading-none normal-case whitespace-nowrap [font-feature-settings:'liga'] [word-wrap:normal]">check_circle</span>{{ $page->text('text_59') }}</li>
<li class="flex items-center gap-2"><span aria-hidden="true" class="text-[16px] text-primary font-symbols font-normal not-italic leading-none normal-case whitespace-nowrap [font-feature-settings:'liga'] [word-wrap:normal]">check_circle</span>{{ $page->text('text_60') }}</li>
</ul>
</div>
</div>
</div>
</section>

<section class="w-full py-20 bg-[#FAF9F5] border-y border-gray-200">
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
<div class="grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-14 items-center">

<div class="lg:col-span-5 flex flex-col">
<span class="font-label-sm text-xs uppercase tracking-widest text-secondary font-bold mb-1">{{ $page->text('text_61') }}</span>
<h2 class="editorial-serif font-headline-xl text-3xl sm:text-4xl text-primary font-normal leading-tight mb-4">{{ $page->text('text_62') }}</h2>
<p class="font-body-md text-sm sm:text-base text-on-surface-variant leading-relaxed mb-6">{{ $page->text('text_63') }}</p>
<div class="space-y-3.5">
<div class="flex items-start gap-3.5 p-4 rounded-[3rem] bg-white shadow-sm border border-gray-200">
<div class="w-9 h-9 rounded-full bg-primary text-tertiary-fixed flex items-center justify-center flex-shrink-0 mt-0.5 shadow-sm">
<span aria-hidden="true" class="text-[20px] font-symbols font-normal not-italic leading-none normal-case whitespace-nowrap [font-feature-settings:'liga'] [word-wrap:normal]">science</span>
</div>
<div class="">
<h4 class="font-label-lg text-sm font-bold text-primary">{{ $page->text('text_64') }}</h4>
<p class="font-body-sm text-xs text-on-surface-variant mt-0.5">{{ $page->text('text_65') }}</p>
</div>
</div>
<div class="flex items-start gap-3.5 p-4 rounded-[3rem] bg-white shadow-sm border border-gray-200">
<div class="w-9 h-9 rounded-full bg-primary text-tertiary-fixed flex items-center justify-center flex-shrink-0 mt-0.5 shadow-sm">
<span aria-hidden="true" class="text-[20px] font-symbols font-normal not-italic leading-none normal-case whitespace-nowrap [font-feature-settings:'liga'] [word-wrap:normal]">auto_stories</span>
</div>
<div class="">
<h4 class="font-label-lg text-sm font-bold text-primary">{{ $page->text('text_66') }}</h4>
<p class="font-body-sm text-xs text-on-surface-variant mt-0.5">{{ $page->text('text_67') }}</p>
</div>
</div>
<div class="flex items-start gap-3.5 p-4 rounded-[3rem] bg-white shadow-sm border border-gray-200">
<div class="w-9 h-9 rounded-full bg-primary text-tertiary-fixed flex items-center justify-center flex-shrink-0 mt-0.5 shadow-sm">
<span aria-hidden="true" class="text-[20px] font-symbols font-normal not-italic leading-none normal-case whitespace-nowrap [font-feature-settings:'liga'] [word-wrap:normal]">palette</span>
</div>
<div class="">
<h4 class="font-label-lg text-sm font-bold text-primary">{{ $page->text('text_68') }}</h4>
<p class="font-body-sm text-xs text-on-surface-variant mt-0.5">{{ $page->text('text_69') }}</p>
</div>
</div>
</div>
</div>

<div class="lg:col-span-7 grid grid-cols-1 sm:grid-cols-2 gap-6">

<div class="bg-white rounded-2xl overflow-hidden shadow-sm border border-gray-200 flex flex-col hover:shadow-md transition-all group">
<div class="h-52 overflow-hidden bg-surface-container relative">
<img alt="Dua siswa SMP berseragam praktikum menunjukkan prototipe filter air bertingkat dengan tabung transparan berisi arang aktif, pasir silika, dan kerikil. Senyum bangga di wajah mereka saat memamerkannya pada pameran sains sekolah, pencahayaan alami terang." class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" decoding="async" loading="lazy" src="{{ $page->media('image_3') }}"/>
<div class="absolute top-3 left-3 px-3 py-1 rounded-full bg-primary/80 backdrop-blur-sm text-tertiary-fixed font-label-sm text-xs">{{ $page->text('text_70') }}</div>
</div>
<div class="p-5 flex flex-col flex-1 justify-between">
<div class="">
<span class="font-label-sm text-xs text-secondary font-semibold">{{ $page->text('text_71') }}</span>
<h3 class="editorial-serif font-headline-sm text-xl font-bold text-primary mt-1">{{ $page->text('text_72') }}</h3>
<p class="font-body-sm text-xs sm:text-sm text-on-surface-variant mt-2 leading-relaxed">{{ $page->text('text_73') }}</p>
</div>
<div class="mt-4 pt-3 border-t border-gray-200 flex items-center justify-between text-xs font-bold text-primary">
<span class="">{{ $page->text('text_74') }}</span>
<span aria-hidden="true" class="text-[18px] text-amber-600 font-symbols font-normal not-italic leading-none normal-case whitespace-nowrap [font-feature-settings:'liga'] [word-wrap:normal]">workspace_premium</span>
</div>
</div>
</div>

<div class="bg-white rounded-2xl overflow-hidden shadow-sm border border-gray-200 flex flex-col hover:shadow-md transition-all group">
<div class="h-52 overflow-hidden bg-surface-container relative">
<img alt="Kelompok siswa SMP putri sedang merekam suara untuk podcast bertema sejarah interaktif di bilik rekam audio akustik dengan mikrofon profesional dan headphone. Ekspresi fokus dan menyenangkan dalam format editorial majalah." class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" decoding="async" loading="lazy" src="{{ $page->media('image_4') }}"/>
<div class="absolute top-3 left-3 px-3 py-1 rounded-full bg-primary/80 backdrop-blur-sm text-tertiary-fixed font-label-sm text-xs">{{ $page->text('text_75') }}</div>
</div>
<div class="p-5 flex flex-col flex-1 justify-between">
<div class="">
<span class="font-label-sm text-xs text-secondary font-semibold">{{ $page->text('text_76') }}</span>
<h3 class="editorial-serif font-headline-sm text-xl font-bold text-primary mt-1">{{ $page->text('text_77') }}</h3>
<p class="font-body-sm text-xs sm:text-sm text-on-surface-variant mt-2 leading-relaxed">{{ $page->text('text_78') }}</p>
</div>
<div class="mt-4 pt-3 border-t border-gray-200 flex items-center justify-between text-xs font-bold text-primary">
<span class="">{{ $page->text('text_79') }}</span>
<span aria-hidden="true" class="text-[18px] text-amber-600 font-symbols font-normal not-italic leading-none normal-case whitespace-nowrap [font-feature-settings:'liga'] [word-wrap:normal]">podcasts</span>
</div>
</div>
</div>
</div>
</div>
</div>
</section>

<section class="w-full py-20">
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
<div class="text-center max-w-3xl mx-auto mb-14">
<span class="font-label-sm text-xs uppercase tracking-widest text-secondary font-bold block mb-1">{{ $page->text('text_80') }}</span>
<h2 class="editorial-serif font-headline-xl text-3xl sm:text-4xl text-primary font-normal mb-3">{{ $page->text('text_81') }}</h2>
<p class="font-body-md text-sm sm:text-base text-on-surface-variant">{{ $page->text('text_82') }}</p>
</div>
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

<div class="bg-surface-container-lowest rounded-2xl p-6 shadow-sm border border-outline-variant/25 hover:shadow-md transition-all flex flex-col justify-between">
<div class="">
<div class="flex items-center justify-between mb-4">
<div class="w-10 h-10 rounded-full bg-secondary-container text-primary flex items-center justify-center">
<span aria-hidden="true" class="text-[20px] font-symbols font-normal not-italic leading-none normal-case whitespace-nowrap [font-feature-settings:'liga'] [word-wrap:normal]">smart_toy</span>
</div>
<span class="font-label-sm text-xs px-2.5 py-0.5 rounded-full bg-tertiary-fixed text-on-tertiary-fixed font-bold">{{ $page->text('text_83') }}</span>
</div>
<h3 class="editorial-serif font-headline-sm text-xl font-bold text-primary mb-1.5">{{ $page->text('text_84') }}</h3>
<p class="font-body-sm text-xs sm:text-sm text-on-surface-variant leading-relaxed mb-4">{{ $page->text('text_85') }}</p>
</div>
<div class="bg-surface-container-low p-3 rounded-[3rem] font-label-sm text-xs text-primary flex items-center gap-2">
<span aria-hidden="true" class="text-[16px] text-tertiary-container font-symbols font-normal not-italic leading-none normal-case whitespace-nowrap [font-feature-settings:'liga'] [word-wrap:normal] [font-variation-settings:'FILL'_1]">emoji_events</span>
<span class="">{{ $page->text('text_86') }}</span>
</div>
</div>

<div class="bg-surface-container-lowest rounded-2xl p-6 shadow-sm border border-outline-variant/25 hover:shadow-md transition-all flex flex-col justify-between">
<div class="">
<div class="flex items-center justify-between mb-4">
<div class="w-10 h-10 rounded-full bg-secondary-container text-primary flex items-center justify-center">
<span aria-hidden="true" class="text-[20px] font-symbols font-normal not-italic leading-none normal-case whitespace-nowrap [font-feature-settings:'liga'] [word-wrap:normal]">forum</span>
</div>
<span class="font-label-sm text-xs px-2.5 py-0.5 rounded-full bg-surface-container-high text-primary font-bold">{{ $page->text('text_87') }}</span>
</div>
<h3 class="editorial-serif font-headline-sm text-xl font-bold text-primary mb-1.5">{{ $page->text('text_88') }}</h3>
<p class="font-body-sm text-xs sm:text-sm text-on-surface-variant leading-relaxed mb-4">{{ $page->text('text_89') }}</p>
</div>
<div class="bg-surface-container-low p-3 rounded-[3rem] font-label-sm text-xs text-primary flex items-center gap-2">
<span aria-hidden="true" class="text-[16px] text-tertiary-container font-symbols font-normal not-italic leading-none normal-case whitespace-nowrap [font-feature-settings:'liga'] [word-wrap:normal] [font-variation-settings:'FILL'_1]">emoji_events</span>
<span class="">{{ $page->text('text_90') }}</span>
</div>
</div>

<div class="bg-surface-container-lowest rounded-2xl p-6 shadow-sm border border-outline-variant/25 hover:shadow-md transition-all flex flex-col justify-between">
<div class="">
<div class="flex items-center justify-between mb-4">
<div class="w-10 h-10 rounded-full bg-secondary-container text-primary flex items-center justify-center">
<span aria-hidden="true" class="text-[20px] font-symbols font-normal not-italic leading-none normal-case whitespace-nowrap [font-feature-settings:'liga'] [word-wrap:normal]">sports_basketball</span>
</div>
<span class="font-label-sm text-xs px-2.5 py-0.5 rounded-full bg-surface-container-high text-primary font-bold">{{ $page->text('text_91') }}</span>
</div>
<h3 class="editorial-serif font-headline-sm text-xl font-bold text-primary mb-1.5">{{ $page->text('text_92') }}</h3>
<p class="font-body-sm text-xs sm:text-sm text-on-surface-variant leading-relaxed mb-4">{{ $page->text('text_93') }}</p>
</div>
<div class="bg-surface-container-low p-3 rounded-[3rem] font-label-sm text-xs text-primary flex items-center gap-2">
<span aria-hidden="true" class="text-[16px] text-tertiary-container font-symbols font-normal not-italic leading-none normal-case whitespace-nowrap [font-feature-settings:'liga'] [word-wrap:normal] [font-variation-settings:'FILL'_1]">emoji_events</span>
<span class="">{{ $page->text('text_94') }}</span>
</div>
</div>

<div class="bg-surface-container-lowest rounded-2xl p-6 shadow-sm border border-outline-variant/25 hover:shadow-md transition-all flex flex-col justify-between">
<div class="">
<div class="flex items-center justify-between mb-4">
<div class="w-10 h-10 rounded-full bg-secondary-container text-primary flex items-center justify-center">
<span aria-hidden="true" class="text-[20px] font-symbols font-normal not-italic leading-none normal-case whitespace-nowrap [font-feature-settings:'liga'] [word-wrap:normal]">military_tech</span>
</div>
<span class="font-label-sm text-xs px-2.5 py-0.5 rounded-full bg-surface-container-high text-primary font-bold">{{ $page->text('text_95') }}</span>
</div>
<h3 class="editorial-serif font-headline-sm text-xl font-bold text-primary mb-1.5">{{ $page->text('text_96') }}</h3>
<p class="font-body-sm text-xs sm:text-sm text-on-surface-variant leading-relaxed mb-4">{{ $page->text('text_97') }}</p>
</div>
<div class="bg-surface-container-low p-3 rounded-[3rem] font-label-sm text-xs text-primary flex items-center gap-2">
<span aria-hidden="true" class="text-[16px] text-primary font-symbols font-normal not-italic leading-none normal-case whitespace-nowrap [font-feature-settings:'liga'] [word-wrap:normal]">flag</span>
<span class="">{{ $page->text('text_98') }}</span>
</div>
</div>

<div class="bg-surface-container-lowest rounded-2xl p-6 shadow-sm border border-outline-variant/25 hover:shadow-md transition-all flex flex-col justify-between">
<div class="">
<div class="flex items-center justify-between mb-4">
<div class="w-10 h-10 rounded-full bg-secondary-container text-primary flex items-center justify-center">
<span aria-hidden="true" class="text-[20px] font-symbols font-normal not-italic leading-none normal-case whitespace-nowrap [font-feature-settings:'liga'] [word-wrap:normal]">theater_comedy</span>
</div>
<span class="font-label-sm text-xs px-2.5 py-0.5 rounded-full bg-surface-container-high text-primary font-bold">{{ $page->text('text_99') }}</span>
</div>
<h3 class="editorial-serif font-headline-sm text-xl font-bold text-primary mb-1.5">{{ $page->text('text_100') }}</h3>
<p class="font-body-sm text-xs sm:text-sm text-on-surface-variant leading-relaxed mb-4">{{ $page->text('text_101') }}</p>
</div>
<div class="bg-surface-container-low p-3 rounded-[3rem] font-label-sm text-xs text-primary flex items-center gap-2">
<span aria-hidden="true" class="text-[16px] text-tertiary-container font-symbols font-normal not-italic leading-none normal-case whitespace-nowrap [font-feature-settings:'liga'] [word-wrap:normal] [font-variation-settings:'FILL'_1]">emoji_events</span>
<span class="">{{ $page->text('text_102') }}</span>
</div>
</div>

<div class="bg-surface-container-lowest rounded-2xl p-6 shadow-sm border border-outline-variant/25 hover:shadow-md transition-all flex flex-col justify-between">
<div class="">
<div class="flex items-center justify-between mb-4">
<div class="w-10 h-10 rounded-full bg-secondary-container text-primary flex items-center justify-center">
<span aria-hidden="true" class="text-[20px] font-symbols font-normal not-italic leading-none normal-case whitespace-nowrap [font-feature-settings:'liga'] [word-wrap:normal]">menu_book</span>
</div>
<span class="font-label-sm text-xs px-2.5 py-0.5 rounded-full bg-surface-container-high text-primary font-bold">{{ $page->text('text_103') }}</span>
</div>
<h3 class="editorial-serif font-headline-sm text-xl font-bold text-primary mb-1.5">{{ $page->text('text_104') }}</h3>
<p class="font-body-sm text-xs sm:text-sm text-on-surface-variant leading-relaxed mb-4">{{ $page->text('text_105') }}</p>
</div>
<div class="bg-surface-container-low p-3 rounded-[3rem] font-label-sm text-xs text-primary flex items-center gap-2">
<span aria-hidden="true" class="text-[16px] text-primary font-symbols font-normal not-italic leading-none normal-case whitespace-nowrap [font-feature-settings:'liga'] [word-wrap:normal]">auto_stories</span>
<span class="">{{ $page->text('text_106') }}</span>
</div>
</div>
</div>
</div>
</section>

<section class="w-full py-20 bg-[#FFFFFF] border-y border-gray-200">
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
<div class="flex flex-col md:flex-row md:items-end justify-between gap-4 mb-12">
<div class="">
<span class="font-label-sm text-xs uppercase tracking-widest text-secondary font-bold block mb-1">{{ $page->text('text_107') }}</span>
<h2 class="editorial-serif font-headline-xl text-3xl sm:text-4xl text-primary font-normal">{{ $page->text('text_108') }}</h2>
</div>
<p class="font-body-md text-sm sm:text-base text-on-surface-variant max-w-md">{{ $page->text('text_109') }}</p>
</div>
<div class="grid grid-cols-1 md:grid-cols-12 gap-6">

<div class="md:col-span-8 bg-surface-container-lowest rounded-2xl overflow-hidden shadow-sm border border-gray-200 flex flex-col group">
<div class="h-64 sm:h-80 overflow-hidden relative">
<img alt="Studio maker space sekolah modern SMP Harapan Mulia yang luas dengan mesin 3D printer berkedip biru lembut, meja kerja kayu pertukangan robotik ringan, rak alat tertata rapi dengan kotak komponen transparan, jendela kaca besar menghadap taman asri." class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" decoding="async" loading="lazy" src="{{ $page->media('image_5') }}"/>
<div class="absolute inset-0 bg-gradient-to-t from-primary/85 via-primary/25 to-transparent"></div>
<div class="absolute bottom-5 left-5 right-5 text-on-primary">
<span class="font-label-sm text-xs uppercase tracking-wider text-tertiary-fixed block mb-1">{{ $page->text('text_110') }}</span>
<h3 class="editorial-serif font-headline-md text-2xl font-bold">{{ $page->text('text_111') }}</h3>
<p class="font-body-sm text-xs sm:text-sm text-surface-variant max-w-xl mt-1 leading-relaxed">{{ $page->text('text_112') }}</p>
</div>
</div>
</div>

<div class="md:col-span-4 bg-surface-container-lowest rounded-2xl overflow-hidden shadow-sm border border-gray-200 flex flex-col group">
<div class="h-64 sm:h-80 overflow-hidden relative">
<img alt="Gedung olahraga indoor sekolah berlantai kayu vinyl standar FIBA untuk basket dan futsal, dinding akustik terang dengan ventilasi louvered alami, garis lapangan berwarna hijau dan putih kontras bersih." class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" decoding="async" loading="lazy" src="{{ $page->media('image_6') }}"/>
<div class="absolute inset-0 bg-gradient-to-t from-primary/85 via-primary/25 to-transparent"></div>
<div class="absolute bottom-5 left-5 right-5 text-on-primary">
<span class="font-label-sm text-xs uppercase tracking-wider text-tertiary-fixed block mb-1">{{ $page->text('text_113') }}</span>
<h3 class="editorial-serif font-headline-sm text-xl font-bold">{{ $page->text('text_114') }}</h3>
<p class="font-body-sm text-xs sm:text-sm text-surface-variant mt-1">{{ $page->text('text_115') }}</p>
</div>
</div>
</div>

<div class="md:col-span-4 bg-surface-container-lowest rounded-2xl overflow-hidden shadow-sm border border-gray-200 flex flex-col group">
<div class="h-56 overflow-hidden relative">
<img alt="Bilik studio rekaman podcast dan penyiaran mini sekolah dengan dinding panel peredam suara hijau tua elegan, mikrofon condensator di boom arm, dan kontrol mixer audio mini." class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" decoding="async" loading="lazy" src="{{ $page->media('image_7') }}"/>
<div class="absolute inset-0 bg-gradient-to-t from-primary/85 via-primary/20 to-transparent"></div>
<div class="absolute bottom-4 left-4 right-4 text-on-primary">
<h3 class="editorial-serif font-headline-sm text-lg font-bold">{{ $page->text('text_116') }}</h3>
<p class="font-body-sm text-xs text-surface-variant mt-0.5">{{ $page->text('text_117') }}</p>
</div>
</div>
</div>

<div class="md:col-span-4 bg-surface-container-lowest rounded-2xl overflow-hidden shadow-sm border border-gray-200 flex flex-col group">
<div class="h-56 overflow-hidden relative">
<img alt="Laboratorium komputer modern dengan deretan PC All-in-One layar lebar bernuansa minimalis, pencahayaan diffuse warm white, dan kursi ergonomis hijau tua untuk belajar coding dan data science." class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" decoding="async" loading="lazy" src="{{ $page->media('image_8') }}"/>
<div class="absolute inset-0 bg-gradient-to-t from-primary/85 via-primary/20 to-transparent"></div>
<div class="absolute bottom-4 left-4 right-4 text-on-primary">
<h3 class="editorial-serif font-headline-sm text-lg font-bold">{{ $page->text('text_118') }}</h3>
<p class="font-body-sm text-xs text-surface-variant mt-0.5">{{ $page->text('text_119') }}</p>
</div>
</div>
</div>

<div class="md:col-span-4 bg-surface-container-lowest rounded-2xl overflow-hidden shadow-sm border border-gray-200 flex flex-col group">
<div class="h-56 overflow-hidden relative">
<img alt="Amfiteater kayu bertingkat di teras semi-terbuka dekat taman sekolah, siswa-siswi sedang berdiskusi santai membawa buku catatan di bawah naungan pohon rindang berangin sejuk." class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" decoding="async" loading="lazy" src="{{ $page->media('image_9') }}"/>
<div class="absolute inset-0 bg-gradient-to-t from-primary/85 via-primary/20 to-transparent"></div>
<div class="absolute bottom-4 left-4 right-4 text-on-primary">
<h3 class="editorial-serif font-headline-sm text-lg font-bold">{{ $page->text('text_120') }}</h3>
<p class="font-body-sm text-xs text-surface-variant mt-0.5">{{ $page->text('text_121') }}</p>
</div>
</div>
</div>
</div>
</div>
</section>

<section class="w-full py-20" id="alur-ppdb">
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
<div class="grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-14">

<div class="lg:col-span-7 flex flex-col">
<span class="font-label-sm text-xs uppercase tracking-widest text-secondary font-bold mb-1">{{ $page->text('text_122') }}</span>
<h2 class="editorial-serif font-headline-xl text-3xl sm:text-4xl text-primary font-normal mb-3">{{ $page->text('text_123') }}</h2>
<p class="font-body-md text-sm sm:text-base text-on-surface-variant mb-8">{{ $page->text('text_124') }}</p>

<div class="space-y-4">

<div class="flex items-start gap-4 p-5 rounded-2xl bg-surface-container-lowest shadow-sm border border-outline-variant/25">
<div class="w-10 h-10 rounded-full bg-primary text-tertiary-fixed flex items-center justify-center font-bold text-lg flex-shrink-0">{{ $page->text('text_125') }}</div>
<div class="flex-1">
<div class="flex items-center justify-between">
<h3 class="editorial-serif font-headline-sm text-lg font-bold text-primary">{{ $page->text('text_126') }}</h3>
<span class="font-label-sm text-xs text-secondary bg-surface-container-low px-2.5 py-0.5 rounded-full font-medium">{{ $page->text('text_127') }}</span>
</div>
<p class="font-body-sm text-xs sm:text-sm text-on-surface-variant mt-1.5 leading-relaxed">{{ $page->text('text_128') }}</p>
<span class="font-label-sm text-xs text-primary font-bold block mt-2">{{ $page->text('text_129') }}</span>
</div>
</div>

<div class="flex items-start gap-4 p-5 rounded-2xl bg-surface-container-lowest shadow-sm border border-outline-variant/25">
<div class="w-10 h-10 rounded-full bg-primary text-tertiary-fixed flex items-center justify-center font-bold text-lg flex-shrink-0">{{ $page->text('text_130') }}</div>
<div class="flex-1">
<div class="flex items-center justify-between">
<h3 class="editorial-serif font-headline-sm text-lg font-bold text-primary">{{ $page->text('text_131') }}</h3>
<span class="font-label-sm text-xs text-secondary bg-surface-container-low px-2.5 py-0.5 rounded-full font-medium">{{ $page->text('text_132') }}</span>
</div>
<p class="font-body-sm text-xs sm:text-sm text-on-surface-variant mt-1.5 leading-relaxed">{{ $page->text('text_133') }}</p>
</div>
</div>

<div class="flex items-start gap-4 p-5 rounded-2xl bg-surface-container-lowest shadow-sm border border-outline-variant/25">
<div class="w-10 h-10 rounded-full bg-primary text-tertiary-fixed flex items-center justify-center font-bold text-lg flex-shrink-0">{{ $page->text('text_134') }}</div>
<div class="flex-1">
<div class="flex items-center justify-between">
<h3 class="editorial-serif font-headline-sm text-lg font-bold text-primary">{{ $page->text('text_135') }}</h3>
<span class="font-label-sm text-xs text-secondary bg-surface-container-low px-2.5 py-0.5 rounded-full font-medium">{{ $page->text('text_136') }}</span>
</div>
<p class="font-body-sm text-xs sm:text-sm text-on-surface-variant mt-1.5 leading-relaxed">{{ $page->text('text_137') }}</p>
</div>
</div>

<div class="flex items-start gap-4 p-5 rounded-2xl bg-surface-container-lowest shadow-sm border border-outline-variant/25">
<div class="w-10 h-10 rounded-full bg-primary-container text-tertiary-fixed flex items-center justify-center font-bold text-lg flex-shrink-0">{{ $page->text('text_138') }}</div>
<div class="flex-1">
<div class="flex items-center justify-between">
<h3 class="editorial-serif font-headline-sm text-lg font-bold text-primary">{{ $page->text('text_139') }}</h3>
<span class="font-label-sm text-xs text-on-tertiary-fixed bg-tertiary-fixed px-2.5 py-0.5 rounded-full font-bold">{{ $page->text('text_140') }}</span>
</div>
<p class="font-body-sm text-xs sm:text-sm text-on-surface-variant mt-1.5 leading-relaxed">{{ $page->text('text_141') }}</p>
</div>
</div>
</div>
</div>

<div class="lg:col-span-5 flex flex-col">
<span class="font-label-sm text-xs uppercase tracking-widest text-secondary font-bold mb-1">{{ $page->text('text_142') }}</span>
<h2 class="editorial-serif font-headline-xl text-3xl sm:text-4xl text-primary font-normal mb-3">{{ $page->text('text_143') }}</h2>
<p class="font-body-md text-sm sm:text-base text-on-surface-variant mb-8">{{ $page->text('text_144') }}</p>

<div class="space-y-3.5" id="faq-smp-container">

<div class="bg-surface-container-lowest rounded-2xl p-5 shadow-sm border border-outline-variant/25" x-data="{ expanded: false }">
<button :aria-expanded="expanded" @click="expanded = !expanded" class="w-full flex items-center justify-between text-left focus:outline-none gap-3" type="button">
<span class="editorial-serif font-headline-sm text-base sm:text-lg font-bold text-primary">{{ $page->text('text_145') }}</span>
<span aria-hidden="true" class="text-secondary transition-transform duration-200 flex-shrink-0 font-symbols font-normal not-italic leading-none normal-case whitespace-nowrap [font-feature-settings:'liga'] [word-wrap:normal]">expand_more</span>
</button>
<div class="mt-3 text-body-sm text-xs sm:text-sm text-on-surface-variant leading-relaxed pt-2 border-t border-outline-variant/20" x-cloak="" x-show="expanded">{{ $page->text('text_146') }}</div>
</div>

<div class="bg-surface-container-lowest rounded-2xl p-5 shadow-sm border border-outline-variant/25" x-data="{ expanded: false }">
<button :aria-expanded="expanded" @click="expanded = !expanded" class="w-full flex items-center justify-between text-left focus:outline-none gap-3" type="button">
<span class="editorial-serif font-headline-sm text-base sm:text-lg font-bold text-primary">{{ $page->text('text_147') }}</span>
<span aria-hidden="true" class="text-secondary transition-transform duration-200 flex-shrink-0 font-symbols font-normal not-italic leading-none normal-case whitespace-nowrap [font-feature-settings:'liga'] [word-wrap:normal]">expand_more</span>
</button>
<div class="mt-3 text-body-sm text-xs sm:text-sm text-on-surface-variant leading-relaxed pt-2 border-t border-outline-variant/20" x-cloak="" x-show="expanded">{{ $page->text('text_148') }}</div>
</div>

<div class="bg-surface-container-lowest rounded-2xl p-5 shadow-sm border border-outline-variant/25" x-data="{ expanded: false }">
<button :aria-expanded="expanded" @click="expanded = !expanded" class="w-full flex items-center justify-between text-left focus:outline-none gap-3" type="button">
<span class="editorial-serif font-headline-sm text-base sm:text-lg font-bold text-primary">{{ $page->text('text_149') }}</span>
<span aria-hidden="true" class="text-secondary transition-transform duration-200 flex-shrink-0 font-symbols font-normal not-italic leading-none normal-case whitespace-nowrap [font-feature-settings:'liga'] [word-wrap:normal]">expand_more</span>
</button>
<div class="mt-3 text-body-sm text-xs sm:text-sm text-on-surface-variant leading-relaxed pt-2 border-t border-outline-variant/20" x-cloak="" x-show="expanded">{{ $page->text('text_150') }}</div>
</div>

<div class="bg-surface-container-lowest rounded-2xl p-5 shadow-sm border border-outline-variant/25" x-data="{ expanded: false }">
<button :aria-expanded="expanded" @click="expanded = !expanded" class="w-full flex items-center justify-between text-left focus:outline-none gap-3" type="button">
<span class="editorial-serif font-headline-sm text-base sm:text-lg font-bold text-primary">{{ $page->text('text_151') }}</span>
<span aria-hidden="true" class="text-secondary transition-transform duration-200 flex-shrink-0 font-symbols font-normal not-italic leading-none normal-case whitespace-nowrap [font-feature-settings:'liga'] [word-wrap:normal]">expand_more</span>
</button>
<div class="mt-3 text-body-sm text-xs sm:text-sm text-on-surface-variant leading-relaxed pt-2 border-t border-outline-variant/20" x-cloak="" x-show="expanded">{{ $page->text('text_152') }}</div>
</div>
</div>

<div class="mt-5 p-5 bg-[#FAF9F5] rounded-2xl border border-gray-200 flex flex-wrap sm:flex-nowrap items-center justify-between gap-4 shadow-sm">
<div class="flex items-center gap-3">
<div class="w-10 h-10 rounded-full bg-primary text-tertiary-fixed flex items-center justify-center flex-shrink-0 shadow-sm">
<span aria-hidden="true" class="text-[20px] font-symbols font-normal not-italic leading-none normal-case whitespace-nowrap [font-feature-settings:'liga'] [word-wrap:normal]">support_agent</span>
</div>
<div class="flex flex-col">
<span class="font-label-md text-xs sm:text-sm font-bold text-primary">{{ $page->text('text_153') }}</span>
<span class="font-body-sm text-xs text-on-surface-variant">{{ $page->text('text_154') }}</span>
</div>
</div>
<a class="px-5 py-2 rounded-full bg-primary text-on-primary font-label-sm text-xs font-bold hover:bg-primary-container transition-all shadow-sm flex-shrink-0" href="https://wa.me/628123456789" target="_blank">{{ $page->text('text_155') }}</a>
</div>
</div>
</div>
</div>
</section>

<section class="w-full py-16 bg-primary text-on-primary" id="konsultasi-minat">
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
<div class="relative rounded-3xl bg-primary-container p-8 sm:p-12 lg:p-16 overflow-hidden border border-outline-variant/20 shadow-2xl">

<div class="absolute -right-20 -top-20 w-80 h-80 rounded-full bg-tertiary/40 blur-3xl pointer-events-none"></div>
<div class="absolute -left-20 -bottom-20 w-80 h-80 rounded-full bg-surface-tint/30 blur-3xl pointer-events-none"></div>
<div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12 items-center relative z-10">
<div class="lg:col-span-8 flex flex-col">
<div class="inline-flex items-center gap-2 mb-2">
<span class="w-2 h-2 rounded-full bg-tertiary-fixed"></span>
<span class="font-label-sm text-xs uppercase tracking-widest text-tertiary-fixed font-bold">{{ $page->text('text_156') }}</span>
</div>
<h2 class="editorial-serif font-headline-xl text-3xl sm:text-4xl lg:text-[40px] font-normal text-on-primary mb-4 leading-tight">{{ $page->text('text_157') }}</h2>
<p class="font-body-lg text-sm sm:text-base text-primary-fixed-dim max-w-2xl leading-relaxed mb-6">{{ $page->text('text_158') }}</p>
<div class="flex flex-wrap items-center gap-5 text-xs sm:text-sm text-primary-fixed-dim">
<div class="flex items-center gap-2">
<span aria-hidden="true" class="text-tertiary-fixed text-[20px] font-symbols font-normal not-italic leading-none normal-case whitespace-nowrap [font-feature-settings:'liga'] [word-wrap:normal]">calendar_month</span>
<span class="">{{ $page->text('text_159') }}</span>
</div>
<div class="flex items-center gap-2">
<span aria-hidden="true" class="text-tertiary-fixed text-[20px] font-symbols font-normal not-italic leading-none normal-case whitespace-nowrap [font-feature-settings:'liga'] [word-wrap:normal]">pin_drop</span>
<span class="">{{ $page->text('text_160') }}</span>
</div>
</div>
</div>

<div class="lg:col-span-4 flex flex-col gap-3.5 sm:flex-row lg:flex-col justify-center">
<a class="w-full inline-flex items-center justify-center gap-2 px-6 py-4 rounded-full bg-tertiary-fixed text-on-tertiary-fixed font-label-lg text-sm font-bold hover:bg-tertiary-fixed-dim transition-all duration-200 shadow-md text-center hover:scale-[1.02]" href="https://wa.me/628123456789" target="_blank">
<span class="">{{ $page->text('text_161') }}</span>
<span aria-hidden="true" class="text-[18px] font-symbols font-normal not-italic leading-none normal-case whitespace-nowrap [font-feature-settings:'liga'] [word-wrap:normal]">arrow_forward</span>
</a>
<a class="w-full inline-flex items-center justify-center gap-2 px-6 py-3.5 rounded-full bg-surface-container-lowest/10 text-on-primary hover:bg-surface-container-lowest/20 font-label-lg text-sm transition-colors text-center border border-white/20" href="/kontak">
<span aria-hidden="true" class="text-[18px] font-symbols font-normal not-italic leading-none normal-case whitespace-nowrap [font-feature-settings:'liga'] [word-wrap:normal]">download</span>
<span class="">{{ $page->text('text_162') }}</span>
</a>
</div>
</div>
</div>
</div>
</section>


</div>
</main>
@endsection
