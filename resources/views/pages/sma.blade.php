@extends('layouts.public')
@section('content')
<main class="pt-20" id="main-content">
<div class="flex flex-col w-full">

<section class="relative w-full overflow-hidden pb-space-xl">
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

<div class="flex flex-wrap items-center justify-between gap-space-sm pt-space-md mb-space-lg">
<div class="flex items-center gap-space-xs font-label-md text-label-md text-secondary">
<a class="hover:text-primary transition-colors" href="/sekolah">{{ $page->text('text_1') }}</a>
<span aria-hidden="true" class="text-[14px] font-symbols font-normal not-italic leading-none normal-case whitespace-nowrap [font-feature-settings:'liga'] [word-wrap:normal]">chevron_right</span>
<span class="text-primary font-bold">{{ $page->text('text_2') }}</span>
</div>
<div class="inline-flex items-center gap-2 px-space-md py-1 rounded-full bg-surface-container-high text-primary font-label-sm text-label-sm uppercase tracking-wider">
<span class="w-2 h-2 rounded-full bg-primary animate-pulse"></span>
<span class="">{{ $page->text('text_3') }}</span>
</div>
</div>

<div class="grid grid-cols-1 lg:grid-cols-12 gap-space-lg items-center">

<div class="lg:col-span-6 flex flex-col space-y-space-md">
<span class="font-label-sm text-label-sm uppercase tracking-widest text-secondary font-bold">{{ $page->text('text_4') }}</span>
<h1 class="font-headline-2xl text-headline-2xl text-primary font-normal leading-[1.08] tracking-tight">{{ $page->text('text_5') }}<span class="italic font-newsreader font-serif text-primary-container">{{ $page->text('text_6') }}</span>
</h1>
<p class="font-body-xl text-body-xl text-on-surface-variant max-w-xl leading-relaxed">{{ $page->text('text_7') }}</p>

<div class="grid grid-cols-3 gap-space-xs p-space-sm rounded-[2rem] bg-surface-container-low">
<div class="px-space-xs flex flex-col">
<span class="font-headline-md text-headline-md text-primary font-bold">{{ $page->text('text_8') }}</span>
<span class="font-body-sm text-body-sm text-on-surface-variant">{{ $page->text('text_9') }}</span>
</div>
<div class="px-space-xs flex flex-col border-l border-outline-variant/30 pl-space-sm">
<span class="font-headline-md text-headline-md text-primary font-bold">{{ $page->text('text_10') }}</span>
<span class="font-body-sm text-body-sm text-on-surface-variant">{{ $page->text('text_11') }}</span>
</div>
<div class="px-space-xs flex flex-col border-l border-outline-variant/30 pl-space-sm">
<span class="font-headline-md text-headline-md text-primary font-bold">{{ $page->text('text_12') }}</span>
<span class="font-body-sm text-body-sm text-on-surface-variant">{{ $page->text('text_13') }}</span>
</div>
</div>

<div class="flex flex-wrap items-center gap-space-sm pt-space-xs">
<a class="inline-flex items-center gap-space-xs px-space-lg py-space-sm rounded-full bg-primary text-on-primary font-label-lg text-label-lg hover:bg-primary-container transition-all shadow-md group" href="#daftar-sma">
<span class="">{{ $page->text('text_14') }}</span>
<span aria-hidden="true" class="text-[18px] transition-transform group-hover:translate-x-1 font-symbols font-normal not-italic leading-none normal-case whitespace-nowrap [font-feature-settings:'liga'] [word-wrap:normal]">arrow_forward</span>
</a>
<a class="inline-flex items-center gap-space-xs px-space-lg py-space-sm rounded-full bg-surface-container text-primary font-label-lg text-label-lg hover:bg-surface-container-high transition-colors" href="#kurikulum">
<span aria-hidden="true" class="text-[18px] font-symbols font-normal not-italic leading-none normal-case whitespace-nowrap [font-feature-settings:'liga'] [word-wrap:normal]">download</span>
<span class="">{{ $page->text('text_15') }}</span>
</a>
</div>
</div>

<div class="lg:col-span-6 relative">
<div class="relative w-full rounded-[3rem] overflow-hidden shadow-xl bg-surface-container aspect-[4/3]">
<img alt="Dua siswa SMA Indonesia mengenakan seragam putih abu-abu elegan dengan rompi hijau tua sedang berdiskusi intensif di laboratorium sains berteknologi tinggi dengan mikroskop digital dan layar monitor, pencahayaan sinematik natural yang hangat dan berkelas." class="w-full h-full object-cover" decoding="async" fetchpriority="high" loading="eager" src="{{ $page->media('image_1') }}"/>
<div class="absolute inset-0 bg-gradient-to-t from-primary/60 via-transparent to-transparent"></div>
<div class="absolute bottom-6 left-6 right-6 flex items-center justify-between text-on-primary">
<div class="">
<span class="font-label-sm text-label-sm uppercase tracking-wider block opacity-80">{{ $page->text('text_16') }}</span>
<span class="font-headline-sm text-headline-sm font-semibold">{{ $page->text('text_17') }}</span>
</div>
<div class="w-12 h-12 rounded-full bg-tertiary-fixed text-on-tertiary-fixed flex items-center justify-center shadow-lg">
<span aria-hidden="true" class="text-[24px] font-symbols font-normal not-italic leading-none normal-case whitespace-nowrap [font-feature-settings:'liga'] [word-wrap:normal]">science</span>
</div>
</div>
</div>

