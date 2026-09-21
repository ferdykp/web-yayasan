@extends('layouts.public')
@section('content')
<main class="pt-20 min-h-screen" id="main-content"><div class="flex flex-col w-full">

<section class="relative bg-surface-container-lowest py-space-xl overflow-hidden">
<div class="max-w-7xl mx-auto px-gutter relative z-10">
<div class="max-w-4xl">
<div class="inline-flex items-center gap-space-xs px-space-md py-1.5 rounded-full bg-secondary-container/60 text-primary font-label-sm text-label-sm tracking-wider uppercase mb-space-md">
<span class="w-2 h-2 rounded-full bg-primary animate-pulse"></span>{{ $page->text('text_1') }}</div>
<h1 class="font-headline-2xl text-headline-2xl text-primary font-serif tracking-tight leading-tight mb-space-md">{{ $page->text('text_2') }}</h1>
<p class="font-body-xl text-body-xl text-on-surface-variant max-w-3xl leading-relaxed">{{ $page->text('text_3') }}</p>
</div>

<div class="mt-space-xl flex flex-col lg:flex-row lg:items-center justify-between gap-space-md pt-space-md">



<div class="relative w-full lg:w-80 flex-shrink-0">
<span aria-hidden="true" class="absolute left-4 top-1/2 -translate-y-1/2 text-secondary text-[20px] pointer-events-none font-symbols font-normal not-italic leading-none normal-case whitespace-nowrap [font-feature-settings:'liga'] [word-wrap:normal]">search</span>

</div>
</div>
</div>
</section>

<section class="max-w-7xl mx-auto px-gutter my-space-xl w-full">
<div class="relative rounded-[2rem] bg-surface-container-low overflow-hidden shadow-md group hover:shadow-xl transition-shadow duration-300">
<div class="grid grid-cols-1 lg:grid-cols-12 items-stretch">

<div class="lg:col-span-7 relative min-h-[380px] lg:min-h-[500px] overflow-hidden">
<img alt="High school students wearing neat modern academic uniforms gathered around a precision biochemistry workbench, illuminated by warm morning sun filtering through floor-to-ceiling glass windows of an architectural library-laboratory. The setting has biophilic indoor plants and chalkboard equations, rendered in an authentic editorial documentary photography style with deep forest green tones." class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700 ease-out" decoding="async" fetchpriority="high" loading="eager" src="{{ $page->media('image_1') }}"/>
<div class="absolute inset-0 bg-gradient-to-t from-primary/80 via-transparent to-transparent lg:hidden"></div>

<div class="absolute top-6 left-6 inline-flex items-center gap-2 px-space-md py-2 rounded-full bg-surface-container-lowest/95 backdrop-blur-md shadow-sm">
<span aria-hidden="true" class="text-[18px] text-primary font-symbols font-normal not-italic leading-none normal-case whitespace-nowrap [font-feature-settings:'liga'] [word-wrap:normal]">auto_stories</span>
<span class="font-label-sm text-label-sm font-bold text-primary tracking-wide uppercase">{{ $page->text('text_4') }}</span>
</div>
<div class="absolute bottom-6 left-6 right-6 lg:hidden text-on-primary">
<span class="font-label-sm text-label-sm text-tertiary-fixed block mb-1">{{ $page->text('text_5') }}</span>
<h3 class="font-headline-md text-headline-md font-serif text-on-primary leading-snug">{{ $page->text('text_6') }}</h3>
</div>
</div>

<div class="lg:col-span-5 p-space-lg lg:p-space-xl flex flex-col justify-between bg-surface-container-low">
<div class="">
<div class="hidden lg:flex items-center gap-space-sm text-secondary font-label-md text-label-md mb-space-md">
<span class="flex items-center gap-1">
<span aria-hidden="true" class="text-[16px] font-symbols font-normal not-italic leading-none normal-case whitespace-nowrap [font-feature-settings:'liga'] [word-wrap:normal]">schedule</span>{{ $page->text('text_7') }}</span>
<span class="">{{ $page->text('text_8') }}</span>
<span class="">{{ $page->text('text_9') }}</span>
</div>
<h2 class="font-headline-lg text-headline-lg font-serif text-primary leading-snug mb-space-md">{{ $page->text('text_10') }}</h2>
<p class="font-body-lg text-body-lg text-on-surface-variant leading-relaxed mb-space-lg">{{ $page->text('text_11') }}</p>
</div>
<div class="pt-space-md border-t border-secondary-container flex flex-col sm:flex-row sm:items-center justify-between gap-space-md">
<div class="flex items-center gap-space-sm">
<div class="w-11 h-11 rounded-full bg-primary-container text-tertiary-fixed flex items-center justify-center font-serif text-headline-sm font-bold shadow-inner">{{ $page->text('text_12') }}</div>
<div class="flex flex-col">
<span class="font-label-lg text-label-lg font-bold text-primary">{{ $page->text('text_13') }}</span>
<span class="font-body-sm text-body-sm text-secondary">{{ $page->text('text_14') }}</span>
</div>
</div>
<a class="inline-flex items-center justify-center gap-space-xs px-space-lg py-3 rounded-full bg-primary-container text-on-primary font-label-lg text-label-lg font-bold hover:bg-primary transition-all duration-200 shadow-sm group-hover:scale-[1.02] flex-shrink-0" href="#baca-liputan-khusus">
<span class="">{{ $page->text('text_15') }}</span>
<span aria-hidden="true" class="text-[18px] transition-transform duration-200 group-hover:translate-x-1 font-symbols font-normal not-italic leading-none normal-case whitespace-nowrap [font-feature-settings:'liga'] [word-wrap:normal]">arrow_forward</span>
</a>
</div>
</div>
</div>
</div>
</section>

