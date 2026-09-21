@extends('layouts.public')
@section('content')
<main class="pt-20 min-h-screen" id="main-content"><div class="flex flex-col w-full">

<section class="relative overflow-hidden bg-surface-container-low py-space-xl">

<div class="absolute -right-24 -top-24 h-96 w-96 rounded-full bg-primary-fixed/25 blur-3xl pointer-events-none"></div>
<div class="absolute left-10 bottom-0 h-80 w-80 rounded-full bg-surface-container-high/40 blur-2xl pointer-events-none"></div>
<div class="max-w-7xl mx-auto px-gutter relative z-10">
<div class="grid grid-cols-1 lg:grid-cols-12 gap-gutter items-center">

<div class="lg:col-span-7 flex flex-col items-start">
<div class="inline-flex items-center gap-space-xs px-space-md py-space-xs rounded-full bg-surface-container text-primary font-label-md text-label-md mb-space-md shadow-sm">
<span class="w-2 h-2 rounded-full bg-primary animate-pulse"></span>
<span class="tracking-wider uppercase">{{ $page->text('text_1') }}</span>
</div>
<h1 class="font-headline-2xl text-headline-2xl text-primary tracking-tight mb-space-md leading-tight">{{ $page->text('text_2') }}</h1>
<p class="font-body-xl text-body-xl text-on-surface-variant leading-relaxed max-w-2xl mb-space-lg">{{ $page->text('text_3') }}</p>

<div class="w-full grid grid-cols-1 sm:grid-cols-3 gap-space-sm bg-surface-container-lowest/80 backdrop-blur-md rounded-[3rem] p-space-md shadow-sm">
<div class="flex flex-col items-start pr-space-sm">
<div class="flex items-center gap-space-xs text-primary mb-1">
<span aria-hidden="true" class="text-[20px] font-symbols font-normal not-italic leading-none normal-case whitespace-nowrap [font-feature-settings:'liga'] [word-wrap:normal]">chat</span>
<span class="font-label-lg text-label-lg font-bold">{{ $page->text('text_4') }}</span>
</div>
<p class="font-body-sm text-body-sm text-on-surface-variant">{{ $page->text('text_5') }}</p>
</div>
<div class="flex flex-col items-start sm:border-l-0 pr-space-sm">
<div class="flex items-center gap-space-xs text-primary mb-1">
<span aria-hidden="true" class="text-[20px] font-symbols font-normal not-italic leading-none normal-case whitespace-nowrap [font-feature-settings:'liga'] [word-wrap:normal]">event_available</span>
<span class="font-label-lg text-label-lg font-bold">{{ $page->text('text_6') }}</span>
</div>
<p class="font-body-sm text-body-sm text-on-surface-variant">{{ $page->text('text_7') }}</p>
</div>
<div class="flex flex-col items-start">
<div class="flex items-center gap-space-xs text-primary mb-1">
<span aria-hidden="true" class="text-[20px] font-symbols font-normal not-italic leading-none normal-case whitespace-nowrap [font-feature-settings:'liga'] [word-wrap:normal]">verified</span>
<span class="font-label-lg text-label-lg font-bold">{{ $page->text('text_8') }}</span>
</div>
<p class="font-body-sm text-body-sm text-on-surface-variant">{{ $page->text('text_9') }}</p>
</div>
</div>
</div>

<div class="lg:col-span-5 relative mt-space-lg lg:mt-0">
<div class="relative rounded-[2rem] overflow-hidden shadow-md bg-surface-container-lowest">
<img alt="Modern educational foundation reception area at Yayasan Harapan Mulia, warm wood desk, friendly Indonesian female admissions officer greeting prospective parents, natural greenery plants, warm morning sunlight, premium editorial academic atmosphere" class="w-full h-[420px] object-cover" decoding="async" fetchpriority="high" loading="eager" src="{{ $page->media('image_1') }}"/>
<div class="absolute inset-0 bg-gradient-to-t from-primary/70 via-transparent to-transparent"></div>
<div class="absolute bottom-4 left-4 right-4 p-space-md rounded-[1rem] bg-surface-container-lowest/95 backdrop-blur-sm shadow-sm flex items-center gap-space-sm">
<div class="w-10 h-10 rounded-full bg-secondary-container flex items-center justify-center text-primary flex-shrink-0">
<span aria-hidden="true" class="text-[22px] font-symbols font-normal not-italic leading-none normal-case whitespace-nowrap [font-feature-settings:'liga'] [word-wrap:normal]">verified_user</span>
</div>
<div class="min-w-0">
<span class="font-label-sm text-label-sm text-secondary uppercase block tracking-wider">{{ $page->text('text_10') }}</span>
<p class="font-headline-sm text-headline-sm text-primary italic truncate">{{ $page->text('text_11') }}</p>
</div>
</div>
</div>