<div class="hidden sm:flex absolute -bottom-6 -left-6 max-w-xs p-space-md rounded-[2rem] bg-surface-container-lowest shadow-xl flex-col gap-1 z-10">
<div class="flex items-center gap-space-xs text-primary">
<span aria-hidden="true" class="text-[20px] font-symbols font-normal not-italic leading-none normal-case whitespace-nowrap [font-feature-settings:'liga'] [word-wrap:normal]">verified</span>
<span class="font-label-sm text-label-sm uppercase tracking-wider font-bold">{{ $page->text('text_18') }}</span>
</div>
<p class="font-body-sm text-body-sm text-on-surface-variant italic font-headline-sm">{{ $page->text('text_19') }}</p>
</div>
</div>
</div>
</div>
</section>

<section class="py-space-xl bg-surface-container-lowest">
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
<div class="grid grid-cols-1 lg:grid-cols-12 gap-space-xl items-center">

<div class="lg:col-span-5 relative flex justify-center">
<div class="relative w-full max-w-sm">
<div class="w-full aspect-[4/5] rounded-[3rem] overflow-hidden shadow-lg bg-surface-container">
<img alt="Potret formal ramah kepala sekolah pria paruh baya Indonesia berwibawa mengenakan kemeja batik tenun elegan bersongket hijau tua di ruang perpustakaan modern dengan latar buku-buku referensi akademik, senyum bijak berwibawa." class="w-full h-full object-cover" decoding="async" loading="lazy" src="{{ $page->media('image_2') }}"/>
</div>
<div class="absolute -bottom-4 right-4 bg-primary text-on-primary p-space-md rounded-[1rem] shadow-md flex flex-col">
<span class="font-headline-sm text-headline-sm font-bold">{{ $page->text('text_20') }}</span>
<span class="font-body-sm text-body-sm text-on-primary-container">{{ $page->text('text_21') }}</span>
</div>
</div>
</div>

<div class="lg:col-span-7 flex flex-col space-y-space-md">
<div class="inline-flex items-center gap-2">
<span class="w-8 h-[2px] bg-secondary"></span>
<span class="font-label-sm text-label-sm uppercase tracking-widest text-secondary font-bold">{{ $page->text('text_22') }}</span>
</div>
<h2 class="font-headline-xl text-headline-xl text-primary font-normal leading-tight">{{ $page->text('text_23') }}</h2>
<div class="space-y-space-sm font-body-lg text-body-lg text-on-surface-variant leading-relaxed">
<p class="">{{ $page->text('text_24') }}</p>
<p class="">{{ $page->text('text_25') }}</p>
</div>

<div class="pt-space-xs flex flex-wrap gap-space-sm">
<span class="px-space-md py-1.5 rounded-full bg-surface-container text-primary font-label-md text-label-md flex items-center gap-1.5">
<span aria-hidden="true" class="text-[16px] font-symbols font-normal not-italic leading-none normal-case whitespace-nowrap [font-feature-settings:'liga'] [word-wrap:normal]">menu_book</span>{{ $page->text('text_26') }}</span>
<span class="px-space-md py-1.5 rounded-full bg-surface-container text-primary font-label-md text-label-md flex items-center gap-1.5">
<span aria-hidden="true" class="text-[16px] font-symbols font-normal not-italic leading-none normal-case whitespace-nowrap [font-feature-settings:'liga'] [word-wrap:normal]">military_tech</span>{{ $page->text('text_27') }}</span>
</div>
</div>
</div>
</div>
</section>

<section class="py-space-xl bg-surface" id="kurikulum">
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
<div class="flex flex-col md:flex-row md:items-end justify-between mb-space-xl gap-space-md">
<div class="">
<span class="font-label-sm text-label-sm uppercase tracking-widest text-secondary font-bold block mb-1">{{ $page->text('text_28') }}</span>
<h2 class="font-headline-xl text-headline-xl text-primary">{{ $page->text('text_29') }}</h2>
</div>
<p class="font-body-md text-body-md text-on-surface-variant max-w-md">{{ $page->text('text_30') }}</p>
</div>

<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-space-md">

