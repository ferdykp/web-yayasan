@extends('layouts.public')
@section('content')
<main class="pt-20" id="main-content">
<div class="flex flex-col w-full">

<section class="relative w-full max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-space-xl">
<div class="grid grid-cols-1 lg:grid-cols-12 gap-y-space-lg lg:gap-x-space-xl items-center">

<div class="lg:col-span-7 flex flex-col items-start">
<div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-secondary-container text-on-secondary-container mb-space-md">
<span class="w-2 h-2 rounded-full bg-primary"></span>
<span class="font-label-sm text-label-sm uppercase tracking-widest font-bold">{{ $page->text('text_1') }}</span>
</div>
<h1 class="font-headline-2xl text-headline-2xl text-primary mb-space-md tracking-tight">{{ $page->text('text_2') }}<span class="italic font-normal">{{ $page->text('text_3') }}</span>
</h1>
<p class="font-body-xl text-body-xl text-on-surface-variant max-w-xl leading-relaxed mb-space-lg">{{ $page->text('text_4') }}</p>

<div class="w-full grid grid-cols-3 gap-4 pt-space-md border-t border-outline-variant/30">
<div class="">
<div class="font-headline-xl text-headline-xl text-primary font-bold">{{ $page->text('text_5') }}</div>
<p class="font-body-sm text-body-sm text-secondary leading-snug mt-1">{{ $page->text('text_6') }}</p>
</div>
<div class="">
<div class="font-headline-xl text-headline-xl text-primary font-bold">{{ $page->text('text_7') }}</div>
<p class="font-body-sm text-body-sm text-secondary leading-snug mt-1">{{ $page->text('text_8') }}</p>
</div>
<div class="">
<div class="font-headline-xl text-headline-xl text-primary font-bold">{{ $page->text('text_9') }}</div>
<p class="font-body-sm text-body-sm text-secondary leading-snug mt-1">{{ $page->text('text_10') }}</p>
</div>
</div>
</div>

<div class="lg:col-span-5 relative mt-4 lg:mt-0">
<div class="relative w-full aspect-[4/5] rounded-[2rem] overflow-hidden bg-surface-container shadow-md">
<img alt="Modern serene Indonesian school campus courtyard with lush green botanical gardens, tropical trees, natural sunlight streaming through architectural colonnades, students walking with backpacks in uniforms, calm editorial academic aesthetic in tones of forest green and warm cream" class="w-full h-full object-cover" decoding="async" fetchpriority="high" loading="eager" src="{{ $page->media('image_1') }}"/>
<div class="absolute inset-0 bg-gradient-to-t from-primary/60 via-transparent to-transparent"></div>
</div>

<div class="absolute -bottom-6 -left-6 max-w-xs bg-surface-container-lowest p-space-md rounded-[2rem] shadow-xl border border-outline-variant/20 hidden sm:block">
<div class="flex items-center gap-2 mb-2 text-primary">
<span aria-hidden="true" class="text-[20px] font-symbols font-normal not-italic leading-none normal-case whitespace-nowrap [font-feature-settings:'liga'] [word-wrap:normal] [font-variation-settings:'FILL'_1]">eco</span>
<span class="font-label-sm text-label-sm uppercase tracking-wider text-secondary font-bold">{{ $page->text('text_11') }}</span>
</div>
<p class="font-headline-sm text-headline-sm italic text-primary leading-snug">{{ $page->text('text_12') }}</p>
</div>
</div>
</div>
</section>

<section class="w-full bg-surface-container-low py-space-xl my-space-lg">
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
<div class="bg-surface-container-lowest rounded-[3rem] p-space-lg lg:p-space-xl shadow-sm border border-outline-variant/30">
<div class="grid grid-cols-1 lg:grid-cols-12 gap-space-lg items-center">

<div class="lg:col-span-5 relative">
<div class="w-full aspect-[3/4] rounded-[2rem] overflow-hidden bg-surface-container">
<img alt="Dignified mature Indonesian educator and foundation leader wearing an elegant formal batik blazer smiling gently in a sunlit university library archive, soft warm lighting, editorial portraiture, professional and trustworthy academic atmosphere" class="w-full h-full object-cover" decoding="async" loading="lazy" src="{{ $page->media('image_2') }}"/>
</div>
<div class="absolute bottom-4 left-4 right-4 bg-primary text-on-primary p-space-sm rounded-[1rem] text-center">
<span class="font-label-md text-label-md block font-semibold text-tertiary-fixed">{{ $page->text('text_13') }}</span>
<span class="font-body-sm text-body-sm text-surface-container-high">{{ $page->text('text_14') }}</span>
</div>
</div>