<div class="hidden sm:flex absolute -top-4 -left-6 bg-tertiary-fixed text-primary px-space-md py-space-xs rounded-full shadow-md items-center gap-space-xs font-label-lg text-label-lg font-bold">
<span aria-hidden="true" class="text-[18px] font-symbols font-normal not-italic leading-none normal-case whitespace-nowrap [font-feature-settings:'liga'] [word-wrap:normal]">support_agent</span>
<span class="">{{ $page->text('text_12') }}</span>
</div>
</div>
</div>
</div>
</section>

<section class="py-space-xl bg-surface-container-lowest">
<div class="max-w-7xl mx-auto px-gutter">
<div class="max-w-3xl mb-space-lg">
<span class="font-label-sm text-label-sm text-secondary uppercase tracking-widest block mb-space-xs">{{ $page->text('text_13') }}</span>
<h2 class="font-headline-xl text-headline-xl text-primary tracking-tight">{{ $page->text('text_14') }}</h2>
<p class="font-body-lg text-body-lg text-on-surface-variant mt-2">{{ $page->text('text_15') }}</p>
</div>
<div class="grid grid-cols-1 lg:grid-cols-3 gap-gutter">

<div class="flex flex-col justify-between bg-surface-container-low rounded-[2rem] p-space-lg shadow-sm hover:shadow-md transition-all duration-300">
<div class="">
<div class="flex items-center justify-between mb-space-md">
<div class="w-12 h-12 rounded-full bg-primary text-on-primary flex items-center justify-center shadow-sm">
<span aria-hidden="true" class="text-[26px] font-symbols font-normal not-italic leading-none normal-case whitespace-nowrap [font-feature-settings:'liga'] [word-wrap:normal]">account_balance</span>
</div>
<span class="px-space-sm py-0.5 rounded-full bg-surface-container text-primary font-label-sm text-label-sm tracking-wider uppercase">{{ $page->text('text_16') }}</span>
</div>
<h3 class="font-headline-md text-headline-md text-primary mb-space-xs">{{ $page->text('text_17') }}</h3>
<p class="font-body-sm text-body-sm text-on-surface-variant mb-space-md">{{ $page->text('text_18') }}</p>
<ul class="space-y-space-sm font-body-md text-body-md text-on-surface-variant">
<li class="flex items-start gap-space-xs">
<span aria-hidden="true" class="text-[20px] text-primary flex-shrink-0 mt-0.5 font-symbols font-normal not-italic leading-none normal-case whitespace-nowrap [font-feature-settings:'liga'] [word-wrap:normal]">location_on</span>
<span class="">{{ $page->text('text_19') }}</span>
</li>
<li class="flex items-center gap-space-xs">
<span aria-hidden="true" class="text-[20px] text-primary flex-shrink-0 font-symbols font-normal not-italic leading-none normal-case whitespace-nowrap [font-feature-settings:'liga'] [word-wrap:normal]">call</span>
<span class="">{{ $page->text('text_20') }}</span>
</li>
<li class="flex items-center gap-space-xs">
<span aria-hidden="true" class="text-[20px] text-primary flex-shrink-0 font-symbols font-normal not-italic leading-none normal-case whitespace-nowrap [font-feature-settings:'liga'] [word-wrap:normal]">forum</span>
<span class="font-semibold text-primary">{{ $page->text('text_21') }}</span>
</li>
<li class="flex items-center gap-space-xs">
<span aria-hidden="true" class="text-[20px] text-primary flex-shrink-0 font-symbols font-normal not-italic leading-none normal-case whitespace-nowrap [font-feature-settings:'liga'] [word-wrap:normal]">mail</span>
<span class="">{{ $page->text('text_22') }}</span>
</li>
<li class="flex items-start gap-space-xs">
<span aria-hidden="true" class="text-[20px] text-secondary flex-shrink-0 mt-0.5 font-symbols font-normal not-italic leading-none normal-case whitespace-nowrap [font-feature-settings:'liga'] [word-wrap:normal]">schedule</span>
<span class="text-body-sm font-label-md">{{ $page->text('text_23') }}<br class=""/>{{ $page->text('text_24') }}</span>
</li>
</ul>
</div>
<div class="mt-space-lg pt-space-md flex flex-col gap-space-xs">
<a class="w-full inline-flex items-center justify-center gap-space-xs py-space-sm px-space-md rounded-full bg-tertiary-fixed text-primary font-label-lg text-label-lg font-bold hover:bg-tertiary-fixed-dim transition-colors shadow-sm" href="https://wa.me/6281234567890" rel="noopener" target="_blank">
<span aria-hidden="true" class="text-[18px] font-symbols font-normal not-italic leading-none normal-case whitespace-nowrap [font-feature-settings:'liga'] [word-wrap:normal]">chat</span>
<span class="">{{ $page->text('text_25') }}</span>
</a>
<a class="w-full inline-flex items-center justify-center gap-space-xs py-space-xs text-primary font-label-lg text-label-lg hover:underline" href="#peta-lokasi">
<span class="">{{ $page->text('text_26') }}</span>
<span aria-hidden="true" class="text-[16px] font-symbols font-normal not-italic leading-none normal-case whitespace-nowrap [font-feature-settings:'liga'] [word-wrap:normal]">arrow_forward</span>
</a>
</div>
</div>