<div class="rounded-[3rem] bg-surface-container-lowest p-space-lg flex flex-col justify-between shadow-sm hover:shadow-md transition-shadow group">
<div class="">
<div class="w-12 h-12 rounded-full bg-surface-container-low text-primary flex items-center justify-center mb-space-md group-hover:bg-primary group-hover:text-on-primary transition-colors">
<span aria-hidden="true" class="text-[24px] font-symbols font-normal not-italic leading-none normal-case whitespace-nowrap [font-feature-settings:'liga'] [word-wrap:normal]">biotech</span>
</div>
<span class="font-label-sm text-label-sm uppercase tracking-wider text-secondary font-bold block mb-1">{{ $page->text('text_31') }}</span>
<h3 class="font-headline-sm text-headline-sm text-primary font-semibold mb-space-xs">{{ $page->text('text_32') }}</h3>
<p class="font-body-md text-body-md text-on-surface-variant mb-space-md">{{ $page->text('text_33') }}</p>
</div>
<ul class="space-y-1.5 font-body-sm text-body-sm text-on-surface-variant border-t border-outline-variant/20 pt-space-sm">
<li class="flex items-center gap-1.5"><span aria-hidden="true" class="text-[14px] text-primary font-symbols font-normal not-italic leading-none normal-case whitespace-nowrap [font-feature-settings:'liga'] [word-wrap:normal]">check_circle</span>{{ $page->text('text_34') }}</li>
<li class="flex items-center gap-1.5"><span aria-hidden="true" class="text-[14px] text-primary font-symbols font-normal not-italic leading-none normal-case whitespace-nowrap [font-feature-settings:'liga'] [word-wrap:normal]">check_circle</span>{{ $page->text('text_35') }}</li>
</ul>
</div>

<div class="rounded-[3rem] bg-surface-container-lowest p-space-lg flex flex-col justify-between shadow-sm hover:shadow-md transition-shadow group">
<div class="">
<div class="w-12 h-12 rounded-full bg-surface-container-low text-primary flex items-center justify-center mb-space-md group-hover:bg-primary group-hover:text-on-primary transition-colors">
<span aria-hidden="true" class="text-[24px] font-symbols font-normal not-italic leading-none normal-case whitespace-nowrap [font-feature-settings:'liga'] [word-wrap:normal]">account_balance</span>
</div>
<span class="font-label-sm text-label-sm uppercase tracking-wider text-secondary font-bold block mb-1">{{ $page->text('text_36') }}</span>
<h3 class="font-headline-sm text-headline-sm text-primary font-semibold mb-space-xs">{{ $page->text('text_37') }}</h3>
<p class="font-body-md text-body-md text-on-surface-variant mb-space-md">{{ $page->text('text_38') }}</p>
</div>
<ul class="space-y-1.5 font-body-sm text-body-sm text-on-surface-variant border-t border-outline-variant/20 pt-space-sm">
<li class="flex items-center gap-1.5"><span aria-hidden="true" class="text-[14px] text-primary font-symbols font-normal not-italic leading-none normal-case whitespace-nowrap [font-feature-settings:'liga'] [word-wrap:normal]">check_circle</span>{{ $page->text('text_39') }}</li>
<li class="flex items-center gap-1.5"><span aria-hidden="true" class="text-[14px] text-primary font-symbols font-normal not-italic leading-none normal-case whitespace-nowrap [font-feature-settings:'liga'] [word-wrap:normal]">check_circle</span>{{ $page->text('text_40') }}</li>
</ul>
</div>

<div class="rounded-[3rem] bg-primary-container text-on-primary p-space-lg flex flex-col justify-between shadow-sm hover:shadow-md transition-shadow group">
<div class="">
<div class="w-12 h-12 rounded-full bg-surface-container text-primary flex items-center justify-center mb-space-md group-hover:scale-105 transition-transform">
<span aria-hidden="true" class="text-[24px] font-symbols font-normal not-italic leading-none normal-case whitespace-nowrap [font-feature-settings:'liga'] [word-wrap:normal]">public</span>
</div>
<span class="font-label-sm text-label-sm uppercase tracking-wider text-tertiary-fixed font-bold block mb-1">{{ $page->text('text_41') }}</span>
<h3 class="font-headline-sm text-headline-sm text-on-primary font-semibold mb-space-xs">{{ $page->text('text_42') }}</h3>
<p class="font-body-md text-body-md text-on-primary-container mb-space-md">{{ $page->text('text_43') }}</p>
</div>
<ul class="space-y-1.5 font-body-sm text-body-sm text-on-primary-container border-t border-primary/40 pt-space-sm">
<li class="flex items-center gap-1.5"><span aria-hidden="true" class="text-[14px] text-tertiary-fixed font-symbols font-normal not-italic leading-none normal-case whitespace-nowrap [font-feature-settings:'liga'] [word-wrap:normal]">check_circle</span>{{ $page->text('text_44') }}</li>
<li class="flex items-center gap-1.5"><span aria-hidden="true" class="text-[14px] text-tertiary-fixed font-symbols font-normal not-italic leading-none normal-case whitespace-nowrap [font-feature-settings:'liga'] [word-wrap:normal]">check_circle</span>{{ $page->text('text_45') }}</li>
</ul>
</div>