<section class="max-w-7xl mx-auto px-gutter my-space-xl w-full">

<div class="flex flex-col sm:flex-row sm:items-end justify-between gap-space-md mb-space-lg pb-space-sm border-b border-surface-container">
<div class="">
<span class="font-label-sm text-label-sm uppercase tracking-widest text-secondary font-bold block mb-1">{{ $page->text('text_16') }}</span>
<h3 class="font-headline-xl text-headline-xl font-serif text-primary">{{ $page->text('text_17') }}</h3>
</div>
<div class="flex items-center gap-2 text-on-surface-variant font-label-md text-label-md bg-surface-container-low px-4 py-2 rounded-full">
<span aria-hidden="true" class="text-primary text-[18px] font-symbols font-normal not-italic leading-none normal-case whitespace-nowrap [font-feature-settings:'liga'] [word-wrap:normal]">newspaper</span>
<span class="" id="article-count-label">{{ $page->text('text_18') }}</span>
</div>
</div>

<x-content-filters :categories="$categories" /><div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-gutter" id="koleksi">












@foreach($items as $item)
<x-news-card :item="$item" />
@endforeach</div><div class="my-8">{{ $items->withQueryString()->links() }}</div>


</section>

<section class="max-w-7xl mx-auto px-gutter my-space-xl w-full">
<div class="rounded-[3rem] bg-surface-container p-space-lg lg:p-space-xl shadow-sm">
<div class="grid grid-cols-1 lg:grid-cols-12 gap-gutter items-center">

<div class="lg:col-span-4">
<div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-surface-container-lowest text-primary font-label-sm text-label-sm font-bold uppercase tracking-wider mb-space-sm">
<span aria-hidden="true" class="text-[16px] font-symbols font-normal not-italic leading-none normal-case whitespace-nowrap [font-feature-settings:'liga'] [word-wrap:normal]">menu_book</span>{{ $page->text('text_19') }}</div>
<h3 class="font-headline-lg text-headline-lg font-serif text-primary leading-tight mb-space-sm">{{ $page->text('text_20') }}</h3>
<p class="font-body-md text-body-md text-on-surface-variant leading-relaxed mb-space-md">{{ $page->text('text_21') }}</p>

<div class="inline-flex items-center gap-2 font-label-sm text-label-sm text-secondary bg-surface-container-lowest/70 px-space-md py-2 rounded-full">
<span aria-hidden="true" class="text-[18px] text-primary font-symbols font-normal not-italic leading-none normal-case whitespace-nowrap [font-feature-settings:'liga'] [word-wrap:normal]">verified</span>{{ $page->text('text_22') }}</div>
</div>

<div class="lg:col-span-8 flex flex-col gap-space-sm">

<div class="flex flex-col sm:flex-row sm:items-center justify-between p-space-md bg-surface-container-lowest rounded-[1rem] hover:shadow-md transition-all duration-200 gap-space-sm">
<div class="flex items-center gap-space-md">
<div class="w-12 h-12 rounded-[2rem] bg-surface-container flex items-center justify-center text-primary flex-shrink-0">
<span aria-hidden="true" class="text-[26px] font-symbols font-normal not-italic leading-none normal-case whitespace-nowrap [font-feature-settings:'liga'] [word-wrap:normal]">picture_as_pdf</span>
</div>
<div class="flex flex-col min-w-0">
<span class="font-label-sm text-label-sm text-secondary font-bold uppercase tracking-wider">{{ $page->text('text_23') }}</span>
<span class="font-headline-sm text-headline-sm font-serif text-primary truncate max-w-sm sm:max-w-md">{{ $page->text('text_24') }}</span>
<span class="font-body-sm text-body-sm text-outline">{{ $page->text('text_25') }}</span>
</div>
</div>
<a class="inline-flex items-center justify-center gap-space-xs px-space-md py-2.5 rounded-full bg-primary text-on-primary font-label-md text-label-md hover:bg-primary-container transition-all flex-shrink-0 shadow-sm" href="#unduh-q1-2026">
<span aria-hidden="true" class="text-[18px] font-symbols font-normal not-italic leading-none normal-case whitespace-nowrap [font-feature-settings:'liga'] [word-wrap:normal]">download</span>
<span class="">{{ $page->text('text_26') }}</span>
</a>
</div>