<div class="lg:col-span-7 flex flex-col justify-center">
<div class="flex items-center gap-2 mb-space-sm text-primary">
<span aria-hidden="true" class="text-[22px] font-symbols font-normal not-italic leading-none normal-case whitespace-nowrap [font-feature-settings:'liga'] [word-wrap:normal]">format_quote</span>
<span class="font-label-md text-label-md uppercase tracking-wider font-bold text-secondary">{{ $page->text('text_15') }}</span>
</div>
<h2 class="font-headline-xl text-headline-xl text-primary leading-tight mb-space-md">{{ $page->text('text_16') }}</h2>
<div class="space-y-4 font-body-lg text-body-lg text-on-surface-variant leading-relaxed mb-space-lg">
<p class="">{{ $page->text('text_17') }}</p>
<p class="">{{ $page->text('text_18') }}</p>
</div>
<div class="flex items-center justify-between pt-space-md border-t border-outline-variant/30">
<div class="flex flex-col">
<span class="font-headline-sm text-headline-sm italic text-primary">{{ $page->text('text_19') }}</span>
<span class="font-body-sm text-body-sm text-secondary">{{ $page->text('text_20') }}</span>
</div>

<div class="w-32 h-12 text-primary opacity-80 flex items-center">
<svg class="w-full h-full stroke-current fill-none stroke-[2] stroke-linecap-round stroke-linejoin-round" viewbox="0 0 160 50">
<path class="" d="M 10 35 C 30 10, 45 40, 60 20 C 75 5, 80 40, 95 25 C 110 15, 120 42, 140 20 M 60 28 Q 90 28 150 28"></path>
</svg>
</div>
</div>
</div>
</div>
</div>
</div>
</section>

<section class="w-full max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-space-xl">
<div class="flex flex-col items-center text-center mb-space-xl">
<span class="font-label-md text-label-md uppercase tracking-widest text-secondary font-bold mb-2">{{ $page->text('text_21') }}</span>
<h2 class="font-headline-2xl text-headline-2xl text-primary max-w-3xl">{{ $page->text('text_22') }}</h2>
</div>

<div class="relative bg-primary-container text-on-primary rounded-[3rem] p-space-lg lg:p-space-xl overflow-hidden mb-space-xl shadow-md">
<div class="absolute -right-16 -top-16 w-80 h-80 bg-white/5 rounded-full blur-2xl pointer-events-none"></div>
<div class="relative z-10 max-w-3xl mx-auto text-center flex flex-col items-center">
<span class="font-label-md text-label-md uppercase tracking-widest text-tertiary-fixed font-bold mb-space-sm px-4 py-1 rounded-full bg-surface-container-lowest/10">{{ $page->text('text_23') }}</span>
<blockquote class="font-headline-xl text-headline-xl leading-snug font-serif text-surface-container-lowest mb-space-md">{{ $page->text('text_24') }}</blockquote>
<p class="font-body-md text-body-md text-on-primary-container max-w-xl">{{ $page->text('text_25') }}</p>
</div>
</div>

<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-space-md">

<div class="bg-surface-container-lowest p-space-md rounded-[2rem] border border-outline-variant/30 flex flex-col justify-between hover:translate-y-[-2px] transition-transform duration-300">
<div class="">
<span class="font-headline-2xl text-headline-2xl text-secondary-fixed-dim font-serif block mb-space-xs">{{ $page->text('text_26') }}</span>
<h3 class="font-headline-sm text-headline-sm text-primary mb-space-xs font-bold">{{ $page->text('text_27') }}</h3>
<p class="font-body-sm text-body-sm text-on-surface-variant leading-relaxed">{{ $page->text('text_28') }}</p>
</div>
<div class="mt-space-md pt-space-xs border-t border-outline-variant/20 flex items-center text-primary gap-1">
<span aria-hidden="true" class="text-[16px] font-symbols font-normal not-italic leading-none normal-case whitespace-nowrap [font-feature-settings:'liga'] [word-wrap:normal]">menu_book</span>
<span class="font-label-sm text-label-sm font-semibold">{{ $page->text('text_29') }}</span>
</div>
</div>