<div class="rounded-[3rem] bg-surface-container-lowest p-space-lg flex flex-col justify-between shadow-sm hover:shadow-md transition-shadow group">
<div class="">
<div class="w-12 h-12 rounded-full bg-surface-container-low text-primary flex items-center justify-center mb-space-md group-hover:bg-primary group-hover:text-on-primary transition-colors">
<span aria-hidden="true" class="text-[24px] font-symbols font-normal not-italic leading-none normal-case whitespace-nowrap [font-feature-settings:'liga'] [word-wrap:normal]">lightbulb</span>
</div>
<span class="font-label-sm text-label-sm uppercase tracking-wider text-secondary font-bold block mb-1">{{ $page->text('text_46') }}</span>
<h3 class="font-headline-sm text-headline-sm text-primary font-semibold mb-space-xs">{{ $page->text('text_47') }}</h3>
<p class="font-body-md text-body-md text-on-surface-variant mb-space-md">{{ $page->text('text_48') }}</p>
</div>
<ul class="space-y-1.5 font-body-sm text-body-sm text-on-surface-variant border-t border-outline-variant/20 pt-space-sm">
<li class="flex items-center gap-1.5"><span aria-hidden="true" class="text-[14px] text-primary font-symbols font-normal not-italic leading-none normal-case whitespace-nowrap [font-feature-settings:'liga'] [word-wrap:normal]">check_circle</span>{{ $page->text('text_49') }}</li>
<li class="flex items-center gap-1.5"><span aria-hidden="true" class="text-[14px] text-primary font-symbols font-normal not-italic leading-none normal-case whitespace-nowrap [font-feature-settings:'liga'] [word-wrap:normal]">check_circle</span>{{ $page->text('text_50') }}</li>
</ul>
</div>
</div>
</div>
</section>

<section class="py-space-xl bg-surface-container-lowest">
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

<div class="text-center max-w-3xl mx-auto mb-space-xl">
<span class="font-label-sm text-label-sm uppercase tracking-widest text-secondary font-bold block mb-1">{{ $page->text('text_51') }}</span>
<h2 class="font-headline-xl text-headline-xl text-primary mb-space-xs">{{ $page->text('text_52') }}</h2>
<p class="font-body-lg text-body-lg text-on-surface-variant">{{ $page->text('text_53') }}</p>
</div>

<div class="grid grid-cols-1 md:grid-cols-3 gap-space-lg mb-space-xl">
<div class="p-space-lg rounded-[3rem] bg-surface-container flex flex-col">
<span class="font-headline-md text-headline-md text-primary font-bold mb-2">{{ $page->text('text_54') }}</span>
<p class="font-body-md text-body-md text-on-surface-variant leading-relaxed mb-space-md">{{ $page->text('text_55') }}</p>
<div class="mt-auto pt-space-sm flex items-center gap-2 text-primary font-label-md text-label-md">
<span aria-hidden="true" class="text-[18px] font-symbols font-normal not-italic leading-none normal-case whitespace-nowrap [font-feature-settings:'liga'] [word-wrap:normal]">school</span>
<span class="">{{ $page->text('text_56') }}</span>
</div>
</div>
<div class="p-space-lg rounded-[3rem] bg-surface-container flex flex-col">
<span class="font-headline-md text-headline-md text-primary font-bold mb-2">{{ $page->text('text_57') }}</span>
<p class="font-body-md text-body-md text-on-surface-variant leading-relaxed mb-space-md">{{ $page->text('text_58') }}</p>
<div class="mt-auto pt-space-sm flex items-center gap-2 text-primary font-label-md text-label-md">
<span aria-hidden="true" class="text-[18px] font-symbols font-normal not-italic leading-none normal-case whitespace-nowrap [font-feature-settings:'liga'] [word-wrap:normal]">flight_takeoff</span>
<span class="">{{ $page->text('text_59') }}</span>
</div>
</div>
<div class="p-space-lg rounded-[3rem] bg-surface-container flex flex-col">
<span class="font-headline-md text-headline-md text-primary font-bold mb-2">{{ $page->text('text_60') }}</span>
<p class="font-body-md text-body-md text-on-surface-variant leading-relaxed mb-space-md">{{ $page->text('text_61') }}</p>
<div class="mt-auto pt-space-sm flex items-center gap-2 text-primary font-label-md text-label-md">
<span aria-hidden="true" class="text-[18px] font-symbols font-normal not-italic leading-none normal-case whitespace-nowrap [font-feature-settings:'liga'] [word-wrap:normal]">edit_note</span>
<span class="">{{ $page->text('text_62') }}</span>
</div>
</div>
</div>

<div class="p-space-lg rounded-[3rem] bg-surface">
<h3 class="font-headline-sm text-headline-sm text-primary mb-space-md font-semibold text-center">{{ $page->text('text_63') }}</h3>
<div class="grid grid-cols-1 md:grid-cols-3 gap-space-md">

<div class="p-space-md rounded-[2rem] bg-surface-container-lowest shadow-sm flex flex-col justify-between">
<p class="font-body-md text-body-md text-on-surface-variant italic mb-space-md">{{ $page->text('text_64') }}</p>
<div class="flex items-center gap-space-sm border-t border-outline-variant/20 pt-space-sm">
<div class="w-10 h-10 rounded-full bg-surface-container overflow-hidden">
<img alt="Foto potret mahasiswi kedokteran muda Indonesia tersenyum berjaket kuning Universitas Indonesia dengan latar kampus hijau asri." class="w-full h-full object-cover" decoding="async" loading="lazy" src="{{ $page->media('image_3') }}"/>
</div>
<div class="flex flex-col">
<span class="font-label-md text-label-md text-primary font-bold">{{ $page->text('text_65') }}</span>
<span class="font-body-sm text-body-sm text-on-surface-variant">{{ $page->text('text_66') }}</span>
</div>
</div>
</div>

