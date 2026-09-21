@extends('layouts.public')
@section('content')
<main class="pt-20 min-h-screen" id="main-content">
<div class="flex flex-col w-full">

<div class="fixed top-20 left-0 right-0 z-40 h-1 bg-surface-container/60 overflow-hidden">
<div class="h-full bg-primary transition-all duration-100 ease-out" id="scroll-indicator"></div>
</div>

<section class="w-full bg-surface-container-lowest border-b border-surface-container/60">
<div class="max-w-7xl mx-auto px-gutter pt-space-xl pb-space-lg">

<nav aria-label="Breadcrumb" class="mb-space-lg">
<ol class="flex flex-wrap items-center gap-2 font-label-md text-label-md text-on-surface-variant">
<li class="">
<a class="hover:text-primary transition-colors flex items-center gap-1.5" href="/">
<span aria-hidden="true" class="text-[16px] font-symbols font-normal not-italic leading-none normal-case whitespace-nowrap [font-feature-settings:'liga'] [word-wrap:normal]">home</span>
<span class="">{{ $page->text('text_1') }}</span>
</a>
</li>
<li class="text-outline-variant font-light">{{ $page->text('text_2') }}</li>
<li class="">
<a class="hover:text-primary transition-colors" href="/berita">{{ $page->text('text_3') }}</a>
</li>
<li class="text-outline-variant font-light">{{ $page->text('text_4') }}</li>
<li class="">
<a class="hover:text-primary transition-colors text-secondary" href="#berita-kategori">{{ $page->text('text_5') }}</a>
</li>
<li class="text-outline-variant font-light">{{ $page->text('text_6') }}</li>
<li aria-current="page" class="text-primary font-semibold truncate max-w-xs md:max-w-md">{{ $page->text('text_7') }}</li>
</ol>
</nav>

<div class="flex flex-wrap items-center gap-2.5 mb-space-md">
<span class="inline-flex items-center gap-1.5 px-3.5 py-1 rounded-full bg-primary text-tertiary-fixed font-label-sm text-label-sm font-bold uppercase tracking-wider shadow-xs">
<span class="w-2 h-2 rounded-full bg-tertiary-fixed animate-pulse"></span>{{ $page->text('text_8') }}</span>
<span class="inline-flex items-center px-3.5 py-1 rounded-full bg-surface-container-low text-secondary font-label-sm text-label-sm uppercase tracking-wider font-bold border border-surface-container bg-forest-ink text-white border-forest-ink">{{ $page->text('text_9') }}</span>
<span class="inline-flex items-center gap-1 px-3.5 py-1 rounded-full bg-surface-container-high text-primary font-label-sm text-label-sm font-bold bg-peach text-peach-ink border border-peach-border">
<span aria-hidden="true" class="text-[15px] font-symbols font-normal not-italic leading-none normal-case whitespace-nowrap [font-feature-settings:'liga'] [word-wrap:normal]">psychology</span>{{ $page->text('text_10') }}</span>
</div>

<h1 class="font-headline-2xl text-headline-2xl-mobile md:text-headline-2xl text-primary tracking-tight mb-space-lg max-w-5xl leading-[1.12] font-medium">{{ $page->text('text_11') }}</h1>

<div class="border-l-4 border-primary pl-space-md py-1 mb-space-xl max-w-4xl">
<p class="font-headline-md text-headline-md text-secondary italic font-normal leading-relaxed">{{ $page->text('text_12') }}</p>
</div>

<div class="bg-surface-container-low/70 border border-surface-container rounded-2xl p-4 md:p-5 flex flex-col lg:flex-row lg:items-center justify-between gap-space-md shadow-xs">

<div class="flex items-center gap-4">
<div class="w-14 h-14 rounded-full overflow-hidden flex-shrink-0 ring-2 ring-primary/20 shadow-sm">
<img alt="Potret wajah formal Dr. H. Faisal Rahman, pria paruh baya Indonesia berwibawa memakai kacamata elegan, tersenyum ramah dalam balutan jas bernuansa forest green di perpustakaan berkayu hangat dengan cahaya lembut editorial." class="w-full h-full object-cover" decoding="async" fetchpriority="high" loading="eager" src="{{ $page->media('image_1') }}"/>
</div>
<div class="">
<div class="flex flex-wrap items-center gap-x-2">
<span class="font-label-lg text-label-lg font-bold text-primary">{{ $page->text('text_13') }}</span>
<span class="text-secondary font-body-sm text-body-sm hidden sm:inline font-medium">{{ $page->text('text_14') }}</span>
</div>
<p class="font-body-sm text-body-sm text-on-surface-variant">{{ $page->text('text_15') }}</p>
<div class="flex flex-wrap items-center gap-x-3 gap-y-1 mt-1 text-on-surface-variant font-label-sm text-label-sm">
<span class="flex items-center gap-1 text-primary font-semibold">
<span aria-hidden="true" class="text-[15px] font-symbols font-normal not-italic leading-none normal-case whitespace-nowrap [font-feature-settings:'liga'] [word-wrap:normal]">calendar_today</span>{{ $page->text('text_16') }}</span>
<span class="text-outline-variant">{{ $page->text('text_17') }}</span>
<span class="flex items-center gap-1">
<span aria-hidden="true" class="text-[16px] text-secondary font-symbols font-normal not-italic leading-none normal-case whitespace-nowrap [font-feature-settings:'liga'] [word-wrap:normal]">schedule</span>{{ $page->text('text_18') }}</span>
<span class="text-outline-variant">{{ $page->text('text_19') }}</span>
<span class="flex items-center gap-1 text-primary font-bold">
<span aria-hidden="true" class="text-[16px] text-primary font-symbols font-normal not-italic leading-none normal-case whitespace-nowrap [font-feature-settings:'liga'] [word-wrap:normal]">verified</span>{{ $page->text('text_20') }}</span>
</div>
</div>
</div>

<div class="flex items-center gap-2 self-start lg:self-center border-t lg:border-t-0 pt-3 lg:pt-0 border-surface-container">