<div class="bg-surface-container-lowest p-space-md rounded-[2rem] border border-outline-variant/30 flex flex-col justify-between hover:translate-y-[-2px] transition-transform duration-300">
<div class="">
<span class="font-headline-2xl text-headline-2xl text-secondary-fixed-dim font-serif block mb-space-xs">{{ $page->text('text_30') }}</span>
<h3 class="font-headline-sm text-headline-sm text-primary mb-space-xs font-bold">{{ $page->text('text_31') }}</h3>
<p class="font-body-sm text-body-sm text-on-surface-variant leading-relaxed">{{ $page->text('text_32') }}</p>
</div>
<div class="mt-space-md pt-space-xs border-t border-outline-variant/20 flex items-center text-primary gap-1">
<span aria-hidden="true" class="text-[16px] font-symbols font-normal not-italic leading-none normal-case whitespace-nowrap [font-feature-settings:'liga'] [word-wrap:normal]">psychology_alt</span>
<span class="font-label-sm text-label-sm font-semibold">{{ $page->text('text_33') }}</span>
</div>
</div>

<div class="bg-surface-container-lowest p-space-md rounded-[2rem] border border-outline-variant/30 flex flex-col justify-between hover:translate-y-[-2px] transition-transform duration-300">
<div class="">
<span class="font-headline-2xl text-headline-2xl text-secondary-fixed-dim font-serif block mb-space-xs">{{ $page->text('text_34') }}</span>
<h3 class="font-headline-sm text-headline-sm text-primary mb-space-xs font-bold">{{ $page->text('text_35') }}</h3>
<p class="font-body-sm text-body-sm text-on-surface-variant leading-relaxed">{{ $page->text('text_36') }}</p>
</div>
<div class="mt-space-md pt-space-xs border-t border-outline-variant/20 flex items-center text-primary gap-1">
<span aria-hidden="true" class="text-[16px] font-symbols font-normal not-italic leading-none normal-case whitespace-nowrap [font-feature-settings:'liga'] [word-wrap:normal]">biotech</span>
<span class="font-label-sm text-label-sm font-semibold">{{ $page->text('text_37') }}</span>
</div>
</div>

<div class="bg-surface-container-lowest p-space-md rounded-[2rem] border border-outline-variant/30 flex flex-col justify-between hover:translate-y-[-2px] transition-transform duration-300">
<div class="">
<span class="font-headline-2xl text-headline-2xl text-secondary-fixed-dim font-serif block mb-space-xs">{{ $page->text('text_38') }}</span>
<h3 class="font-headline-sm text-headline-sm text-primary mb-space-xs font-bold">{{ $page->text('text_39') }}</h3>
<p class="font-body-sm text-body-sm text-on-surface-variant leading-relaxed">{{ $page->text('text_40') }}</p>
</div>
<div class="mt-space-md pt-space-xs border-t border-outline-variant/20 flex items-center text-primary gap-1">
<span aria-hidden="true" class="text-[16px] font-symbols font-normal not-italic leading-none normal-case whitespace-nowrap [font-feature-settings:'liga'] [word-wrap:normal]">volunteer_activism</span>
<span class="font-label-sm text-label-sm font-semibold">{{ $page->text('text_41') }}</span>
</div>
</div>
</div>
</section>

<section class="w-full bg-surface-container-low py-space-xl my-space-lg" id="linimasa-section">
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
<div class="flex flex-col md:flex-row md:items-end justify-between mb-space-xl gap-4">
<div class="">
<span class="font-label-md text-label-md uppercase tracking-widest text-secondary font-bold">{{ $page->text('text_42') }}</span>
<h2 class="font-headline-2xl text-headline-2xl text-primary mt-1">{{ $page->text('text_43') }}</h2>
</div>
<p class="font-body-md text-body-md text-on-surface-variant max-w-md">{{ $page->text('text_44') }}</p>
</div>

<div class="w-full flex items-center gap-2 overflow-x-auto pb-4 no-scrollbar border-b border-outline-variant/40" id="timeline-buttons">
<a class="timeline-btn active px-6 py-2 rounded-full font-label-lg text-label-lg transition-all bg-primary text-on-primary whitespace-nowrap shadow-sm" href="/tentang/sejarah">{{ $page->text('text_45') }}</a>
<a class="timeline-btn px-6 py-2 rounded-full font-label-lg text-label-lg transition-all bg-surface-container-lowest text-on-surface-variant hover:text-primary whitespace-nowrap" href="/tentang/sejarah">{{ $page->text('text_46') }}</a>
<a class="timeline-btn px-6 py-2 rounded-full font-label-lg text-label-lg transition-all bg-surface-container-lowest text-on-surface-variant hover:text-primary whitespace-nowrap" href="/tentang/sejarah">{{ $page->text('text_47') }}</a>
<a class="timeline-btn px-6 py-2 rounded-full font-label-lg text-label-lg transition-all bg-surface-container-lowest text-on-surface-variant hover:text-primary whitespace-nowrap" href="/tentang/sejarah">{{ $page->text('text_48') }}</a>
<a class="timeline-btn px-6 py-2 rounded-full font-label-lg text-label-lg transition-all bg-surface-container-lowest text-on-surface-variant hover:text-primary whitespace-nowrap" href="/tentang/sejarah">{{ $page->text('text_49') }}</a>
</div>