<div class="p-space-md rounded-[2rem] bg-surface-container-lowest shadow-sm flex flex-col justify-between">
<p class="font-body-md text-body-md text-on-surface-variant italic mb-space-md">{{ $page->text('text_67') }}</p>
<div class="flex items-center gap-space-sm border-t border-outline-variant/20 pt-space-sm">
<div class="w-10 h-10 rounded-full bg-surface-container overflow-hidden">
<img alt="Foto potret mahasiswa pria Indonesia mengenakan jas kasual cerdas di depan gedung megah University of Melbourne Australia, senyum percaya diri." class="w-full h-full object-cover" decoding="async" loading="lazy" src="{{ $page->media('image_4') }}"/>
</div>
<div class="flex flex-col">
<span class="font-label-md text-label-md text-primary font-bold">{{ $page->text('text_68') }}</span>
<span class="font-body-sm text-body-sm text-on-surface-variant">{{ $page->text('text_69') }}</span>
</div>
</div>
</div>

<div class="p-space-md rounded-[2rem] bg-surface-container-lowest shadow-sm flex flex-col justify-between">
<p class="font-body-md text-body-md text-on-surface-variant italic mb-space-md">{{ $page->text('text_70') }}</p>
<div class="flex items-center gap-space-sm border-t border-outline-variant/20 pt-space-sm">
<div class="w-10 h-10 rounded-full bg-surface-container overflow-hidden">
<img alt="Foto potret pemuda mahasiswa teknik informatika Indonesia berkacamata di ruang komputasi canggih Institut Teknologi Bandung." class="w-full h-full object-cover" decoding="async" loading="lazy" src="{{ $page->media('image_5') }}"/>
</div>
<div class="flex flex-col">
<span class="font-label-md text-label-md text-primary font-bold">{{ $page->text('text_71') }}</span>
<span class="font-body-sm text-body-sm text-on-surface-variant">{{ $page->text('text_72') }}</span>
</div>
</div>
</div>
</div>
</div>
</div>
</section>

<section class="py-space-xl bg-surface" id="fasilitas">
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
<div class="flex flex-col md:flex-row md:items-end justify-between mb-space-xl gap-space-md">
<div class="">
<span class="font-label-sm text-label-sm uppercase tracking-widest text-secondary font-bold block mb-1">{{ $page->text('text_73') }}</span>
<h2 class="font-headline-xl text-headline-xl text-primary">{{ $page->text('text_74') }}</h2>
</div>
<p class="font-body-md text-body-md text-on-surface-variant max-w-md">{{ $page->text('text_75') }}</p>
</div>

<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-space-md">

<div class="rounded-[3rem] overflow-hidden bg-surface-container-lowest shadow-sm flex flex-col group">
<div class="w-full aspect-[4/3] overflow-hidden bg-surface-container">
<img alt="Laboratorium sains SMA terpadu modern dengan meja kerja granit tahan bahan kimia, lemari asam, peralatan mikroskop elektron modern, dan tabung kaca eksperimen rapi." class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300" decoding="async" loading="lazy" src="{{ $page->media('image_6') }}"/>
</div>
<div class="p-space-md flex flex-col flex-1 justify-between">
<div class="">
<span class="font-label-sm text-label-sm text-secondary uppercase tracking-wider font-bold">{{ $page->text('text_76') }}</span>
<h4 class="font-headline-sm text-headline-sm text-primary font-semibold mt-1 mb-1">{{ $page->text('text_77') }}</h4>
<p class="font-body-sm text-body-sm text-on-surface-variant">{{ $page->text('text_78') }}</p>
</div>
</div>
</div>

<div class="rounded-[3rem] overflow-hidden bg-surface-container-lowest shadow-sm flex flex-col group">
<div class="w-full aspect-[4/3] overflow-hidden bg-surface-container">
<img alt="Ruang pembuatan prototipe teknologi dan maker space dengan printer 3D, sensor mikrokontroler Arduino, komputer iMac, dan alat solder presisi untuk robotika SMA." class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300" decoding="async" loading="lazy" src="{{ $page->media('image_7') }}"/>
</div>
<div class="p-space-md flex flex-col flex-1 justify-between">
<div class="">
<span class="font-label-sm text-label-sm text-secondary uppercase tracking-wider font-bold">{{ $page->text('text_79') }}</span>
<h4 class="font-headline-sm text-headline-sm text-primary font-semibold mt-1 mb-1">{{ $page->text('text_80') }}</h4>
<p class="font-body-sm text-body-sm text-on-surface-variant">{{ $page->text('text_81') }}</p>
</div>
</div>
</div>