<div class="flex items-center bg-surface-container-lowest rounded-full p-1 border border-surface-container shadow-xs">
<a aria-label="Kecilkan Teks" class="w-8 h-8 rounded-full flex items-center justify-center text-on-surface-variant hover:text-primary hover:bg-surface-container transition-colors font-label-md text-label-md font-bold" href="/kontak" id="btn-font-decrease" title="Perkecil Ukuran Teks">{{ $page->text('text_21') }}</a>
<span class="w-px h-4 bg-outline-variant/40 mx-0.5"></span>
<a aria-label="Besarkan Teks" class="w-8 h-8 rounded-full flex items-center justify-center text-on-surface-variant hover:text-primary hover:bg-surface-container transition-colors font-label-md text-label-md font-extrabold" href="/kontak" id="btn-font-increase" title="Perbesar Ukuran Teks">{{ $page->text('text_22') }}</a>
</div>

<a aria-label="Simpan Artikel" class="w-10 h-10 rounded-full bg-surface-container-lowest border border-surface-container text-primary hover:bg-primary hover:text-on-primary flex items-center justify-center transition-colors shadow-xs" href="/kontak" id="btn-bookmark" title="Simpan Artikel">
<span aria-hidden="true" class="text-[20px] font-symbols font-normal not-italic leading-none normal-case whitespace-nowrap [font-feature-settings:'liga'] [word-wrap:normal]" id="bookmark-icon">bookmark</span>
</a>

<a aria-label="Bagikan ke WhatsApp" class="w-10 h-10 rounded-full bg-surface-container-lowest border border-surface-container text-primary hover:bg-primary-container hover:text-tertiary-fixed flex items-center justify-center transition-colors shadow-xs" href="https://api.whatsapp.com/send?text=Menumbuhkan%20Sikap%20Inquiry%20dan%20Adab%20-%20Harapan%20Mulia" rel="noopener noreferrer" target="_blank" title="Bagikan ke WhatsApp">
<span aria-hidden="true" class="text-[20px] font-symbols font-normal not-italic leading-none normal-case whitespace-nowrap [font-feature-settings:'liga'] [word-wrap:normal]">share</span>
</a>

<a aria-label="Salin Tautan Artikel" class="w-10 h-10 rounded-full bg-surface-container-lowest border border-surface-container text-primary hover:bg-primary hover:text-on-primary flex items-center justify-center transition-colors shadow-xs" href="/kontak" id="btn-copy-link" title="Salin Tautan">
<span aria-hidden="true" class="text-[20px] font-symbols font-normal not-italic leading-none normal-case whitespace-nowrap [font-feature-settings:'liga'] [word-wrap:normal]">link</span>
</a>
</div>
</div>
</div>
</section>

<section class="w-full bg-surface-container-lowest">
<div class="max-w-7xl mx-auto px-gutter pt-space-md pb-space-lg">
<div class="relative w-full rounded-2xl overflow-hidden bg-primary-container shadow-md border border-surface-container">
<div class="aspect-[16/9] md:aspect-[21/9] w-full relative">
<img alt="Sekelompok siswa dan siswi SMA Harapan Mulia yang beragam sedang melakukan riset sains interdisipliner di laboratorium modern berarsitektur biophilic. Mereka mengamati tabung reaksi kimia hijau terbarukan, berdiskusi memegang tablet pintar dengan visual grafik data, didampingi seorang guru perempuan bersahaja yang membimbing mereka dengan penuh kehangatan dan kebanggaan." class="w-full h-full object-cover" decoding="async" loading="lazy" src="{{ $page->media('image_2') }}"/>
<div class="absolute inset-0 bg-gradient-to-t from-primary/75 via-primary/20 to-transparent"></div>
<div class="absolute bottom-4 left-4 sm:bottom-6 sm:left-6 flex items-center gap-2.5 bg-surface-container-lowest/95 backdrop-blur-md px-4 py-2 rounded-full shadow-md border border-surface-container">
<span aria-hidden="true" class="text-primary text-[20px] font-symbols font-normal not-italic leading-none normal-case whitespace-nowrap [font-feature-settings:'liga'] [word-wrap:normal]">biotech</span>
<span class="font-label-sm text-label-sm text-primary font-bold tracking-wide">{{ $page->text('text_23') }}</span>
</div>
</div>
</div>

<div class="mt-3 px-1 flex flex-col sm:flex-row sm:items-center justify-between gap-1 text-on-surface-variant font-body-sm text-body-sm">
<p class="italic text-on-surface-variant">{{ $page->text('text_24') }}</p>
<span class="text-secondary font-label-sm text-label-sm font-semibold flex-shrink-0">{{ $page->text('text_25') }}</span>
</div>
</div>
</section>

<section class="w-full bg-surface-container-lowest">
<div class="max-w-7xl mx-auto px-gutter pb-space-xl">
<div class="grid grid-cols-1 lg:grid-cols-12 gap-gutter items-start">

<article class="lg:col-span-8 space-y-space-lg text-on-surface" id="article-content-container">

<div class="space-y-space-md text-article-body border-b border-surface-container pb-space-md">
<p class="text-dropcap font-body-xl text-body-xl leading-relaxed text-on-surface text-justify">{{ $page->text('text_26') }}</p>
<p class="font-body-lg text-body-lg text-on-surface-variant leading-relaxed">{{ $page->text('text_27') }}</p>
</div>

<div class="scroll-mt-28 space-y-space-md pt-2" id="section-1">
<div class="flex items-center gap-2 text-secondary font-label-md text-label-md uppercase tracking-wider font-bold">
<span class="w-7 h-0.5 bg-primary"></span>
<span class="">{{ $page->text('text_28') }}</span>
</div>
<h2 class="font-headline-lg text-headline-lg text-primary leading-snug font-medium">{{ $page->text('text_29') }}</h2>
<p class="font-body-lg text-body-lg text-on-surface-variant leading-relaxed">{{ $page->text('text_30') }}</p>
<p class="font-body-lg text-body-lg text-on-surface-variant leading-relaxed">{{ $page->text('text_31') }}</p>
</div>