<div class="mt-space-lg bg-surface-container-lowest rounded-[3rem] p-space-lg lg:p-space-xl border border-outline-variant/30 shadow-sm" id="timeline-card">
<div class="grid grid-cols-1 lg:grid-cols-12 gap-space-lg items-center">
<div class="lg:col-span-5 order-2 lg:order-1">
<span class="font-headline-2xl text-headline-2xl text-primary font-bold block mb-2" id="tl-year">{{ $page->text('text_50') }}</span>
<h3 class="font-headline-xl text-headline-xl text-primary mb-space-sm font-semibold" id="tl-title">{{ $page->text('text_51') }}</h3>
<p class="font-body-lg text-body-lg text-on-surface-variant leading-relaxed mb-space-md" id="tl-desc">{{ $page->text('text_52') }}</p>
<div class="flex items-center gap-3 pt-space-sm border-t border-outline-variant/20">
<span aria-hidden="true" class="text-primary text-[24px] font-symbols font-normal not-italic leading-none normal-case whitespace-nowrap [font-feature-settings:'liga'] [word-wrap:normal]">verified</span>
<span class="font-body-sm text-body-sm text-secondary font-medium" id="tl-milestone">{{ $page->text('text_53') }}</span>
</div>
</div>
<div class="lg:col-span-7 order-1 lg:order-2">
<div class="relative w-full aspect-[16/10] rounded-[2rem] overflow-hidden bg-surface-container shadow-inner">
<img alt="Historic documentary style photo of school founders looking over building blueprints inside a sunny colonial style hall, warm retro editorial mood, candid professional founding moment in Jakarta" class="w-full h-full object-cover transition-opacity duration-300" decoding="async" id="tl-img" loading="lazy" src="{{ $page->media('image_3') }}"/>
</div>
</div>
</div>
</div>
</div>
</section>

<section class="w-full max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-space-xl">
<div class="text-center max-w-2xl mx-auto mb-space-xl">
<span class="font-label-md text-label-md uppercase tracking-widest text-secondary font-bold">{{ $page->text('text_54') }}</span>
<h2 class="font-headline-2xl text-headline-2xl text-primary mt-1">{{ $page->text('text_55') }}</h2>
<p class="font-body-md text-body-md text-on-surface-variant mt-2">{{ $page->text('text_56') }}</p>
</div>
<div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-5 gap-space-md">

<div class="bg-surface-container-lowest p-space-md rounded-[2rem] border border-outline-variant/30 flex flex-col items-start hover:shadow-md transition-all">
<div class="w-12 h-12 rounded-full bg-surface-container-high text-primary flex items-center justify-center mb-space-sm">
<span aria-hidden="true" class="text-[24px] font-symbols font-normal not-italic leading-none normal-case whitespace-nowrap [font-feature-settings:'liga'] [word-wrap:normal]">balance</span>
</div>
<h3 class="font-headline-sm text-headline-sm text-primary mb-1">{{ $page->text('text_57') }}</h3>
<p class="font-body-sm text-body-sm text-on-surface-variant leading-normal">{{ $page->text('text_58') }}</p>
</div>

<div class="bg-surface-container-lowest p-space-md rounded-[2rem] border border-outline-variant/30 flex flex-col items-start hover:shadow-md transition-all">
<div class="w-12 h-12 rounded-full bg-surface-container-high text-primary flex items-center justify-center mb-space-sm">
<span aria-hidden="true" class="text-[24px] font-symbols font-normal not-italic leading-none normal-case whitespace-nowrap [font-feature-settings:'liga'] [word-wrap:normal]">grade</span>
</div>
<h3 class="font-headline-sm text-headline-sm text-primary mb-1">{{ $page->text('text_59') }}</h3>
<p class="font-body-sm text-body-sm text-on-surface-variant leading-normal">{{ $page->text('text_60') }}</p>
</div>