<div class="flex flex-col justify-between bg-surface-container-low rounded-[2rem] p-space-lg shadow-sm hover:shadow-md transition-all duration-300">
<div class="">
<div class="flex items-center justify-between mb-space-md">
<div class="w-12 h-12 rounded-full bg-secondary text-on-secondary flex items-center justify-center shadow-sm">
<span aria-hidden="true" class="text-[26px] font-symbols font-normal not-italic leading-none normal-case whitespace-nowrap [font-feature-settings:'liga'] [word-wrap:normal]">school</span>
</div>
<span class="px-space-sm py-0.5 rounded-full bg-surface-container text-primary font-label-sm text-label-sm tracking-wider uppercase">{{ $page->text('text_27') }}</span>
</div>
<h3 class="font-headline-md text-headline-md text-primary mb-space-xs">{{ $page->text('text_28') }}</h3>
<p class="font-body-sm text-body-sm text-on-surface-variant mb-space-md">{{ $page->text('text_29') }}</p>
<ul class="space-y-space-sm font-body-md text-body-md text-on-surface-variant">
<li class="flex items-start gap-space-xs">
<span aria-hidden="true" class="text-[20px] text-secondary flex-shrink-0 mt-0.5 font-symbols font-normal not-italic leading-none normal-case whitespace-nowrap [font-feature-settings:'liga'] [word-wrap:normal]">location_on</span>
<span class="">{{ $page->text('text_30') }}</span>
</li>
<li class="flex items-center gap-space-xs">
<span aria-hidden="true" class="text-[20px] text-secondary flex-shrink-0 font-symbols font-normal not-italic leading-none normal-case whitespace-nowrap [font-feature-settings:'liga'] [word-wrap:normal]">call</span>
<span class="">{{ $page->text('text_31') }}</span>
</li>
<li class="flex items-center gap-space-xs">
<span aria-hidden="true" class="text-[20px] text-secondary flex-shrink-0 font-symbols font-normal not-italic leading-none normal-case whitespace-nowrap [font-feature-settings:'liga'] [word-wrap:normal]">call</span>
<span class="">{{ $page->text('text_32') }}</span>
</li>
<li class="flex items-center gap-space-xs">
<span aria-hidden="true" class="text-[20px] text-secondary flex-shrink-0 font-symbols font-normal not-italic leading-none normal-case whitespace-nowrap [font-feature-settings:'liga'] [word-wrap:normal]">forum</span>
<span class="font-semibold text-primary">{{ $page->text('text_33') }}</span>
</li>
<li class="flex items-start gap-space-xs">
<span aria-hidden="true" class="text-[20px] text-secondary flex-shrink-0 mt-0.5 font-symbols font-normal not-italic leading-none normal-case whitespace-nowrap [font-feature-settings:'liga'] [word-wrap:normal]">schedule</span>
<span class="text-body-sm font-label-md">{{ $page->text('text_34') }}<br class=""/>{{ $page->text('text_35') }}</span>
</li>
</ul>
</div>
<div class="mt-space-lg pt-space-md flex flex-col gap-space-xs">
<a class="w-full inline-flex items-center justify-center gap-space-xs py-space-sm px-space-md rounded-full bg-primary-container text-on-primary font-label-lg text-label-lg hover:bg-primary transition-colors shadow-sm" href="tel:+622176543210">
<span aria-hidden="true" class="text-[18px] font-symbols font-normal not-italic leading-none normal-case whitespace-nowrap [font-feature-settings:'liga'] [word-wrap:normal]">phone_in_talk</span>
<span class="">{{ $page->text('text_36') }}</span>
</a>
<a class="w-full inline-flex items-center justify-center gap-space-xs py-space-xs text-primary font-label-lg text-label-lg hover:underline" href="#peta-lokasi">
<span class="">{{ $page->text('text_37') }}</span>
<span aria-hidden="true" class="text-[16px] font-symbols font-normal not-italic leading-none normal-case whitespace-nowrap [font-feature-settings:'liga'] [word-wrap:normal]">arrow_forward</span>
</a>
</div>
</div>