<div class="my-space-xl p-space-lg md:p-space-xl bg-surface-container/70 border border-surface-container-high rounded-2xl relative overflow-hidden shadow-sm border-l-4 border-forest-ink bg-white">
<div class="absolute -right-8 -bottom-8 w-36 h-36 rounded-full bg-surface-container-high/60 pointer-events-none"></div>
<span aria-hidden="true" class="text-primary text-[52px] opacity-20 mb-1 block select-none font-symbols font-normal not-italic leading-none normal-case whitespace-nowrap [font-feature-settings:'liga'] [word-wrap:normal]">format_quote</span>
<blockquote class="font-headline-lg text-headline-lg text-primary italic leading-snug mb-space-md font-normal">{{ $page->text('text_32') }}</blockquote>
<figcaption class="flex items-center gap-3 pt-2 border-t border-surface-container-high">
<div class="w-10 h-10 rounded-full bg-primary text-tertiary-fixed flex items-center justify-center font-bold text-label-md shadow-xs">{{ $page->text('text_33') }}</div>
<div class="flex flex-col">
<span class="font-label-md text-label-md font-bold text-primary">{{ $page->text('text_34') }}</span>
<span class="font-label-sm text-label-sm text-secondary font-medium">{{ $page->text('text_35') }}</span>
</div>
</figcaption>
</div>

<div class="scroll-mt-28 space-y-space-md pt-2" id="section-2">
<div class="flex items-center gap-2 text-secondary font-label-md text-label-md uppercase tracking-wider font-bold">
<span class="w-7 h-0.5 bg-primary"></span>
<span class="">{{ $page->text('text_36') }}</span>
</div>
<h2 class="font-headline-lg text-headline-lg text-primary leading-snug font-medium">{{ $page->text('text_37') }}</h2>
<p class="font-body-lg text-body-lg text-on-surface-variant leading-relaxed">{{ $page->text('text_38') }}<em class="text-primary font-medium">{{ $page->text('text_39') }}</em>
</p>
<p class="font-body-lg text-body-lg text-on-surface-variant leading-relaxed">{{ $page->text('text_40') }}</p>

<div class="my-space-md rounded-2xl overflow-hidden bg-surface-container border border-surface-container shadow-sm">
<div class="aspect-[16/10] w-full">
<img alt="Dua orang siswa SMP Harapan Mulia berseragam rapi sedang menguji air keran di wadah kaca dengan mikroskop dan sensor digital ramah lingkungan, dipandu dengan cermat di sudut ruang laboratorium sekolah bernuansa hangat dan hijau terang." class="w-full h-full object-cover" decoding="async" loading="lazy" src="{{ $page->media('image_3') }}"/>
</div>
<div class="p-3.5 bg-surface-container text-on-surface-variant font-body-sm text-body-sm flex justify-between items-center border-t border-surface-container-high">
<span class="flex items-center gap-1.5 font-medium">
<span aria-hidden="true" class="text-[16px] text-primary font-symbols font-normal not-italic leading-none normal-case whitespace-nowrap [font-feature-settings:'liga'] [word-wrap:normal]">science</span>{{ $page->text('text_41') }}</span>
<span class="text-secondary font-label-sm text-label-sm font-bold">{{ $page->text('text_42') }}</span>
</div>
</div>
<p class="font-body-lg text-body-lg text-on-surface-variant leading-relaxed">{{ $page->text('text_43') }}</p>
</div>

<div class="scroll-mt-28 my-space-xl p-space-lg md:p-space-xl from-surface-container-low via-surface-container-low/80 to-surface-container rounded-2xl border border-surface-container-high shadow-sm" id="section-3">
<div class="flex items-center gap-2 mb-space-xs">
<span aria-hidden="true" class="text-primary text-[28px] font-symbols font-normal not-italic leading-none normal-case whitespace-nowrap [font-feature-settings:'liga'] [word-wrap:normal]">account_tree</span>
<span class="font-label-sm text-label-sm uppercase font-bold text-secondary tracking-wider">{{ $page->text('text_44') }}</span>
</div>
<h3 class="font-headline-md text-headline-md text-primary mb-2 font-medium">{{ $page->text('text_45') }}</h3>
<p class="font-body-md text-body-md text-on-surface-variant mb-space-lg leading-relaxed">{{ $page->text('text_46') }}</p>
<div class="grid grid-cols-1 md:grid-cols-3 gap-space-md">

<div class="bg-surface-container-lowest p-5 rounded-[3rem] shadow-xs border border-surface-container flex flex-col justify-between hover:border-primary/30 transition-colors">
<div class="">
<div class="w-10 h-10 rounded-[3rem] bg-primary-container text-tertiary-fixed flex items-center justify-center font-bold text-label-lg mb-3 shadow-xs">{{ $page->text('text_47') }}</div>
<h4 class="font-headline-sm text-headline-sm text-primary mb-2 font-semibold">{{ $page->text('text_48') }}</h4>
<p class="font-body-sm text-body-sm text-on-surface-variant leading-relaxed">{{ $page->text('text_49') }}</p>
</div>
<div class="mt-4 pt-3 border-t border-surface-container text-secondary font-label-sm text-label-sm font-bold flex items-center gap-1.5">
<span aria-hidden="true" class="text-[16px] text-primary font-symbols font-normal not-italic leading-none normal-case whitespace-nowrap [font-feature-settings:'liga'] [word-wrap:normal]">psychology</span>
<span class="">{{ $page->text('text_50') }}</span>
</div>
</div>

<div class="bg-surface-container-lowest p-5 rounded-[3rem] shadow-xs border border-surface-container flex flex-col justify-between hover:border-secondary transition-colors">
<div class="">
<div class="w-10 h-10 rounded-[3rem] bg-secondary text-on-secondary flex items-center justify-center font-bold text-label-lg mb-3 shadow-xs">{{ $page->text('text_51') }}</div>
<h4 class="font-headline-sm text-headline-sm text-primary mb-2 font-semibold">{{ $page->text('text_52') }}</h4>
<p class="font-body-sm text-body-sm text-on-surface-variant leading-relaxed">{{ $page->text('text_53') }}</p>
</div>
<div class="mt-4 pt-3 border-t border-surface-container text-secondary font-label-sm text-label-sm font-bold flex items-center gap-1.5">
<span aria-hidden="true" class="text-[16px] text-secondary font-symbols font-normal not-italic leading-none normal-case whitespace-nowrap [font-feature-settings:'liga'] [word-wrap:normal]">volunteer_activism</span>
<span class="">{{ $page->text('text_54') }}</span>
</div>
</div>