<div class="bg-surface-container-lowest p-space-md rounded-[2rem] border border-outline-variant/30 flex flex-col items-start hover:shadow-md transition-all">
<div class="w-12 h-12 rounded-full bg-surface-container-high text-primary flex items-center justify-center mb-space-sm">
<span aria-hidden="true" class="text-[24px] font-symbols font-normal not-italic leading-none normal-case whitespace-nowrap [font-feature-settings:'liga'] [word-wrap:normal]">favorite</span>
</div>
<h3 class="font-headline-sm text-headline-sm text-primary mb-1">{{ $page->text('text_61') }}</h3>
<p class="font-body-sm text-body-sm text-on-surface-variant leading-normal">{{ $page->text('text_62') }}</p>
</div>

<div class="bg-surface-container-lowest p-space-md rounded-[2rem] border border-outline-variant/30 flex flex-col items-start hover:shadow-md transition-all">
<div class="w-12 h-12 rounded-full bg-surface-container-high text-primary flex items-center justify-center mb-space-sm">
<span aria-hidden="true" class="text-[24px] font-symbols font-normal not-italic leading-none normal-case whitespace-nowrap [font-feature-settings:'liga'] [word-wrap:normal]">diversity_3</span>
</div>
<h3 class="font-headline-sm text-headline-sm text-primary mb-1">{{ $page->text('text_63') }}</h3>
<p class="font-body-sm text-body-sm text-on-surface-variant leading-normal">{{ $page->text('text_64') }}</p>
</div>

<div class="bg-surface-container-lowest p-space-md rounded-[2rem] border border-outline-variant/30 flex flex-col items-start hover:shadow-md transition-all">
<div class="w-12 h-12 rounded-full bg-surface-container-high text-primary flex items-center justify-center mb-space-sm">
<span aria-hidden="true" class="text-[24px] font-symbols font-normal not-italic leading-none normal-case whitespace-nowrap [font-feature-settings:'liga'] [word-wrap:normal]">nest_eco_leaf</span>
</div>
<h3 class="font-headline-sm text-headline-sm text-primary mb-1">{{ $page->text('text_65') }}</h3>
<p class="font-body-sm text-body-sm text-on-surface-variant leading-normal">{{ $page->text('text_66') }}</p>
</div>
</div>
</section>

<section class="w-full bg-surface-container-low py-space-xl">
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
<div class="flex flex-col md:flex-row md:items-end justify-between mb-space-xl gap-4">
<div class="">
<span class="font-label-md text-label-md uppercase tracking-widest text-secondary font-bold">{{ $page->text('text_67') }}</span>
<h2 class="font-headline-2xl text-headline-2xl text-primary mt-1">{{ $page->text('text_68') }}</h2>
</div>
<p class="font-body-md text-body-md text-on-surface-variant max-w-md">{{ $page->text('text_69') }}</p>
</div>

<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-space-md">

<div class="bg-surface-container-lowest rounded-[2rem] overflow-hidden border border-outline-variant/30 group hover:shadow-md transition-all">
<div class="w-full aspect-[4/5] bg-surface-container overflow-hidden">
<img alt="Editorial portrait of Dr. H. Faisal Rahman, M.Ed., Indonesian educational leader in tailored navy suit against soft natural library background, warm dignified lighting" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" decoding="async" loading="lazy" src="{{ $page->media('image_4') }}"/>
</div>
<div class="p-space-md">
<span class="font-label-sm text-label-sm uppercase font-bold text-secondary tracking-wider block">{{ $page->text('text_70') }}</span>
<h3 class="font-headline-sm text-headline-sm text-primary font-semibold mt-1">{{ $page->text('text_71') }}</h3>
<p class="font-body-sm text-body-sm text-on-surface-variant mt-2 leading-relaxed">{{ $page->text('text_72') }}</p>
</div>
</div>

<div class="bg-surface-container-lowest rounded-[2rem] overflow-hidden border border-outline-variant/30 group hover:shadow-md transition-all">
<div class="w-full aspect-[4/5] bg-surface-container overflow-hidden">
<img alt="Editorial portrait of Dra. Hj. Maryam Kartini, M.Psi., graceful Indonesian female education director wearing elegant emerald green hijab and blazer in a sunlit seminar room" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" decoding="async" loading="lazy" src="{{ $page->media('image_5') }}"/>
</div>
<div class="p-space-md">
<span class="font-label-sm text-label-sm uppercase font-bold text-secondary tracking-wider block">{{ $page->text('text_73') }}</span>
<h3 class="font-headline-sm text-headline-sm text-primary font-semibold mt-1">{{ $page->text('text_74') }}</h3>
<p class="font-body-sm text-body-sm text-on-surface-variant mt-2 leading-relaxed">{{ $page->text('text_75') }}</p>
</div>
</div>