<div class="flex flex-col justify-between bg-surface-container-low rounded-[2rem] p-space-lg shadow-sm hover:shadow-md transition-all duration-300">
<div class="">
<div class="flex items-center justify-between mb-space-md">
<div class="w-12 h-12 rounded-full bg-tertiary-container text-tertiary-fixed flex items-center justify-center shadow-sm">
<span aria-hidden="true" class="text-[26px] font-symbols font-normal not-italic leading-none normal-case whitespace-nowrap [font-feature-settings:'liga'] [word-wrap:normal]">biotech</span>
</div>
<span class="px-space-sm py-0.5 rounded-full bg-surface-container text-primary font-label-sm text-label-sm tracking-wider uppercase">{{ $page->text('text_38') }}</span>
</div>
<h3 class="font-headline-md text-headline-md text-primary mb-space-xs">{{ $page->text('text_39') }}</h3>
<p class="font-body-sm text-body-sm text-on-surface-variant mb-space-md">{{ $page->text('text_40') }}</p>
<ul class="space-y-space-sm font-body-md text-body-md text-on-surface-variant">
<li class="flex items-start gap-space-xs">
<span aria-hidden="true" class="text-[20px] text-primary flex-shrink-0 mt-0.5 font-symbols font-normal not-italic leading-none normal-case whitespace-nowrap [font-feature-settings:'liga'] [word-wrap:normal]">location_on</span>
<span class="">{{ $page->text('text_41') }}</span>
</li>
<li class="flex items-center gap-space-xs">
<span aria-hidden="true" class="text-[20px] text-primary flex-shrink-0 font-symbols font-normal not-italic leading-none normal-case whitespace-nowrap [font-feature-settings:'liga'] [word-wrap:normal]">call</span>
<span class="">{{ $page->text('text_42') }}</span>
</li>
<li class="flex items-center gap-space-xs">
<span aria-hidden="true" class="text-[20px] text-primary flex-shrink-0 font-symbols font-normal not-italic leading-none normal-case whitespace-nowrap [font-feature-settings:'liga'] [word-wrap:normal]">forum</span>
<span class="font-semibold text-primary">{{ $page->text('text_43') }}</span>
</li>
<li class="flex items-center gap-space-xs">
<span aria-hidden="true" class="text-[20px] text-primary flex-shrink-0 font-symbols font-normal not-italic leading-none normal-case whitespace-nowrap [font-feature-settings:'liga'] [word-wrap:normal]">mail</span>
<span class="">{{ $page->text('text_44') }}</span>
</li>
<li class="flex items-start gap-space-xs">
<span aria-hidden="true" class="text-[20px] text-secondary flex-shrink-0 mt-0.5 font-symbols font-normal not-italic leading-none normal-case whitespace-nowrap [font-feature-settings:'liga'] [word-wrap:normal]">schedule</span>
<span class="text-body-sm font-label-md">{{ $page->text('text_45') }}<br class=""/>{{ $page->text('text_46') }}</span>
</li>
</ul>
</div>
<div class="mt-space-lg pt-space-md flex flex-col gap-space-xs">
<a class="w-full inline-flex items-center justify-center gap-space-xs py-space-sm px-space-md rounded-full bg-primary-container text-on-primary font-label-lg text-label-lg hover:bg-primary transition-colors shadow-sm" href="https://wa.me/6281122334455" rel="noopener" target="_blank">
<span aria-hidden="true" class="text-[18px] font-symbols font-normal not-italic leading-none normal-case whitespace-nowrap [font-feature-settings:'liga'] [word-wrap:normal]">psychology</span>
<span class="">{{ $page->text('text_47') }}</span>
</a>
<a class="w-full inline-flex items-center justify-center gap-space-xs py-space-xs text-primary font-label-lg text-label-lg hover:underline" href="#peta-lokasi">
<span class="">{{ $page->text('text_48') }}</span>
<span aria-hidden="true" class="text-[16px] font-symbols font-normal not-italic leading-none normal-case whitespace-nowrap [font-feature-settings:'liga'] [word-wrap:normal]">arrow_forward</span>
</a>
</div>
</div>
</div>
</div>
</section>