<div class="bg-surface-container-lowest p-5 rounded-[3rem] shadow-xs border border-surface-container flex flex-col justify-between hover:border-tertiary transition-colors">
<div class="">
<div class="w-10 h-10 rounded-[3rem] bg-tertiary-container text-tertiary-fixed flex items-center justify-center font-bold text-label-lg mb-3 shadow-xs">{{ $page->text('text_55') }}</div>
<h4 class="font-headline-sm text-headline-sm text-primary mb-2 font-semibold">{{ $page->text('text_56') }}</h4>
<p class="font-body-sm text-body-sm text-on-surface-variant leading-relaxed">{{ $page->text('text_57') }}</p>
</div>
<div class="mt-4 pt-3 border-t border-surface-container text-secondary font-label-sm text-label-sm font-bold flex items-center gap-1.5">
<span aria-hidden="true" class="text-[16px] text-tertiary-container font-symbols font-normal not-italic leading-none normal-case whitespace-nowrap [font-feature-settings:'liga'] [word-wrap:normal]">forum</span>
<span class="">{{ $page->text('text_58') }}</span>
</div>
</div>
</div>
</div>

<div class="scroll-mt-28 space-y-space-md pt-2" id="section-4">
<div class="flex items-center gap-2 text-secondary font-label-md text-label-md uppercase tracking-wider font-bold">
<span class="w-7 h-0.5 bg-primary"></span>
<span class="">{{ $page->text('text_59') }}</span>
</div>
<h2 class="font-headline-lg text-headline-lg text-primary leading-snug font-medium">{{ $page->text('text_60') }}</h2>
<p class="font-body-lg text-body-lg text-on-surface-variant leading-relaxed">{{ $page->text('text_61') }}</p>
<p class="font-body-lg text-body-lg text-on-surface-variant leading-relaxed">{{ $page->text('text_62') }}<em class="text-primary font-medium">{{ $page->text('text_63') }}</em>{{ $page->text('text_64') }}</p>
<p class="font-body-lg text-body-lg text-on-surface-variant leading-relaxed">{{ $page->text('text_65') }}</p>
</div>

<div class="p-space-lg bg-surface-container/80 border-l-4 border-primary rounded-r-2xl space-y-2 mt-space-lg shadow-xs">
<h4 class="font-headline-sm text-headline-sm text-primary flex items-center gap-2 font-semibold">
<span aria-hidden="true" class="text-primary font-symbols font-normal not-italic leading-none normal-case whitespace-nowrap [font-feature-settings:'liga'] [word-wrap:normal]">eco</span>{{ $page->text('text_66') }}</h4>
<p class="font-body-md text-body-md text-on-surface leading-relaxed">{{ $page->text('text_67') }}</p>
</div>

<div class="pt-4 flex flex-wrap items-center gap-2 border-t border-surface-container">
<span class="text-on-surface-variant font-label-md text-label-md mr-1 font-semibold">{{ $page->text('text_68') }}</span>
<a class="px-3 py-1 rounded-full bg-surface-container-low text-primary font-label-sm text-label-sm font-semibold hover:bg-primary hover:text-on-primary transition-colors border border-surface-container bg-forest-ink text-white border-forest-ink" href="#tag">{{ $page->text('text_69') }}</a>
<a class="px-3 py-1 rounded-full bg-surface-container-low text-primary font-label-sm text-label-sm font-semibold hover:bg-primary hover:text-on-primary transition-colors border border-surface-container bg-forest-ink text-white border-forest-ink" href="#tag">{{ $page->text('text_70') }}</a>
<a class="px-3 py-1 rounded-full bg-surface-container-low text-primary font-label-sm text-label-sm font-semibold hover:bg-primary hover:text-on-primary transition-colors border border-surface-container bg-forest-ink text-white border-forest-ink" href="#tag">{{ $page->text('text_71') }}</a>
<a class="px-3 py-1 rounded-full bg-surface-container-low text-primary font-label-sm text-label-sm font-semibold hover:bg-primary hover:text-on-primary transition-colors border border-surface-container bg-forest-ink text-white border-forest-ink" href="#tag">{{ $page->text('text_72') }}</a>
<a class="px-3 py-1 rounded-full bg-surface-container-low text-primary font-label-sm text-label-sm font-semibold hover:bg-primary hover:text-on-primary transition-colors border border-surface-container bg-forest-ink text-white border-forest-ink" href="#tag">{{ $page->text('text_73') }}</a>
<a class="px-3 py-1 rounded-full bg-surface-container-low text-primary font-label-sm text-label-sm font-semibold hover:bg-primary hover:text-on-primary transition-colors border border-surface-container bg-forest-ink text-white border-forest-ink" href="#tag">{{ $page->text('text_74') }}</a>
</div>