<div class="rounded-[3rem] overflow-hidden bg-surface-container-lowest shadow-sm flex flex-col group">
<div class="w-full aspect-[4/3] overflow-hidden bg-surface-container">
<img alt="Ruang amfiteater peradilan semu dan debat model PBB dengan tata kursi melingkar berkayu hangat, mikrofon podium elegan, dan tata cahaya fokus profesional." class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300" decoding="async" loading="lazy" src="{{ $page->media('image_8') }}"/>
</div>
<div class="p-space-md flex flex-col flex-1 justify-between">
<div class="">
<span class="font-label-sm text-label-sm text-secondary uppercase tracking-wider font-bold">{{ $page->text('text_82') }}</span>
<h4 class="font-headline-sm text-headline-sm text-primary font-semibold mt-1 mb-1">{{ $page->text('text_83') }}</h4>
<p class="font-body-sm text-body-sm text-on-surface-variant">{{ $page->text('text_84') }}</p>
</div>
</div>
</div>

<div class="rounded-[3rem] overflow-hidden bg-surface-container-lowest shadow-sm flex flex-col group">
<div class="w-full aspect-[4/3] overflow-hidden bg-surface-container">
<img alt="Studio musik akustik kedap suara dengan instrumen piano grand, drum elektrik, workstation produksi audio digital, dan tata pencahayaan studio modern." class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300" decoding="async" loading="lazy" src="{{ $page->media('image_9') }}"/>
</div>
<div class="p-space-md flex flex-col flex-1 justify-between">
<div class="">
<span class="font-label-sm text-label-sm text-secondary uppercase tracking-wider font-bold">{{ $page->text('text_85') }}</span>
<h4 class="font-headline-sm text-headline-sm text-primary font-semibold mt-1 mb-1">{{ $page->text('text_86') }}</h4>
<p class="font-body-sm text-body-sm text-on-surface-variant">{{ $page->text('text_87') }}</p>
</div>
</div>
</div>
</div>
</div>
</section>

<section class="py-space-xl bg-surface-container-lowest" id="prestasi">
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
<div class="flex flex-col md:flex-row md:items-end justify-between mb-space-xl gap-space-md">
<div class="">
<span class="font-label-sm text-label-sm uppercase tracking-widest text-secondary font-bold block mb-1">{{ $page->text('text_88') }}</span>
<h2 class="font-headline-xl text-headline-xl text-primary">{{ $page->text('text_89') }}</h2>
</div>
<div class="flex items-center gap-space-xs">
<span class="px-space-md py-1 rounded-full bg-surface-container font-label-md text-label-md text-primary font-bold">{{ $page->text('text_90') }}</span>
</div>
</div>

<div class="grid grid-cols-1 lg:grid-cols-12 gap-space-lg">

<div class="lg:col-span-7 flex flex-col space-y-space-md">
<h3 class="font-headline-sm text-headline-sm text-primary font-semibold">{{ $page->text('text_91') }}</h3>
<div class="space-y-space-sm">
<div class="p-space-md rounded-[2rem] bg-surface-container flex items-center justify-between gap-space-md">
<div class="flex items-center gap-space-md">
<div class="w-12 h-12 rounded-full bg-primary text-tertiary-fixed flex items-center justify-center flex-shrink-0">
<span aria-hidden="true" class="text-[24px] font-symbols font-normal not-italic leading-none normal-case whitespace-nowrap [font-feature-settings:'liga'] [word-wrap:normal]">emoji_events</span>
</div>
<div class="">
<h4 class="font-headline-sm text-headline-sm text-primary font-semibold">{{ $page->text('text_92') }}</h4>
<p class="font-body-sm text-body-sm text-on-surface-variant">{{ $page->text('text_93') }}</p>
</div>
</div>
<span class="font-label-sm text-label-sm font-bold text-primary bg-surface-container-high px-space-sm py-1 rounded-full flex-shrink-0">{{ $page->text('text_94') }}</span>
</div>
<div class="p-space-md rounded-[2rem] bg-surface-container flex items-center justify-between gap-space-md">
<div class="flex items-center gap-space-md">
<div class="w-12 h-12 rounded-full bg-primary text-tertiary-fixed flex items-center justify-center flex-shrink-0">
<span aria-hidden="true" class="text-[24px] font-symbols font-normal not-italic leading-none normal-case whitespace-nowrap [font-feature-settings:'liga'] [word-wrap:normal]">forum</span>
</div>
<div class="">
<h4 class="font-headline-sm text-headline-sm text-primary font-semibold">{{ $page->text('text_95') }}</h4>
<p class="font-body-sm text-body-sm text-on-surface-variant">{{ $page->text('text_96') }}</p>
</div>
</div>
<span class="font-label-sm text-label-sm font-bold text-primary bg-surface-container-high px-space-sm py-1 rounded-full flex-shrink-0">{{ $page->text('text_97') }}</span>
</div>
<div class="p-space-md rounded-[2rem] bg-surface-container flex items-center justify-between gap-space-md">
<div class="flex items-center gap-space-md">
<div class="w-12 h-12 rounded-full bg-primary text-tertiary-fixed flex items-center justify-center flex-shrink-0">
<span aria-hidden="true" class="text-[24px] font-symbols font-normal not-italic leading-none normal-case whitespace-nowrap [font-feature-settings:'liga'] [word-wrap:normal]">sports_basketball</span>
</div>
<div class="">
<h4 class="font-headline-sm text-headline-sm text-primary font-semibold">{{ $page->text('text_98') }}</h4>
<p class="font-body-sm text-body-sm text-on-surface-variant">{{ $page->text('text_99') }}</p>
</div>
</div>
<span class="font-label-sm text-label-sm font-bold text-primary bg-surface-container-high px-space-sm py-1 rounded-full flex-shrink-0">{{ $page->text('text_100') }}</span>
</div>
</div>
</div>