<section class="py-space-xl bg-surface-container">
<div class="max-w-7xl mx-auto px-gutter">
<div class="grid grid-cols-1 lg:grid-cols-12 gap-gutter items-start">

<div class="lg:col-span-7 bg-surface-container-lowest p-space-lg sm:p-space-xl rounded-[3rem] shadow-md">
<div class="mb-space-md">
<span class="font-label-sm text-label-sm text-secondary uppercase tracking-wider block mb-1">{{ $page->text('text_49') }}</span>
<h2 class="font-headline-lg text-headline-lg text-primary">{{ $page->text('text_50') }}</h2>
<p class="font-body-md text-body-md text-on-surface-variant mt-1">{{ $page->text('text_51') }}</p>
</div>
<x-inquiry-form />
</div>

<div class="lg:col-span-5 flex flex-col gap-space-md">
<div class="bg-surface-container-lowest rounded-[3rem] overflow-hidden shadow-md">
<img alt="Modern security gate and lush botanical tree pathway at the entrance of Yayasan Harapan Mulia school complex in Cilandak Jakarta, clean aesthetic, security personnel assisting guests cordially, bright morning sunshine" class="w-full h-52 object-cover" decoding="async" loading="lazy" src="{{ $page->media('image_2') }}"/>
<div class="p-space-lg">
<div class="flex items-center gap-space-xs text-primary mb-2">
<span aria-hidden="true" class="text-[22px] font-symbols font-normal not-italic leading-none normal-case whitespace-nowrap [font-feature-settings:'liga'] [word-wrap:normal]">directions_walk</span>
<h3 class="font-headline-sm text-headline-sm">{{ $page->text('text_52') }}</h3>
</div>
<p class="font-body-sm text-body-sm text-on-surface-variant mb-space-md leading-relaxed">{{ $page->text('text_53') }}</p>
<div class="space-y-space-sm font-body-md text-body-md text-on-surface-variant">
<div class="flex items-start gap-space-sm p-space-sm rounded-[1rem] bg-surface-container-low">
<div class="w-6 h-6 rounded-full bg-primary text-on-primary flex items-center justify-center font-label-sm text-label-sm flex-shrink-0 mt-0.5">{{ $page->text('text_54') }}</div>
<p class="text-body-sm leading-snug"><strong class="text-primary font-semibold">{{ $page->text('text_55') }}</strong>{{ $page->text('text_56') }}</p>
</div>
<div class="flex items-start gap-space-sm p-space-sm rounded-[1rem] bg-surface-container-low">
<div class="w-6 h-6 rounded-full bg-primary text-on-primary flex items-center justify-center font-label-sm text-label-sm flex-shrink-0 mt-0.5">{{ $page->text('text_57') }}</div>
<p class="text-body-sm leading-snug"><strong class="text-primary font-semibold">{{ $page->text('text_58') }}</strong>{{ $page->text('text_59') }}</p>
</div>
<div class="flex items-start gap-space-sm p-space-sm rounded-[1rem] bg-surface-container-low">
<div class="w-6 h-6 rounded-full bg-primary text-on-primary flex items-center justify-center font-label-sm text-label-sm flex-shrink-0 mt-0.5">{{ $page->text('text_60') }}</div>
<p class="text-body-sm leading-snug"><strong class="text-primary font-semibold">{{ $page->text('text_61') }}</strong>{{ $page->text('text_62') }}</p>
</div>
<div class="flex items-start gap-space-sm p-space-sm rounded-[1rem] bg-surface-container-low">
<div class="w-6 h-6 rounded-full bg-primary text-on-primary flex items-center justify-center font-label-sm text-label-sm flex-shrink-0 mt-0.5">{{ $page->text('text_63') }}</div>
<p class="text-body-sm leading-snug"><strong class="text-primary font-semibold">{{ $page->text('text_64') }}</strong>{{ $page->text('text_65') }}</p>
</div>
<div class="flex items-start gap-space-sm p-space-sm rounded-[1rem] bg-surface-container-low">
<div class="w-6 h-6 rounded-full bg-primary text-on-primary flex items-center justify-center font-label-sm text-label-sm flex-shrink-0 mt-0.5">{{ $page->text('text_66') }}</div>
<p class="text-body-sm leading-snug"><strong class="text-primary font-semibold">{{ $page->text('text_67') }}</strong>{{ $page->text('text_68') }}</p>
</div>
</div>
</div>
</div>