<div class="py-4 bg-surface-container-low/70 border border-surface-container rounded-2xl px-5 flex flex-col sm:flex-row items-center justify-between gap-space-md shadow-xs">
<div class="flex items-center gap-3">
<a class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-surface-container-lowest text-primary hover:bg-primary hover:text-on-primary font-label-md text-label-md font-bold transition-all shadow-xs border border-surface-container" href="/kontak" id="btn-like">
<span aria-hidden="true" class="text-[18px] font-symbols font-normal not-italic leading-none normal-case whitespace-nowrap [font-feature-settings:'liga'] [word-wrap:normal]" id="like-icon">thumb_up</span>
<span class="">{{ $page->text('text_75') }}</span>
<span class="ml-1 px-2 py-0.5 rounded-full bg-surface-container text-primary text-label-sm font-bold" id="like-counter">{{ $page->text('text_76') }}</span>
</a>
</div>
<div class="flex items-center gap-2 font-label-sm text-label-sm text-on-surface-variant font-medium">
<span class="">{{ $page->text('text_77') }}</span>
<a class="w-8 h-8 rounded-full bg-surface-container-lowest border border-surface-container flex items-center justify-center text-primary hover:bg-primary hover:text-on-primary transition-colors shadow-xs" href="https://api.whatsapp.com/send?text=Menumbuhkan%20Sikap%20Inquiry%20dan%20Adab%20-%20Harapan%20Mulia" target="_blank" title="WhatsApp">
<span aria-hidden="true" class="text-[16px] font-symbols font-normal not-italic leading-none normal-case whitespace-nowrap [font-feature-settings:'liga'] [word-wrap:normal]">chat</span>
</a>
<a class="w-8 h-8 rounded-full bg-surface-container-lowest border border-surface-container flex items-center justify-center text-primary hover:bg-primary hover:text-on-primary transition-colors shadow-xs" href="/kontak" title="LinkedIn">
<span aria-hidden="true" class="text-[16px] font-symbols font-normal not-italic leading-none normal-case whitespace-nowrap [font-feature-settings:'liga'] [word-wrap:normal]">work</span>
</a>
<a class="w-8 h-8 rounded-full bg-surface-container-lowest border border-surface-container flex items-center justify-center text-primary hover:bg-primary hover:text-on-primary transition-colors shadow-xs" href="javascript:window.print()" title="Cetak Artikel">
<span aria-hidden="true" class="text-[16px] font-symbols font-normal not-italic leading-none normal-case whitespace-nowrap [font-feature-settings:'liga'] [word-wrap:normal]">print</span>
</a>
</div>
</div>

<div class="p-space-lg md:p-space-xl bg-surface-container/60 border border-surface-container rounded-2xl flex flex-col sm:flex-row gap-space-md items-start shadow-xs border-l-4 border-forest-ink bg-white">
<div class="w-20 h-20 rounded-full overflow-hidden flex-shrink-0 ring-2 ring-primary/20 shadow-sm">
<img alt="Dr. H. Faisal Rahman, M.Ed., potret resmi berwibawa dengan tatapan ramah di ruang dewan yayasan sekolah Harapan Mulia, berlatar buku-buku referensi akademik klasik dan tanaman tropis di dalam ruangan." class="w-full h-full object-cover rounded-full" decoding="async" loading="lazy" src="{{ $page->media('image_4') }}"/>
</div>
<div class="space-y-2 flex-1">
<div class="flex flex-wrap items-center justify-between gap-2">
<div class="">
<span class="font-label-sm text-label-sm uppercase font-bold text-secondary tracking-wider block">{{ $page->text('text_78') }}</span>
<h3 class="font-headline-sm text-headline-sm text-primary font-bold">{{ $page->text('text_79') }}</h3>
</div>
<a class="inline-flex items-center gap-1 font-label-sm text-label-sm font-bold text-primary hover:text-secondary transition-colors" href="#arsip-faisal">
<span class="">{{ $page->text('text_80') }}</span>
<span aria-hidden="true" class="text-[16px] font-symbols font-normal not-italic leading-none normal-case whitespace-nowrap [font-feature-settings:'liga'] [word-wrap:normal]">arrow_forward</span>
</a>
</div>
<p class="font-body-md text-body-md text-on-surface-variant leading-relaxed">{{ $page->text('text_81') }}</p>
<div class="pt-2 flex flex-wrap items-center gap-4 text-on-surface-variant font-label-sm text-label-sm font-medium">
<span class="flex items-center gap-1.5 text-primary">
<span aria-hidden="true" class="text-[16px] font-symbols font-normal not-italic leading-none normal-case whitespace-nowrap [font-feature-settings:'liga'] [word-wrap:normal]">mail</span>{{ $page->text('text_82') }}</span>
<span class="flex items-center gap-1.5 text-secondary">
<span aria-hidden="true" class="text-[16px] font-symbols font-normal not-italic leading-none normal-case whitespace-nowrap [font-feature-settings:'liga'] [word-wrap:normal]">menu_book</span>{{ $page->text('text_83') }}</span>
</div>
</div>
</div>

<div class="pt-space-md space-y-space-md">
<div class="flex items-center justify-between border-b border-surface-container pb-3">
<div class="">
<h3 class="font-headline-md text-headline-md text-primary font-medium">{{ $page->text('text_84') }}</h3>
<p class="font-body-sm text-body-sm text-on-surface-variant">{{ $page->text('text_85') }}</p>
</div>
<span class="px-3 py-1 rounded-full bg-surface-container font-label-sm text-label-sm text-primary font-bold border border-surface-container-high">{{ $page->text('text_86') }}</span>
</div>

<div class="space-y-space-sm">

<div class="p-4 bg-surface-container-low/60 rounded-[3rem] border border-surface-container space-y-2">
<div class="flex items-center justify-between">
<div class="flex items-center gap-2.5">
<div class="w-8 h-8 rounded-full bg-primary-container text-tertiary-fixed flex items-center justify-center font-bold text-label-sm shadow-xs">{{ $page->text('text_87') }}</div>
<div class="">
<span class="font-label-md text-label-md font-bold text-primary">{{ $page->text('text_88') }}</span>
<span class="text-secondary font-body-sm text-body-sm block sm:inline sm:ml-2 font-medium">{{ $page->text('text_89') }}</span>
</div>
</div>
<span class="font-label-sm text-label-sm text-on-surface-variant">{{ $page->text('text_90') }}</span>
</div>
<p class="font-body-md text-body-md text-on-surface-variant leading-relaxed pl-10">{{ $page->text('text_91') }}</p>
</div>

<div class="p-4 bg-surface-container-low/60 rounded-[3rem] border border-surface-container space-y-2">
<div class="flex items-center justify-between">
<div class="flex items-center gap-2.5">
<div class="w-8 h-8 rounded-full bg-secondary text-on-secondary flex items-center justify-center font-bold text-label-sm shadow-xs">{{ $page->text('text_92') }}</div>
<div class="">
<span class="font-label-md text-label-md font-bold text-primary">{{ $page->text('text_93') }}</span>
<span class="text-secondary font-body-sm text-body-sm block sm:inline sm:ml-2 font-medium">{{ $page->text('text_94') }}</span>
</div>
</div>
<span class="font-label-sm text-label-sm text-on-surface-variant">{{ $page->text('text_95') }}</span>
</div>
<p class="font-body-md text-body-md text-on-surface-variant leading-relaxed pl-10">{{ $page->text('text_96') }}</p>
</div>