<div class="flex flex-col sm:flex-row sm:items-center justify-between p-space-md bg-surface-container-lowest rounded-[1rem] hover:shadow-md transition-all duration-200 gap-space-sm">
<div class="flex items-center gap-space-md">
<div class="w-12 h-12 rounded-[2rem] bg-surface-container flex items-center justify-center text-primary flex-shrink-0">
<span aria-hidden="true" class="text-[26px] font-symbols font-normal not-italic leading-none normal-case whitespace-nowrap [font-feature-settings:'liga'] [word-wrap:normal]">science</span>
</div>
<div class="flex flex-col min-w-0">
<span class="font-label-sm text-label-sm text-secondary font-bold uppercase tracking-wider">{{ $page->text('text_27') }}</span>
<span class="font-headline-sm text-headline-sm font-serif text-primary truncate max-w-sm sm:max-w-md">{{ $page->text('text_28') }}</span>
<span class="font-body-sm text-body-sm text-outline">{{ $page->text('text_29') }}</span>
</div>
</div>
<a class="inline-flex items-center justify-center gap-space-xs px-space-md py-2.5 rounded-full bg-primary text-on-primary font-label-md text-label-md hover:bg-primary-container transition-all flex-shrink-0 shadow-sm" href="#unduh-capstone-2025">
<span aria-hidden="true" class="text-[18px] font-symbols font-normal not-italic leading-none normal-case whitespace-nowrap [font-feature-settings:'liga'] [word-wrap:normal]">download</span>
<span class="">{{ $page->text('text_30') }}</span>
</a>
</div>

<div class="flex flex-col sm:flex-row sm:items-center justify-between p-space-md bg-surface-container-lowest rounded-[1rem] hover:shadow-md transition-all duration-200 gap-space-sm">
<div class="flex items-center gap-space-md">
<div class="w-12 h-12 rounded-[2rem] bg-surface-container flex items-center justify-center text-primary flex-shrink-0">
<span aria-hidden="true" class="text-[26px] font-symbols font-normal not-italic leading-none normal-case whitespace-nowrap [font-feature-settings:'liga'] [word-wrap:normal]">energy_savings_leaf</span>
</div>
<div class="flex flex-col min-w-0">
<span class="font-label-sm text-label-sm text-secondary font-bold uppercase tracking-wider">{{ $page->text('text_31') }}</span>
<span class="font-headline-sm text-headline-sm font-serif text-primary truncate max-w-sm sm:max-w-md">{{ $page->text('text_32') }}</span>
<span class="font-body-sm text-body-sm text-outline">{{ $page->text('text_33') }}</span>
</div>
</div>
<a class="inline-flex items-center justify-center gap-space-xs px-space-md py-2.5 rounded-full bg-primary text-on-primary font-label-md text-label-md hover:bg-primary-container transition-all flex-shrink-0 shadow-sm" href="#unduh-annual-report">
<span aria-hidden="true" class="text-[18px] font-symbols font-normal not-italic leading-none normal-case whitespace-nowrap [font-feature-settings:'liga'] [word-wrap:normal]">download</span>
<span class="">{{ $page->text('text_34') }}</span>
</a>
</div>
</div>
</div>
</div>
</section>

<section class="max-w-7xl mx-auto px-gutter my-space-xl pb-space-lg w-full">
<div class="relative rounded-[2rem] bg-primary-container text-on-primary p-space-xl lg:p-14 overflow-hidden shadow-xl">

<div class="absolute -right-24 -bottom-24 w-96 h-96 rounded-full bg-tertiary-fixed/10 blur-3xl pointer-events-none"></div>
<div class="absolute -left-12 -top-12 w-64 h-64 rounded-full bg-secondary-fixed-dim/10 blur-2xl pointer-events-none"></div>
<div class="relative z-10 max-w-3xl mx-auto text-center flex flex-col items-center">
<div class="w-14 h-14 rounded-full bg-surface-container-lowest/10 flex items-center justify-center text-tertiary-fixed mb-space-md">
<span aria-hidden="true" class="text-[28px] font-symbols font-normal not-italic leading-none normal-case whitespace-nowrap [font-feature-settings:'liga'] [word-wrap:normal]">mark_email_read</span>
</div>
<h3 class="font-headline-xl text-headline-xl font-serif text-on-primary leading-tight mb-space-xs">{{ $page->text('text_35') }}</h3>
<p class="font-body-lg text-body-lg text-primary-fixed leading-relaxed mb-space-xl max-w-2xl">{{ $page->text('text_36') }}</p>

<x-newsletter-form />

<div class="flex items-center gap-2 mt-space-md text-on-primary-container font-body-sm text-body-sm">
<span aria-hidden="true" class="text-[16px] text-tertiary-fixed font-symbols font-normal not-italic leading-none normal-case whitespace-nowrap [font-feature-settings:'liga'] [word-wrap:normal]">shield</span>
<span class="">{{ $page->text('text_37') }}</span>
</div>


</div>
</div>
</section>
</div>

</main>
@endsection