<div class="bg-primary text-on-primary rounded-[3rem] p-space-md shadow-sm flex items-center justify-between">
<div class="flex items-center gap-space-sm">
<div class="w-10 h-10 rounded-full bg-tertiary-fixed text-primary flex items-center justify-center flex-shrink-0">
<span aria-hidden="true" class="text-[22px] font-symbols font-normal not-italic leading-none normal-case whitespace-nowrap [font-feature-settings:'liga'] [word-wrap:normal]">contact_phone</span>
</div>
<div class="">
<p class="font-label-md text-label-md text-primary-fixed uppercase tracking-wider">{{ $page->text('text_69') }}</p>
<p class="font-headline-sm text-headline-sm leading-none mt-0.5">{{ $page->text('text_70') }}</p>
</div>
</div>
<a class="px-space-md py-space-xs rounded-full bg-surface-container-lowest text-primary font-label-md text-label-md font-bold hover:bg-surface-container transition-colors shadow-sm" href="tel:+622112345678">{{ $page->text('text_71') }}</a>
</div>
</div>
</div>
</div>
</section>

<section class="py-space-xl bg-surface-container-lowest" id="peta-lokasi">
<div class="max-w-7xl mx-auto px-gutter">
<div class="text-center max-w-3xl mx-auto mb-space-lg">
<span class="font-label-sm text-label-sm text-secondary uppercase tracking-widest block mb-space-xs">{{ $page->text('text_72') }}</span>
<h2 class="font-headline-xl text-headline-xl text-primary tracking-tight">{{ $page->text('text_73') }}</h2>
<p class="font-body-lg text-body-lg text-on-surface-variant mt-2">{{ $page->text('text_74') }}</p>
</div>

<div class="relative rounded-[3rem] overflow-hidden shadow-md mb-space-lg">

<div class="w-full h-96 sm:h-[460px] bg-cover bg-center relative relative isolate" data-location="Jl. Pendidikan No. 1, Cilandak, Jakarta Selatan 12545"><img class="absolute inset-0 w-full h-full object-cover -z-10" src="{{ $page->media('image_3') }}"/>
<div class="absolute inset-0 bg-primary/10 pointer-events-none"></div>