<div class="p-4 bg-surface-container-low/60 rounded-[3rem] border border-surface-container space-y-2">
<div class="flex items-center justify-between">
<div class="flex items-center gap-2.5">
<div class="w-8 h-8 rounded-full bg-tertiary text-on-tertiary flex items-center justify-center font-bold text-label-sm shadow-xs">{{ $page->text('text_97') }}</div>
<div class="">
<span class="font-label-md text-label-md font-bold text-primary">{{ $page->text('text_98') }}</span>
<span class="text-secondary font-body-sm text-body-sm block sm:inline sm:ml-2 font-medium">{{ $page->text('text_99') }}</span>
</div>
</div>
<span class="font-label-sm text-label-sm text-on-surface-variant">{{ $page->text('text_100') }}</span>
</div>
<p class="font-body-md text-body-md text-on-surface-variant leading-relaxed pl-10">{{ $page->text('text_101') }}</p>
</div>
</div>

<div class="p-space-lg bg-surface-container/70 border border-surface-container rounded-2xl space-y-3">
<h4 class="font-label-lg text-label-lg font-bold text-primary flex items-center gap-2">
<span aria-hidden="true" class="text-[20px] text-primary font-symbols font-normal not-italic leading-none normal-case whitespace-nowrap [font-feature-settings:'liga'] [word-wrap:normal]">rate_review</span>{{ $page->text('text_102') }}</h4>
<p class="font-body-sm text-body-sm text-on-surface-variant">{{ $page->text('text_103') }}</p>
<x-inquiry-form />
</div>
</div>
</article>

<aside class="lg:col-span-4 space-y-space-lg lg:sticky lg:top-28">

<div class="p-5 bg-surface-container-low/70 border border-surface-container rounded-2xl space-y-3 shadow-xs">
<div class="flex items-center justify-between pb-2 border-b border-surface-container">
<span class="font-label-sm text-label-sm uppercase font-bold text-secondary tracking-wider flex items-center gap-1.5">
<span aria-hidden="true" class="text-[18px] text-primary font-symbols font-normal not-italic leading-none normal-case whitespace-nowrap [font-feature-settings:'liga'] [word-wrap:normal]">toc</span>{{ $page->text('text_104') }}</span>
<span class="text-on-surface-variant font-label-sm text-label-sm font-semibold">{{ $page->text('text_105') }}</span>
</div>
<nav class="space-y-1.5 font-body-md text-body-md">
<a class="toc-link flex items-start gap-2.5 p-2 rounded-[3rem] text-on-surface-variant hover:text-primary hover:bg-surface-container transition-colors" href="#section-1">
<span class="font-label-sm text-label-sm font-bold text-primary mt-0.5 w-5">{{ $page->text('text_106') }}</span>
<span class="leading-snug font-medium">{{ $page->text('text_107') }}</span>
</a>
<a class="toc-link flex items-start gap-2.5 p-2 rounded-[3rem] text-on-surface-variant hover:text-primary hover:bg-surface-container transition-colors" href="#section-2">
<span class="font-label-sm text-label-sm font-bold text-primary mt-0.5 w-5">{{ $page->text('text_108') }}</span>
<span class="leading-snug font-medium">{{ $page->text('text_109') }}</span>
</a>
<a class="toc-link flex items-start gap-2.5 p-2 rounded-[3rem] text-on-surface-variant hover:text-primary hover:bg-surface-container transition-colors" href="#section-3">
<span class="font-label-sm text-label-sm font-bold text-primary mt-0.5 w-5">{{ $page->text('text_110') }}</span>
<span class="leading-snug font-medium">{{ $page->text('text_111') }}</span>
</a>
<a class="toc-link flex items-start gap-2.5 p-2 rounded-[3rem] text-on-surface-variant hover:text-primary hover:bg-surface-container transition-colors" href="#section-4">
<span class="font-label-sm text-label-sm font-bold text-primary mt-0.5 w-5">{{ $page->text('text_112') }}</span>
<span class="leading-snug font-medium">{{ $page->text('text_113') }}</span>
</a>
</nav>
</div>

<div class="p-5 bg-surface-container/60 border border-surface-container rounded-2xl space-y-2.5 shadow-xs">
<div class="flex items-center gap-3">
<div class="w-12 h-12 rounded-full overflow-hidden flex-shrink-0 ring-1 ring-primary/20">
<img alt="Avatar bulat kecil Dr. H. Faisal Rahman, M.Ed., tersenyum ramah dan bersahaja dengan latar perpustakaan." class="w-full h-full object-cover" decoding="async" loading="lazy" src="{{ $page->media('image_5') }}"/>
</div>
<div class="">
<span class="font-label-sm text-label-sm uppercase text-secondary font-bold tracking-wider">{{ $page->text('text_114') }}</span>
<h4 class="font-label-lg text-label-lg font-bold text-primary leading-tight">{{ $page->text('text_115') }}</h4>
<p class="font-body-sm text-body-sm text-on-surface-variant">{{ $page->text('text_116') }}</p>
</div>
</div>
<p class="font-headline-sm text-[16px] italic text-primary pt-1 leading-snug font-normal">{{ $page->text('text_117') }}</p>
</div>

<div class="p-5 bg-primary-container text-on-primary rounded-2xl relative overflow-hidden shadow-md">
<div class="absolute -right-8 -top-8 w-28 h-28 rounded-full bg-tertiary-fixed/15 pointer-events-none"></div>
<div class="relative z-10 space-y-2.5">
<div class="inline-flex items-center gap-1.5 px-2.5 py-0.5 rounded-full bg-tertiary-fixed text-primary font-label-sm text-label-sm font-bold">
<span aria-hidden="true" class="text-[15px] font-symbols font-normal not-italic leading-none normal-case whitespace-nowrap [font-feature-settings:'liga'] [word-wrap:normal]">newspaper</span>{{ $page->text('text_118') }}</div>
<h4 class="font-headline-sm text-headline-sm text-tertiary-fixed leading-snug font-semibold">{{ $page->text('text_119') }}</h4>
<p class="font-body-sm text-body-sm text-on-primary-container leading-relaxed">{{ $page->text('text_120') }}</p>
<a class="inline-flex items-center justify-between w-full px-4 py-2.5 rounded-full bg-tertiary-fixed text-primary font-label-md text-label-md font-bold hover:bg-tertiary-fixed-dim transition-colors shadow-xs" href="#unduh-pdf">
<span class="">{{ $page->text('text_121') }}</span>
<span aria-hidden="true" class="text-[18px] font-symbols font-normal not-italic leading-none normal-case whitespace-nowrap [font-feature-settings:'liga'] [word-wrap:normal]">download</span>
</a>
</div>
</div>