<div class="lg:col-span-5 flex flex-col space-y-space-md">
<h3 class="font-headline-sm text-headline-sm text-primary font-semibold">{{ $page->text('text_101') }}</h3>
<div class="grid grid-cols-2 gap-space-xs">
<div class="p-space-sm rounded-[1rem] bg-surface flex items-center gap-space-xs">
<span aria-hidden="true" class="text-primary text-[20px] font-symbols font-normal not-italic leading-none normal-case whitespace-nowrap [font-feature-settings:'liga'] [word-wrap:normal]">smart_toy</span>
<div class="flex flex-col">
<span class="font-label-md text-label-md text-primary font-bold">{{ $page->text('text_102') }}</span>
<span class="font-body-sm text-body-sm text-on-surface-variant">{{ $page->text('text_103') }}</span>
</div>
</div>
<div class="p-space-sm rounded-[1rem] bg-surface flex items-center gap-space-xs">
<span aria-hidden="true" class="text-primary text-[20px] font-symbols font-normal not-italic leading-none normal-case whitespace-nowrap [font-feature-settings:'liga'] [word-wrap:normal]">translate</span>
<div class="flex flex-col">
<span class="font-label-md text-label-md text-primary font-bold">{{ $page->text('text_104') }}</span>
<span class="font-body-sm text-body-sm text-on-surface-variant">{{ $page->text('text_105') }}</span>
</div>
</div>
<div class="p-space-sm rounded-[1rem] bg-surface flex items-center gap-space-xs">
<span aria-hidden="true" class="text-primary text-[20px] font-symbols font-normal not-italic leading-none normal-case whitespace-nowrap [font-feature-settings:'liga'] [word-wrap:normal]">flag</span>
<div class="flex flex-col">
<span class="font-label-md text-label-md text-primary font-bold">{{ $page->text('text_106') }}</span>
<span class="font-body-sm text-body-sm text-on-surface-variant">{{ $page->text('text_107') }}</span>
</div>
</div>
<div class="p-space-sm rounded-[1rem] bg-surface flex items-center gap-space-xs">
<span aria-hidden="true" class="text-primary text-[20px] font-symbols font-normal not-italic leading-none normal-case whitespace-nowrap [font-feature-settings:'liga'] [word-wrap:normal]">camera</span>
<div class="flex flex-col">
<span class="font-label-md text-label-md text-primary font-bold">{{ $page->text('text_108') }}</span>
<span class="font-body-sm text-body-sm text-on-surface-variant">{{ $page->text('text_109') }}</span>
</div>
</div>
<div class="p-space-sm rounded-[1rem] bg-surface flex items-center gap-space-xs">
<span aria-hidden="true" class="text-primary text-[20px] font-symbols font-normal not-italic leading-none normal-case whitespace-nowrap [font-feature-settings:'liga'] [word-wrap:normal]">music_note</span>
<div class="flex flex-col">
<span class="font-label-md text-label-md text-primary font-bold">{{ $page->text('text_110') }}</span>
<span class="font-body-sm text-body-sm text-on-surface-variant">{{ $page->text('text_111') }}</span>
</div>
</div>
<div class="p-space-sm rounded-[1rem] bg-surface flex items-center gap-space-xs">
<span aria-hidden="true" class="text-primary text-[20px] font-symbols font-normal not-italic leading-none normal-case whitespace-nowrap [font-feature-settings:'liga'] [word-wrap:normal]">sports_soccer</span>
<div class="flex flex-col">
<span class="font-label-md text-label-md text-primary font-bold">{{ $page->text('text_112') }}</span>
<span class="font-body-sm text-body-sm text-on-surface-variant">{{ $page->text('text_113') }}</span>
</div>
</div>
</div>
<div class="p-space-md rounded-[2rem] bg-surface-container-low flex items-center gap-space-sm">
<span aria-hidden="true" class="text-primary text-[28px] flex-shrink-0 font-symbols font-normal not-italic leading-none normal-case whitespace-nowrap [font-feature-settings:'liga'] [word-wrap:normal]">psychology</span>
<p class="font-body-sm text-body-sm text-on-surface-variant">{{ $page->text('text_114') }}</p>
</div>
</div>
</div>
</div>
</section>

<section class="py-space-xl bg-primary text-on-primary relative overflow-hidden" id="daftar-sma">
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
<div class="grid grid-cols-1 lg:grid-cols-12 gap-space-xl items-center">