<div class="absolute top-8 left-8 max-w-xs p-space-md rounded-[2rem] bg-surface-container-lowest/95 backdrop-blur-md shadow-md">
<div class="flex items-center gap-space-xs text-primary mb-1">
<span aria-hidden="true" class="text-[20px] text-primary font-symbols font-normal not-italic leading-none normal-case whitespace-nowrap [font-feature-settings:'liga'] [word-wrap:normal]">pin_drop</span>
<span class="font-label-lg text-label-lg font-bold">{{ $page->text('text_75') }}</span>
</div>
<p class="font-body-sm text-body-sm text-on-surface-variant mb-space-xs leading-snug">{{ $page->text('text_76') }}</p>
<a class="inline-flex items-center gap-1 font-label-sm text-label-sm font-bold text-secondary hover:text-primary" href="https://maps.google.com" rel="noopener" target="_blank">
<span class="">{{ $page->text('text_77') }}</span>
<span aria-hidden="true" class="text-[14px] font-symbols font-normal not-italic leading-none normal-case whitespace-nowrap [font-feature-settings:'liga'] [word-wrap:normal]">open_in_new</span>
</a>
</div>

<div class="absolute bottom-4 left-4 right-4 hidden md:flex items-center justify-between gap-space-sm p-space-sm bg-surface-container-lowest/90 backdrop-blur-md rounded-[1rem] shadow-sm">
<div class="flex items-center gap-space-xs">
<span aria-hidden="true" class="text-[18px] text-primary font-symbols font-normal not-italic leading-none normal-case whitespace-nowrap [font-feature-settings:'liga'] [word-wrap:normal]">directions_subway</span>
<span class="font-body-sm text-body-sm text-on-surface"><strong class="">{{ $page->text('text_78') }}</strong>{{ $page->text('text_79') }}</span>
</div>
<div class="flex items-center gap-space-xs">
<span aria-hidden="true" class="text-[18px] text-primary font-symbols font-normal not-italic leading-none normal-case whitespace-nowrap [font-feature-settings:'liga'] [word-wrap:normal]">directions_bus</span>
<span class="font-body-sm text-body-sm text-on-surface"><strong class="">{{ $page->text('text_80') }}</strong>{{ $page->text('text_81') }}</span>
</div>
<div class="flex items-center gap-space-xs">
<span aria-hidden="true" class="text-[18px] text-primary font-symbols font-normal not-italic leading-none normal-case whitespace-nowrap [font-feature-settings:'liga'] [word-wrap:normal]">directions_car</span>
<span class="font-body-sm text-body-sm text-on-surface"><strong class="">{{ $page->text('text_82') }}</strong>{{ $page->text('text_83') }}</span>
</div>
</div>
</div>
</div>

<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-gutter">

<div class="p-space-md rounded-[2rem] bg-surface-container-low shadow-sm flex flex-col justify-between">
<div class="">
<div class="w-10 h-10 rounded-full bg-surface-container text-primary flex items-center justify-center mb-space-sm">
<span aria-hidden="true" class="text-[22px] font-symbols font-normal not-italic leading-none normal-case whitespace-nowrap [font-feature-settings:'liga'] [word-wrap:normal]">subway</span>
</div>
<h3 class="font-headline-sm text-headline-sm text-primary mb-1">{{ $page->text('text_84') }}</h3>
<p class="font-body-sm text-body-sm text-on-surface-variant leading-relaxed mb-space-sm">{{ $page->text('text_85') }}<strong class="">{{ $page->text('text_86') }}</strong>{{ $page->text('text_87') }}<strong class="">{{ $page->text('text_88') }}</strong>{{ $page->text('text_89') }}</p>
</div>
<span class="font-label-sm text-label-sm text-secondary font-bold">{{ $page->text('text_90') }}</span>
</div>