<div class="p-5 bg-surface-container-low/70 border border-surface-container rounded-2xl space-y-3 shadow-xs">
<span class="font-label-sm text-label-sm uppercase font-bold text-secondary tracking-wider flex items-center gap-1.5">
<span aria-hidden="true" class="text-[18px] text-primary font-symbols font-normal not-italic leading-none normal-case whitespace-nowrap [font-feature-settings:'liga'] [word-wrap:normal]">event_available</span>{{ $page->text('text_122') }}</span>
<h4 class="font-headline-sm text-[19px] text-primary leading-snug font-semibold">{{ $page->text('text_123') }}</h4>
<div class="space-y-1.5 text-on-surface-variant font-body-sm text-body-sm pt-0.5">
<div class="flex items-center gap-2">
<span aria-hidden="true" class="text-[18px] text-primary font-symbols font-normal not-italic leading-none normal-case whitespace-nowrap [font-feature-settings:'liga'] [word-wrap:normal]">calendar_month</span>
<span class="font-medium text-on-surface">{{ $page->text('text_124') }}</span>
</div>
<div class="flex items-center gap-2">
<span aria-hidden="true" class="text-[18px] text-primary font-symbols font-normal not-italic leading-none normal-case whitespace-nowrap [font-feature-settings:'liga'] [word-wrap:normal]">schedule</span>
<span class="">{{ $page->text('text_125') }}</span>
</div>
<div class="flex items-center gap-2">
<span aria-hidden="true" class="text-[18px] text-primary font-symbols font-normal not-italic leading-none normal-case whitespace-nowrap [font-feature-settings:'liga'] [word-wrap:normal]">location_on</span>
<span class="">{{ $page->text('text_126') }}</span>
</div>
</div>
<div class="pt-1 border-t border-surface-container">
<a class="inline-flex items-center gap-1 font-label-sm text-label-sm font-bold text-primary hover:text-secondary transition-colors" href="/kontak">
<span class="">{{ $page->text('text_127') }}</span>
<span aria-hidden="true" class="text-[16px] font-symbols font-normal not-italic leading-none normal-case whitespace-nowrap [font-feature-settings:'liga'] [word-wrap:normal]">chevron_right</span>
</a>
</div>
</div>
</aside>
</div>
</div>
</section>

<section class="w-full bg-surface-container-low/70 border-t border-surface-container py-space-xl">
<div class="max-w-7xl mx-auto px-gutter space-y-space-lg">
<div class="flex flex-col sm:flex-row sm:items-end justify-between gap-space-sm pb-space-xs">
<div class="">
<span class="font-label-sm text-label-sm uppercase font-bold text-secondary tracking-wider block">{{ $page->text('text_128') }}</span>
<h2 class="font-headline-xl text-headline-xl-mobile md:text-headline-xl text-primary leading-tight font-medium">{{ $page->text('text_129') }}</h2>
</div>
<a class="inline-flex items-center gap-1 font-label-lg text-label-lg font-bold text-primary hover:text-secondary transition-colors" href="/berita">
<span class="">{{ $page->text('text_130') }}</span>
<span aria-hidden="true" class="text-[20px] font-symbols font-normal not-italic leading-none normal-case whitespace-nowrap [font-feature-settings:'liga'] [word-wrap:normal]">arrow_forward</span>
</a>
</div>

<div class="grid grid-cols-1 md:grid-cols-3 gap-gutter">

<article class="bg-surface-container-lowest rounded-2xl overflow-hidden shadow-xs border border-surface-container flex flex-col justify-between group hover:-translate-y-1 hover:shadow-md transition-all duration-300">
<div class="">
<div class="aspect-[16/10] w-full overflow-hidden bg-primary-container">
<img alt="Dua siswa SMP Harapan Mulia tersenyum bangga di samping komposter otomatis rancangan mereka sendiri dengan layar sensor Arduino sederhana di halaman hijau asri sekolah." class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" decoding="async" loading="lazy" src="{{ $page->media('image_6') }}"/>
</div>
<div class="p-5 space-y-2">
<div class="flex items-center gap-2">
<span class="px-2.5 py-0.5 rounded-full bg-surface-container text-primary font-label-sm text-label-sm font-bold border border-surface-container-high">{{ $page->text('text_131') }}</span>
<span class="text-on-surface-variant font-label-sm text-label-sm">{{ $page->text('text_132') }}</span>
</div>
<h3 class="font-headline-sm text-[19px] text-primary leading-snug group-hover:text-secondary transition-colors font-semibold">
<a class="" href="#detail-berita-1">{{ $page->text('text_133') }}</a>
</h3>
<p class="font-body-sm text-body-sm text-on-surface-variant line-clamp-2 leading-relaxed">{{ $page->text('text_134') }}</p>
</div>
</div>
<div class="p-5 pt-0">
<a class="inline-flex items-center gap-1 font-label-sm text-label-sm font-bold text-primary group-hover:text-secondary" href="#detail-berita-1">
<span class="">{{ $page->text('text_135') }}</span>
<span aria-hidden="true" class="text-[16px] group-hover:translate-x-1 transition-transform font-symbols font-normal not-italic leading-none normal-case whitespace-nowrap [font-feature-settings:'liga'] [word-wrap:normal]">east</span>
</a>
</div>
</article>