<div class="bg-surface-container-lowest rounded-[2rem] overflow-hidden border border-outline-variant/30 group hover:shadow-md transition-all">
<div class="w-full aspect-[4/5] bg-surface-container overflow-hidden">
<img alt="Editorial portrait of Ir. Bambang Wicaksono, M.T., professional Indonesian educational secretary in sharp charcoal suit smiling calmly in an architectural studio setting" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" decoding="async" loading="lazy" src="{{ $page->media('image_6') }}"/>
</div>
<div class="p-space-md">
<span class="font-label-sm text-label-sm uppercase font-bold text-secondary tracking-wider block">{{ $page->text('text_76') }}</span>
<h3 class="font-headline-sm text-headline-sm text-primary font-semibold mt-1">{{ $page->text('text_77') }}</h3>
<p class="font-body-sm text-body-sm text-on-surface-variant mt-2 leading-relaxed">{{ $page->text('text_78') }}</p>
</div>
</div>

<div class="bg-surface-container-lowest rounded-[2rem] overflow-hidden border border-outline-variant/30 group hover:shadow-md transition-all">
<div class="w-full aspect-[4/5] bg-surface-container overflow-hidden">
<img alt="Editorial portrait of Dr. Nurul Izzati, M.Sc., female Indonesian academician and finance director wearing stylish modern glasses and beige modest executive blazer" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" decoding="async" loading="lazy" src="{{ $page->media('image_7') }}"/>
</div>
<div class="p-space-md">
<span class="font-label-sm text-label-sm uppercase font-bold text-secondary tracking-wider block">{{ $page->text('text_79') }}</span>
<h3 class="font-headline-sm text-headline-sm text-primary font-semibold mt-1">{{ $page->text('text_80') }}</h3>
<p class="font-body-sm text-body-sm text-on-surface-variant mt-2 leading-relaxed">{{ $page->text('text_81') }}</p>
</div>
</div>
</div>
</div>
</section>

<section class="w-full max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-space-xl mb-space-lg">
<div class="relative bg-primary text-on-primary rounded-[3rem] p-space-lg lg:p-space-xl overflow-hidden shadow-lg">

<div class="absolute right-0 bottom-0 opacity-10 pointer-events-none translate-x-12 translate-y-12">
<svg class="" fill="currentColor" height="400" viewbox="0 0 200 200" width="400">
<path class="" d="M40 160 C 20 100, 100 20, 160 40 C 180 100, 100 180, 40 160 Z"></path>
</svg>
</div>
<div class="relative z-10 max-w-2xl">
<span class="font-label-md text-label-md uppercase tracking-widest text-tertiary-fixed font-bold block mb-space-xs">{{ $page->text('text_82') }}</span>
<h2 class="font-headline-2xl text-headline-2xl text-surface-container-lowest font-normal mb-space-md leading-tight">{{ $page->text('text_83') }}</h2>
<p class="font-body-lg text-body-lg text-on-primary-container mb-space-lg leading-relaxed">{{ $page->text('text_84') }}</p>
<div class="flex flex-wrap items-center gap-space-sm">

<a class="inline-flex items-center gap-2 px-7 py-3 rounded-full bg-tertiary-fixed text-on-tertiary-fixed font-label-lg text-label-lg font-bold hover:bg-tertiary-fixed-dim transition-all shadow-sm" data-path="sekolah" href="/sekolah">
<span class="">{{ $page->text('text_85') }}</span>
<span aria-hidden="true" class="text-[18px] font-symbols font-normal not-italic leading-none normal-case whitespace-nowrap [font-feature-settings:'liga'] [word-wrap:normal]">arrow_forward</span>
</a>

<a class="inline-flex items-center gap-2 px-7 py-3 rounded-full border border-surface-container-low text-surface-container-lowest hover:bg-surface-container-low/10 font-label-lg text-label-lg font-semibold transition-colors" data-path="kontak" href="/kontak">
<span aria-hidden="true" class="text-[18px] font-symbols font-normal not-italic leading-none normal-case whitespace-nowrap [font-feature-settings:'liga'] [word-wrap:normal]">support_agent</span>
<span class="">{{ $page->text('text_86') }}</span>
</a>
</div>
</div>
</div>
</section>
</div>


</main>
@endsection