<div class="lg:col-span-7 flex flex-col space-y-space-md">
<div class="inline-flex items-center gap-2 px-space-md py-1 rounded-full bg-primary-container text-tertiary-fixed font-label-sm text-label-sm uppercase tracking-wider w-max">
<span aria-hidden="true" class="text-[14px] font-symbols font-normal not-italic leading-none normal-case whitespace-nowrap [font-feature-settings:'liga'] [word-wrap:normal]">how_to_reg</span>
<span class="">{{ $page->text('text_115') }}</span>
</div>
<h2 class="font-headline-2xl text-headline-2xl text-on-primary font-normal leading-tight">{{ $page->text('text_116') }}</h2>
<p class="font-body-lg text-body-lg text-on-primary-container max-w-xl">{{ $page->text('text_117') }}</p>

<div class="grid grid-cols-1 sm:grid-cols-2 gap-space-sm pt-space-xs">
<div class="p-space-sm rounded-[2rem] bg-primary-container">
<span class="font-label-sm text-label-sm text-tertiary-fixed uppercase tracking-wider block font-bold">{{ $page->text('text_118') }}</span>
<span class="font-headline-sm text-headline-sm text-on-primary font-bold block mt-1">{{ $page->text('text_119') }}</span>
<span class="font-body-sm text-body-sm text-on-primary-container">{{ $page->text('text_120') }}</span>
</div>
<div class="p-space-sm rounded-[2rem] bg-primary-container">
<span class="font-label-sm text-label-sm text-tertiary-fixed uppercase tracking-wider block font-bold">{{ $page->text('text_121') }}</span>
<span class="font-headline-sm text-headline-sm text-on-primary font-bold block mt-1">{{ $page->text('text_122') }}</span>
<span class="font-body-sm text-body-sm text-on-primary-container">{{ $page->text('text_123') }}</span>
</div>
</div>

<div class="flex flex-wrap items-center gap-space-sm pt-space-md">
<a class="inline-flex items-center gap-space-xs px-space-xl py-space-sm rounded-full bg-tertiary-fixed text-on-tertiary-fixed font-label-lg text-label-lg font-bold hover:brightness-105 transition-all shadow-lg" href="/ppdb">
<span class="">{{ $page->text('text_124') }}</span>
<span aria-hidden="true" class="text-[18px] font-symbols font-normal not-italic leading-none normal-case whitespace-nowrap [font-feature-settings:'liga'] [word-wrap:normal]">arrow_forward</span>
</a>
<a class="inline-flex items-center gap-space-xs px-space-lg py-space-sm rounded-full bg-primary-container text-on-primary font-label-lg text-label-lg hover:bg-surface-container-low hover:text-primary transition-colors" href="/kontak">
<span aria-hidden="true" class="text-[18px] font-symbols font-normal not-italic leading-none normal-case whitespace-nowrap [font-feature-settings:'liga'] [word-wrap:normal]">support_agent</span>
<span class="">{{ $page->text('text_125') }}</span>
</a>
</div>
</div>

<div class="lg:col-span-5 flex flex-col space-y-space-sm">
<span class="font-label-sm text-label-sm uppercase tracking-wider text-on-primary-container block font-bold">{{ $page->text('text_126') }}</span>
<div class="p-space-md rounded-[3rem] bg-primary-container text-on-primary flex flex-col space-y-space-xs">
<div class="flex items-center gap-space-xs text-tertiary-fixed">
<span aria-hidden="true" class="text-[20px] font-symbols font-normal not-italic leading-none normal-case whitespace-nowrap [font-feature-settings:'liga'] [word-wrap:normal]">location_on</span>
<span class="font-label-md text-label-md font-bold uppercase">{{ $page->text('text_127') }}</span>
</div>
<p class="font-body-sm text-body-sm text-on-primary-container">{{ $page->text('text_128') }}</p>
<div class="pt-space-xs flex items-center justify-between text-body-sm border-t border-primary/40">
<span class="text-on-primary-container">{{ $page->text('text_129') }}</span>
<span class="font-bold text-on-primary">{{ $page->text('text_130') }}</span>
</div>
</div>
<div class="p-space-md rounded-[3rem] bg-primary-container text-on-primary flex flex-col space-y-space-xs">
<div class="flex items-center gap-space-xs text-tertiary-fixed">
<span aria-hidden="true" class="text-[20px] font-symbols font-normal not-italic leading-none normal-case whitespace-nowrap [font-feature-settings:'liga'] [word-wrap:normal]">schedule</span>
<span class="font-label-md text-label-md font-bold uppercase">{{ $page->text('text_131') }}</span>
</div>
<p class="font-body-sm text-body-sm text-on-primary-container">{{ $page->text('text_132') }}<br class=""/>{{ $page->text('text_133') }}</p>
</div>

<div class="pt-space-xs flex items-center justify-between text-body-sm text-on-primary-container">
<span class="">{{ $page->text('text_134') }}</span>
<div class="flex items-center gap-space-sm">
<a class="underline hover:text-tertiary-fixed transition-colors" href="/sekolah/sd">{{ $page->text('text_135') }}</a>
<span class="">{{ $page->text('text_136') }}</span>
<a class="underline hover:text-tertiary-fixed transition-colors" href="/sekolah/smp">{{ $page->text('text_137') }}</a>
</div>
</div>
</div>
</div>
</div>
</section>
</div>
</main>
@endsection