<article class="bg-surface-container-lowest rounded-2xl overflow-hidden shadow-xs border border-surface-container flex flex-col justify-between group hover:-translate-y-1 hover:shadow-md transition-all duration-300">
<div class="">
<div class="aspect-[16/10] w-full overflow-hidden bg-primary-container">
<img alt="Seorang psikolog sekolah Harapan Mulia sedang berdiskusi melingkar dengan para orang tua murid di ruang konseling yang hangat dan nyaman dengan jendela besar menghadap pepohonan rimbun." class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" decoding="async" loading="lazy" src="{{ $page->media('image_7') }}"/>
</div>
<div class="p-5 space-y-2">
<div class="flex items-center gap-2">
<span class="px-2.5 py-0.5 rounded-full bg-surface-container text-primary font-label-sm text-label-sm font-bold border border-surface-container-high">{{ $page->text('text_136') }}</span>
<span class="text-on-surface-variant font-label-sm text-label-sm">{{ $page->text('text_137') }}</span>
</div>
<h3 class="font-headline-sm text-[19px] text-primary leading-snug group-hover:text-secondary transition-colors font-semibold">
<a class="" href="#detail-berita-2">{{ $page->text('text_138') }}</a>
</h3>
<p class="font-body-sm text-body-sm text-on-surface-variant line-clamp-2 leading-relaxed">{{ $page->text('text_139') }}</p>
</div>
</div>
<div class="p-5 pt-0">
<a class="inline-flex items-center gap-1 font-label-sm text-label-sm font-bold text-primary group-hover:text-secondary" href="#detail-berita-2">
<span class="">{{ $page->text('text_140') }}</span>
<span aria-hidden="true" class="text-[16px] group-hover:translate-x-1 transition-transform font-symbols font-normal not-italic leading-none normal-case whitespace-nowrap [font-feature-settings:'liga'] [word-wrap:normal]">east</span>
</a>
</div>
</article>

<article class="bg-surface-container-lowest rounded-2xl overflow-hidden shadow-xs border border-surface-container flex flex-col justify-between group hover:-translate-y-1 hover:shadow-md transition-all duration-300">
<div class="">
<div class="aspect-[16/10] w-full overflow-hidden bg-primary-container">
<img alt="Tiga siswa SMA Harapan Mulia mengenakan blazer almamater rapi dengan lencana Merah Putih di forum Model United Nations Singapore, berdiskusi santun dengan delegasi internasional lainnya di podium megah." class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" decoding="async" loading="lazy" src="{{ $page->media('image_8') }}"/>
</div>
<div class="p-5 space-y-2">
<div class="flex items-center gap-2">
<span class="px-2.5 py-0.5 rounded-full bg-surface-container text-primary font-label-sm text-label-sm font-bold border border-surface-container-high">{{ $page->text('text_141') }}</span>
<span class="text-on-surface-variant font-label-sm text-label-sm">{{ $page->text('text_142') }}</span>
</div>
<h3 class="font-headline-sm text-[19px] text-primary leading-snug group-hover:text-secondary transition-colors font-semibold">
<a class="" href="#detail-berita-3">{{ $page->text('text_143') }}</a>
</h3>
<p class="font-body-sm text-body-sm text-on-surface-variant line-clamp-2 leading-relaxed">{{ $page->text('text_144') }}</p>
</div>
</div>
<div class="p-5 pt-0">
<a class="inline-flex items-center gap-1 font-label-sm text-label-sm font-bold text-primary group-hover:text-secondary" href="#detail-berita-3">
<span class="">{{ $page->text('text_145') }}</span>
<span aria-hidden="true" class="text-[16px] group-hover:translate-x-1 transition-transform font-symbols font-normal not-italic leading-none normal-case whitespace-nowrap [font-feature-settings:'liga'] [word-wrap:normal]">east</span>
</a>
</div>
</article>
</div>
</div>
</section>

<section class="w-full bg-surface-container-lowest py-space-xl">
<div class="max-w-7xl mx-auto px-gutter">
<div class="bg-primary text-on-primary rounded-3xl p-space-lg md:p-space-xl relative overflow-hidden shadow-xl border border-primary-container">
<div class="absolute -right-16 -bottom-16 w-96 h-96 rounded-full bg-surface-tint/20 pointer-events-none"></div>
<div class="relative z-10 max-w-3xl space-y-space-md">
<span class="inline-flex items-center gap-2 px-3.5 py-1 rounded-full bg-tertiary-fixed text-primary font-label-sm text-label-sm font-bold uppercase tracking-wider">
<span aria-hidden="true" class="text-[16px] font-symbols font-normal not-italic leading-none normal-case whitespace-nowrap [font-feature-settings:'liga'] [word-wrap:normal]">school</span>{{ $page->text('text_146') }}</span>
<h2 class="font-headline-xl text-headline-xl-mobile md:text-headline-xl text-tertiary-fixed leading-tight font-normal">{{ $page->text('text_147') }}</h2>
<p class="font-body-lg text-body-lg text-on-primary-container leading-relaxed">{{ $page->text('text_148') }}</p>
<div class="flex flex-wrap items-center gap-space-md pt-2">
<a class="inline-flex items-center gap-2 px-6 py-3 rounded-full bg-tertiary-fixed text-primary font-label-lg text-label-lg font-bold hover:bg-tertiary-fixed-dim transition-all shadow-md hover:scale-[1.02]" href="/ppdb">
<span class="">{{ $page->text('text_149') }}</span>
<span aria-hidden="true" class="text-[20px] font-symbols font-normal not-italic leading-none normal-case whitespace-nowrap [font-feature-settings:'liga'] [word-wrap:normal]">arrow_forward</span>
</a>
<a class="inline-flex items-center gap-2 px-6 py-3 rounded-full bg-surface-container-lowest/10 text-on-primary font-label-lg text-label-lg font-semibold hover:bg-surface-container-lowest/20 transition-colors border border-white/20" href="/kontak">
<span aria-hidden="true" class="text-[20px] font-symbols font-normal not-italic leading-none normal-case whitespace-nowrap [font-feature-settings:'liga'] [word-wrap:normal]">explore</span>
<span class="">{{ $page->text('text_150') }}</span>
</a>
</div>
</div>
</div>
</div>
</section>


</div>
</main>
@endsection