<div class="p-space-md rounded-[2rem] bg-surface-container-low shadow-sm flex flex-col justify-between">
<div class="">
<div class="w-10 h-10 rounded-full bg-surface-container text-primary flex items-center justify-center mb-space-sm">
<span aria-hidden="true" class="text-[22px] font-symbols font-normal not-italic leading-none normal-case whitespace-nowrap [font-feature-settings:'liga'] [word-wrap:normal]">directions_bus</span>
</div>
<h3 class="font-headline-sm text-headline-sm text-primary mb-1">{{ $page->text('text_91') }}</h3>
<p class="font-body-sm text-body-sm text-on-surface-variant leading-relaxed mb-space-sm">{{ $page->text('text_92') }}<strong class="">{{ $page->text('text_93') }}</strong>{{ $page->text('text_94') }}</p>
</div>
<span class="font-label-sm text-label-sm text-secondary font-bold">{{ $page->text('text_95') }}</span>
</div>

<div class="p-space-md rounded-[2rem] bg-surface-container-low shadow-sm flex flex-col justify-between">
<div class="">
<div class="w-10 h-10 rounded-full bg-surface-container text-primary flex items-center justify-center mb-space-sm">
<span aria-hidden="true" class="text-[22px] font-symbols font-normal not-italic leading-none normal-case whitespace-nowrap [font-feature-settings:'liga'] [word-wrap:normal]">directions_car</span>
</div>
<h3 class="font-headline-sm text-headline-sm text-primary mb-1">{{ $page->text('text_96') }}</h3>
<p class="font-body-sm text-body-sm text-on-surface-variant leading-relaxed mb-space-sm">{{ $page->text('text_97') }}<strong class="">{{ $page->text('text_98') }}</strong>{{ $page->text('text_99') }}</p>
</div>
<span class="font-label-sm text-label-sm text-secondary font-bold">{{ $page->text('text_100') }}</span>
</div>

<div class="p-space-md rounded-[2rem] bg-surface-container-low shadow-sm flex flex-col justify-between">
<div class="">
<div class="w-10 h-10 rounded-full bg-surface-container text-primary flex items-center justify-center mb-space-sm">
<span aria-hidden="true" class="text-[22px] font-symbols font-normal not-italic leading-none normal-case whitespace-nowrap [font-feature-settings:'liga'] [word-wrap:normal]">navigation</span>
</div>
<h3 class="font-headline-sm text-headline-sm text-primary mb-1">{{ $page->text('text_101') }}</h3>
<p class="font-body-sm text-body-sm text-on-surface-variant leading-relaxed mb-space-sm">{{ $page->text('text_102') }}</p>
</div>
<span class="font-label-sm text-label-sm text-secondary font-bold">{{ $page->text('text_103') }}</span>
</div>
</div>
</div>
</section>

<section class="py-space-lg bg-surface-container-low">
<div class="max-w-7xl mx-auto px-gutter">
<div class="p-space-lg rounded-[3rem] bg-surface-container-lowest shadow-sm flex flex-col md:flex-row items-center justify-between gap-space-md">
<div class="flex items-start gap-space-md max-w-3xl">
<div class="w-12 h-12 rounded-full bg-secondary-container text-primary flex items-center justify-center flex-shrink-0 mt-1">
<span aria-hidden="true" class="text-[24px] font-symbols font-normal not-italic leading-none normal-case whitespace-nowrap [font-feature-settings:'liga'] [word-wrap:normal]">verified</span>
</div>
<div class="">
<h3 class="font-headline-sm text-headline-sm text-primary">{{ $page->text('text_104') }}</h3>
<p class="font-body-sm text-body-sm text-on-surface-variant mt-1 leading-relaxed">{{ $page->text('text_105') }}</p>
</div>
</div>
<div class="flex items-center gap-space-sm flex-shrink-0">
<a class="inline-flex items-center gap-space-xs px-space-md py-space-xs rounded-full bg-surface-container-high text-primary font-label-md text-label-md font-bold hover:bg-surface-container transition-colors shadow-sm" href="mailto:integritas@harapanmulia.sch.id">
<span aria-hidden="true" class="text-[16px] font-symbols font-normal not-italic leading-none normal-case whitespace-nowrap [font-feature-settings:'liga'] [word-wrap:normal]">mail</span>
<span class="">{{ $page->text('text_106') }}</span>
</a>
</div>
</div>
</div>
</section>
</div>
</main>
@endsection
