@extends('layouts.public')
@section('content')
<main class="pt-20" id="main-content">
<div class="flex flex-col w-full">

<section class="relative w-full max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-space-xl lg:py-24">
<div class="grid grid-cols-1 lg:grid-cols-12 gap-space-lg items-end">

<div class="lg:col-span-8 flex flex-col items-start">
<div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-surface-container-high text-primary font-label-sm uppercase tracking-widest mb-space-md">
<span class="w-2 h-2 rounded-full bg-primary animate-pulse"></span>
<span class="">{{ $page->text('text_1') }}</span>
</div>
<h1 class="font-headline-2xl text-headline-2xl text-primary tracking-tight leading-[1.08] max-w-3xl">{{ $page->text('text_2') }}</h1>
<p class="mt-space-md font-body-xl text-body-xl text-on-surface-variant max-w-2xl leading-relaxed">{{ $page->text('text_3') }}</p>
</div>

<div class="lg:col-span-4 flex flex-col lg:items-end justify-end">
<div class="w-full sm:w-auto p-space-md rounded-[2rem] bg-surface-container-lowest shadow-sm flex items-center justify-between gap-space-lg">
<div class="">
<span class="font-headline-lg text-headline-lg text-primary block leading-none">{{ $page->text('text_4') }}</span>
<span class="font-body-sm text-body-sm text-on-surface-variant">{{ $page->text('text_5') }}</span>
</div>
<div class="h-10 w-px bg-outline-variant/40"></div>
<div class="">
<span class="font-headline-lg text-headline-lg text-primary block leading-none">{{ $page->text('text_6') }}</span>
<span class="font-body-sm text-body-sm text-on-surface-variant">{{ $page->text('text_7') }}</span>
</div>
</div>
</div>
</div>
</section>

<section class="w-full max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pb-space-xl lg:pb-28">
<div class="flex flex-col gap-space-xl">

<article class="group relative rounded-[3rem] bg-surface-container-lowest overflow-hidden shadow-sm transition-all duration-300 hover:shadow-md">
<div class="grid grid-cols-1 lg:grid-cols-12">

<div class="lg:col-span-5 relative min-h-[340px] lg:min-h-full overflow-hidden">
<img alt="Elementary students of SD Harapan Mulia in clean crisp uniforms sitting around a wooden collaborative table in a sunlit classroom, smiling genuinely while engaging in hands-on science and art project, lush biophilic indoor plants and warm botanical daylight, shot in refined editorial documentary photography style." class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105" decoding="async" fetchpriority="high" loading="eager" src="{{ $page->media('image_1') }}"/>

<div class="absolute bottom-4 left-4 bg-surface-container-low/95 backdrop-blur-md rounded-[2rem] px-4 py-3 shadow-sm max-w-[240px]">
<span class="font-headline-sm italic text-headline-sm text-primary block leading-tight">{{ $page->text('text_8') }}</span>
<span class="font-label-sm text-label-sm text-secondary uppercase tracking-wider mt-1 block">{{ $page->text('text_9') }}</span>
</div>
</div>

<div class="lg:col-span-7 p-6 sm:p-8 lg:p-12 flex flex-col justify-between">
<div class="">

<div class="flex flex-wrap items-center gap-space-xs mb-space-sm">
<span class="px-3 py-1 rounded-full bg-secondary-container text-on-secondary-fixed font-label-sm text-label-sm font-bold uppercase tracking-wider">{{ $page->text('text_10') }}</span>
<span class="px-3 py-1 rounded-full bg-surface-container-high text-primary font-label-sm text-label-sm font-semibold">{{ $page->text('text_11') }}</span>
<span class="text-secondary font-label-sm text-label-sm">{{ $page->text('text_12') }}</span>
</div>
<h2 class="font-headline-xl text-headline-xl text-primary tracking-tight">{{ $page->text('text_13') }}</h2>
<p class="font-headline-sm text-headline-sm italic text-secondary mt-1">{{ $page->text('text_14') }}</p>
<p class="font-body-lg text-body-lg text-on-surface-variant mt-space-md leading-relaxed">{{ $page->text('text_15') }}<em class="">{{ $page->text('text_16') }}</em>{{ $page->text('text_17') }}</p>

<div class="grid grid-cols-1 sm:grid-cols-2 gap-space-sm mt-space-lg">
<div class="p-3.5 rounded-[1rem] bg-surface-container-low flex items-start gap-3">
<div class="w-8 h-8 rounded-full bg-surface-container-lowest text-primary flex items-center justify-center flex-shrink-0 shadow-sm">
<span aria-hidden="true" class="text-[18px] font-symbols font-normal not-italic leading-none normal-case whitespace-nowrap [font-feature-settings:'liga'] [word-wrap:normal]">translate</span>
</div>
<div class="">
<h3 class="font-label-lg text-label-lg font-bold text-primary">{{ $page->text('text_18') }}</h3>
<p class="font-body-sm text-body-sm text-on-surface-variant">{{ $page->text('text_19') }}</p>
</div>
</div>
<div class="p-3.5 rounded-[1rem] bg-surface-container-low flex items-start gap-3">
<div class="w-8 h-8 rounded-full bg-surface-container-lowest text-primary flex items-center justify-center flex-shrink-0 shadow-sm">
<span aria-hidden="true" class="text-[18px] font-symbols font-normal not-italic leading-none normal-case whitespace-nowrap [font-feature-settings:'liga'] [word-wrap:normal]">nature_people</span>
</div>
<div class="">
<h3 class="font-label-lg text-label-lg font-bold text-primary">{{ $page->text('text_20') }}</h3>
<p class="font-body-sm text-body-sm text-on-surface-variant">{{ $page->text('text_21') }}</p>
</div>
</div>
<div class="p-3.5 rounded-[1rem] bg-surface-container-low flex items-start gap-3">
<div class="w-8 h-8 rounded-full bg-surface-container-lowest text-primary flex items-center justify-center flex-shrink-0 shadow-sm">
<span aria-hidden="true" class="text-[18px] font-symbols font-normal not-italic leading-none normal-case whitespace-nowrap [font-feature-settings:'liga'] [word-wrap:normal]">favorite</span>
</div>
<div class="">
<h3 class="font-label-lg text-label-lg font-bold text-primary">{{ $page->text('text_22') }}</h3>
<p class="font-body-sm text-body-sm text-on-surface-variant">{{ $page->text('text_23') }}</p>
</div>
</div>
<div class="p-3.5 rounded-[1rem] bg-surface-container-low flex items-start gap-3">
<div class="w-8 h-8 rounded-full bg-surface-container-lowest text-primary flex items-center justify-center flex-shrink-0 shadow-sm">
<span aria-hidden="true" class="text-[18px] font-symbols font-normal not-italic leading-none normal-case whitespace-nowrap [font-feature-settings:'liga'] [word-wrap:normal]">auto_stories</span>
</div>
<div class="">
<h3 class="font-label-lg text-label-lg font-bold text-primary">{{ $page->text('text_24') }}</h3>
<p class="font-body-sm text-body-sm text-on-surface-variant">{{ $page->text('text_25') }}</p>
</div>
</div>
</div>
</div>

<div class="mt-space-xl pt-space-md flex flex-wrap items-center justify-between gap-space-md">
<div class="flex items-center gap-space-md">
<a class="inline-flex items-center gap-2 px-6 py-3 rounded-full bg-primary text-on-primary font-label-lg text-label-lg hover:bg-primary-container transition-all group-hover:shadow-md" href="/kontak">
<span class="">{{ $page->text('text_26') }}</span>
<span aria-hidden="true" class="text-[18px] font-symbols font-normal not-italic leading-none normal-case whitespace-nowrap [font-feature-settings:'liga'] [word-wrap:normal]">arrow_forward</span>
</a>
<a class="inline-flex items-center gap-1.5 font-label-lg text-label-lg text-primary hover:text-primary-container transition-colors py-2" href="/kontak">
<span class="">{{ $page->text('text_27') }}</span>
<span aria-hidden="true" class="text-[16px] font-symbols font-normal not-italic leading-none normal-case whitespace-nowrap [font-feature-settings:'liga'] [word-wrap:normal]">file_download</span>
</a>
</div>
<span class="font-label-sm text-label-sm text-secondary uppercase tracking-wider">{{ $page->text('text_28') }}</span>
</div>
</div>
</div>
</article>

<article class="group relative rounded-[3rem] bg-surface-container-lowest overflow-hidden shadow-sm transition-all duration-300 hover:shadow-md">
<div class="grid grid-cols-1 lg:grid-cols-12">

<div class="lg:col-span-7 p-6 sm:p-8 lg:p-12 flex flex-col justify-between order-2 lg:order-1">
<div class="">
<div class="flex flex-wrap items-center gap-space-xs mb-space-sm">
<span class="px-3 py-1 rounded-full bg-secondary-container text-on-secondary-fixed font-label-sm text-label-sm font-bold uppercase tracking-wider">{{ $page->text('text_29') }}</span>
<span class="px-3 py-1 rounded-full bg-surface-container-high text-primary font-label-sm text-label-sm font-semibold">{{ $page->text('text_30') }}</span>
<span class="text-secondary font-label-sm text-label-sm">{{ $page->text('text_31') }}</span>
</div>
<h2 class="font-headline-xl text-headline-xl text-primary tracking-tight">{{ $page->text('text_32') }}</h2>
<p class="font-headline-sm text-headline-sm italic text-secondary mt-1">{{ $page->text('text_33') }}</p>
<p class="font-body-lg text-body-lg text-on-surface-variant mt-space-md leading-relaxed">{{ $page->text('text_34') }}</p>
<div class="grid grid-cols-1 sm:grid-cols-2 gap-space-sm mt-space-lg">
<div class="p-3.5 rounded-[1rem] bg-surface-container-low flex items-start gap-3">
<div class="w-8 h-8 rounded-full bg-surface-container-lowest text-primary flex items-center justify-center flex-shrink-0 shadow-sm">
<span aria-hidden="true" class="text-[18px] font-symbols font-normal not-italic leading-none normal-case whitespace-nowrap [font-feature-settings:'liga'] [word-wrap:normal]">precision_manufacturing</span>
</div>
<div class="">
<h3 class="font-label-lg text-label-lg font-bold text-primary">{{ $page->text('text_35') }}</h3>
<p class="font-body-sm text-body-sm text-on-surface-variant">{{ $page->text('text_36') }}</p>
</div>
</div>
<div class="p-3.5 rounded-[1rem] bg-surface-container-low flex items-start gap-3">
<div class="w-8 h-8 rounded-full bg-surface-container-lowest text-primary flex items-center justify-center flex-shrink-0 shadow-sm">
<span aria-hidden="true" class="text-[18px] font-symbols font-normal not-italic leading-none normal-case whitespace-nowrap [font-feature-settings:'liga'] [word-wrap:normal]">military_tech</span>
</div>
<div class="">
<h3 class="font-label-lg text-label-lg font-bold text-primary">{{ $page->text('text_37') }}</h3>
<p class="font-body-sm text-body-sm text-on-surface-variant">{{ $page->text('text_38') }}</p>
</div>
</div>
<div class="p-3.5 rounded-[1rem] bg-surface-container-low flex items-start gap-3">
<div class="w-8 h-8 rounded-full bg-surface-container-lowest text-primary flex items-center justify-center flex-shrink-0 shadow-sm">
<span aria-hidden="true" class="text-[18px] font-symbols font-normal not-italic leading-none normal-case whitespace-nowrap [font-feature-settings:'liga'] [word-wrap:normal]">forum</span>
</div>
<div class="">
<h3 class="font-label-lg text-label-lg font-bold text-primary">{{ $page->text('text_39') }}</h3>
<p class="font-body-sm text-body-sm text-on-surface-variant">{{ $page->text('text_40') }}</p>
</div>
</div>
<div class="p-3.5 rounded-[1rem] bg-surface-container-low flex items-start gap-3">
<div class="w-8 h-8 rounded-full bg-surface-container-lowest text-primary flex items-center justify-center flex-shrink-0 shadow-sm">
<span aria-hidden="true" class="text-[18px] font-symbols font-normal not-italic leading-none normal-case whitespace-nowrap [font-feature-settings:'liga'] [word-wrap:normal]">psychology</span>
</div>
<div class="">
<h3 class="font-label-lg text-label-lg font-bold text-primary">{{ $page->text('text_41') }}</h3>
<p class="font-body-sm text-body-sm text-on-surface-variant">{{ $page->text('text_42') }}</p>
</div>
</div>
</div>
</div>
<div class="mt-space-xl pt-space-md flex flex-wrap items-center justify-between gap-space-md">
<div class="flex items-center gap-space-md">
<a class="inline-flex items-center gap-2 px-6 py-3 rounded-full bg-primary text-on-primary font-label-lg text-label-lg hover:bg-primary-container transition-all group-hover:shadow-md" href="/kontak">
<span class="">{{ $page->text('text_43') }}</span>
<span aria-hidden="true" class="text-[18px] font-symbols font-normal not-italic leading-none normal-case whitespace-nowrap [font-feature-settings:'liga'] [word-wrap:normal]">arrow_forward</span>
</a>
<a class="inline-flex items-center gap-1.5 font-label-lg text-label-lg text-primary hover:text-primary-container transition-colors py-2" href="/kontak">
<span class="">{{ $page->text('text_44') }}</span>
<span aria-hidden="true" class="text-[16px] font-symbols font-normal not-italic leading-none normal-case whitespace-nowrap [font-feature-settings:'liga'] [word-wrap:normal]">sports</span>
</a>
</div>
<span class="font-label-sm text-label-sm text-secondary uppercase tracking-wider">{{ $page->text('text_45') }}</span>
</div>
</div>

<div class="lg:col-span-5 relative min-h-[340px] lg:min-h-full overflow-hidden order-1 lg:order-2">
<img alt="Junior high students of SMP Harapan Mulia in tailored modern uniforms working with robotics equipment and laptops inside a state-of-the-art glass scientific studio, warm ambient architectural lighting, confident teenage boy and girl collaborating happily, editorial education documentary style." class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105" decoding="async" loading="lazy" src="{{ $page->media('image_2') }}"/>
<div class="absolute top-4 right-4 bg-primary text-on-primary rounded-[2rem] px-4 py-3 shadow-sm max-w-[240px]">
<span class="font-headline-sm italic text-headline-sm block leading-tight">{{ $page->text('text_46') }}</span>
<span class="font-label-sm text-label-sm text-tertiary-fixed uppercase tracking-wider mt-1 block">{{ $page->text('text_47') }}</span>
</div>
</div>
</div>
</article>

<article class="group relative rounded-[3rem] bg-surface-container-lowest overflow-hidden shadow-sm transition-all duration-300 hover:shadow-md">
<div class="grid grid-cols-1 lg:grid-cols-12">

<div class="lg:col-span-5 relative min-h-[340px] lg:min-h-full overflow-hidden">
<img alt="Senior high school students of SMA Harapan Mulia dressed in smart blazer uniforms discussing research notes in an architectural tiered timber university-style library with warm diffused light and garden greenery visible outside, dignified, visionary, prestige academic atmosphere." class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105" decoding="async" loading="lazy" src="{{ $page->media('image_3') }}"/>
<div class="absolute bottom-4 left-4 bg-tertiary-fixed text-primary rounded-[2rem] px-4 py-3 shadow-sm max-w-[240px]">
<span class="font-headline-sm italic text-headline-sm block leading-tight">{{ $page->text('text_48') }}</span>
<span class="font-label-sm text-label-sm text-secondary uppercase tracking-wider mt-1 block">{{ $page->text('text_49') }}</span>
</div>
</div>

<div class="lg:col-span-7 p-6 sm:p-8 lg:p-12 flex flex-col justify-between">
<div class="">
<div class="flex flex-wrap items-center gap-space-xs mb-space-sm">
<span class="px-3 py-1 rounded-full bg-secondary-container text-on-secondary-fixed font-label-sm text-label-sm font-bold uppercase tracking-wider">{{ $page->text('text_50') }}</span>
<span class="px-3 py-1 rounded-full bg-surface-container-high text-primary font-label-sm text-label-sm font-semibold">{{ $page->text('text_51') }}</span>
<span class="text-secondary font-label-sm text-label-sm">{{ $page->text('text_52') }}</span>
</div>
<h2 class="font-headline-xl text-headline-xl text-primary tracking-tight">{{ $page->text('text_53') }}</h2>
<p class="font-headline-sm text-headline-sm italic text-secondary mt-1">{{ $page->text('text_54') }}</p>
<p class="font-body-lg text-body-lg text-on-surface-variant mt-space-md leading-relaxed">{{ $page->text('text_55') }}</p>
<div class="grid grid-cols-1 sm:grid-cols-2 gap-space-sm mt-space-lg">
<div class="p-3.5 rounded-[1rem] bg-surface-container-low flex items-start gap-3">
<div class="w-8 h-8 rounded-full bg-surface-container-lowest text-primary flex items-center justify-center flex-shrink-0 shadow-sm">
<span aria-hidden="true" class="text-[18px] font-symbols font-normal not-italic leading-none normal-case whitespace-nowrap [font-feature-settings:'liga'] [word-wrap:normal]">school</span>
</div>
<div class="">
<h3 class="font-label-lg text-label-lg font-bold text-primary">{{ $page->text('text_56') }}</h3>
<p class="font-body-sm text-body-sm text-on-surface-variant">{{ $page->text('text_57') }}</p>
</div>
</div>
<div class="p-3.5 rounded-[1rem] bg-surface-container-low flex items-start gap-3">
<div class="w-8 h-8 rounded-full bg-surface-container-lowest text-primary flex items-center justify-center flex-shrink-0 shadow-sm">
<span aria-hidden="true" class="text-[18px] font-symbols font-normal not-italic leading-none normal-case whitespace-nowrap [font-feature-settings:'liga'] [word-wrap:normal]">biotech</span>
</div>
<div class="">
<h3 class="font-label-lg text-label-lg font-bold text-primary">{{ $page->text('text_58') }}</h3>
<p class="font-body-sm text-body-sm text-on-surface-variant">{{ $page->text('text_59') }}</p>
</div>
</div>
<div class="p-3.5 rounded-[1rem] bg-surface-container-low flex items-start gap-3">
<div class="w-8 h-8 rounded-full bg-surface-container-lowest text-primary flex items-center justify-center flex-shrink-0 shadow-sm">
<span aria-hidden="true" class="text-[18px] font-symbols font-normal not-italic leading-none normal-case whitespace-nowrap [font-feature-settings:'liga'] [word-wrap:normal]">verified</span>
</div>
<div class="">
<h3 class="font-label-lg text-label-lg font-bold text-primary">{{ $page->text('text_60') }}</h3>
<p class="font-body-sm text-body-sm text-on-surface-variant">{{ $page->text('text_61') }}</p>
</div>
</div>
<div class="p-3.5 rounded-[1rem] bg-surface-container-low flex items-start gap-3">
<div class="w-8 h-8 rounded-full bg-surface-container-lowest text-primary flex items-center justify-center flex-shrink-0 shadow-sm">
<span aria-hidden="true" class="text-[18px] font-symbols font-normal not-italic leading-none normal-case whitespace-nowrap [font-feature-settings:'liga'] [word-wrap:normal]">emoji_events</span>
</div>
<div class="">
<h3 class="font-label-lg text-label-lg font-bold text-primary">{{ $page->text('text_62') }}</h3>
<p class="font-body-sm text-body-sm text-on-surface-variant">{{ $page->text('text_63') }}</p>
</div>
</div>
</div>
</div>
<div class="mt-space-xl pt-space-md flex flex-wrap items-center justify-between gap-space-md">
<div class="flex items-center gap-space-md">
<a class="inline-flex items-center gap-2 px-6 py-3 rounded-full bg-primary text-on-primary font-label-lg text-label-lg hover:bg-primary-container transition-all group-hover:shadow-md" href="/kontak">
<span class="">{{ $page->text('text_64') }}</span>
<span aria-hidden="true" class="text-[18px] font-symbols font-normal not-italic leading-none normal-case whitespace-nowrap [font-feature-settings:'liga'] [word-wrap:normal]">arrow_forward</span>
</a>
<a class="inline-flex items-center gap-1.5 font-label-lg text-label-lg text-primary hover:text-primary-container transition-colors py-2" href="/kontak">
<span class="">{{ $page->text('text_65') }}</span>
<span aria-hidden="true" class="text-[16px] font-symbols font-normal not-italic leading-none normal-case whitespace-nowrap [font-feature-settings:'liga'] [word-wrap:normal]">insights</span>
</a>
</div>
<span class="font-label-sm text-label-sm text-secondary uppercase tracking-wider">{{ $page->text('text_66') }}</span>
</div>
</div>
</div>
</article>
</div>
</section>

<section class="w-full bg-surface-container-low/60 py-space-xl lg:py-28">
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

<div class="max-w-3xl mb-space-xl">
<span class="font-label-sm text-label-sm uppercase tracking-widest text-secondary font-bold block mb-2">{{ $page->text('text_67') }}</span>
<h2 class="font-headline-2xl text-headline-2xl text-primary tracking-tight leading-tight">{{ $page->text('text_68') }}</h2>
<p class="font-body-lg text-body-lg text-on-surface-variant mt-space-sm">{{ $page->text('text_69') }}</p>
</div>

<div class="grid grid-cols-1 md:grid-cols-3 gap-space-lg mb-space-xl">

<div class="rounded-[3rem] bg-surface-container-lowest p-space-lg flex flex-col justify-between shadow-sm relative overflow-hidden">
<div class="w-2 h-full bg-secondary-container absolute left-0 top-0"></div>
<div class="">
<div class="flex items-center justify-between mb-space-md">
<span class="w-10 h-10 rounded-full bg-surface-container-low text-primary flex items-center justify-center font-headline-md text-headline-md font-bold">{{ $page->text('text_70') }}</span>
<span class="px-3 py-1 rounded-full bg-surface-container-high text-primary font-label-sm text-label-sm font-semibold">{{ $page->text('text_71') }}</span>
</div>
<h3 class="font-headline-md text-headline-md text-primary font-bold">{{ $page->text('text_72') }}</h3>
<p class="font-body-md text-body-md text-on-surface-variant mt-2">{{ $page->text('text_73') }}</p>
</div>
<div class="mt-space-lg pt-space-md space-y-2.5">
<div class="flex items-center justify-between font-body-sm text-body-sm">
<span class="text-on-surface-variant">{{ $page->text('text_74') }}</span>
<span class="font-bold text-primary">{{ $page->text('text_75') }}</span>
</div>
<div class="flex items-center justify-between font-body-sm text-body-sm">
<span class="text-on-surface-variant">{{ $page->text('text_76') }}</span>
<span class="font-bold text-primary">{{ $page->text('text_77') }}</span>
</div>
<div class="flex items-center justify-between font-body-sm text-body-sm">
<span class="text-on-surface-variant">{{ $page->text('text_78') }}</span>
<span class="font-bold text-primary">{{ $page->text('text_79') }}</span>
</div>
</div>
</div>

<div class="rounded-[3rem] bg-surface-container-lowest p-space-lg flex flex-col justify-between shadow-sm relative overflow-hidden">
<div class="w-2 h-full bg-primary absolute left-0 top-0"></div>
<div class="">
<div class="flex items-center justify-between mb-space-md">
<span class="w-10 h-10 rounded-full bg-surface-container-low text-primary flex items-center justify-center font-headline-md text-headline-md font-bold">{{ $page->text('text_80') }}</span>
<span class="px-3 py-1 rounded-full bg-surface-container-high text-primary font-label-sm text-label-sm font-semibold">{{ $page->text('text_81') }}</span>
</div>
<h3 class="font-headline-md text-headline-md text-primary font-bold">{{ $page->text('text_82') }}</h3>
<p class="font-body-md text-body-md text-on-surface-variant mt-2">{{ $page->text('text_83') }}</p>
</div>
<div class="mt-space-lg pt-space-md space-y-2.5">
<div class="flex items-center justify-between font-body-sm text-body-sm">
<span class="text-on-surface-variant">{{ $page->text('text_84') }}</span>
<span class="font-bold text-primary">{{ $page->text('text_85') }}</span>
</div>
<div class="flex items-center justify-between font-body-sm text-body-sm">
<span class="text-on-surface-variant">{{ $page->text('text_86') }}</span>
<span class="font-bold text-primary">{{ $page->text('text_87') }}</span>
</div>
<div class="flex items-center justify-between font-body-sm text-body-sm">
<span class="text-on-surface-variant">{{ $page->text('text_88') }}</span>
<span class="font-bold text-primary">{{ $page->text('text_89') }}</span>
</div>
</div>
</div>

<div class="rounded-[3rem] bg-surface-container-lowest p-space-lg flex flex-col justify-between shadow-sm relative overflow-hidden">
<div class="w-2 h-full bg-tertiary-fixed-dim absolute left-0 top-0"></div>
<div class="">
<div class="flex items-center justify-between mb-space-md">
<span class="w-10 h-10 rounded-full bg-surface-container-low text-primary flex items-center justify-center font-headline-md text-headline-md font-bold">{{ $page->text('text_90') }}</span>
<span class="px-3 py-1 rounded-full bg-surface-container-high text-primary font-label-sm text-label-sm font-semibold">{{ $page->text('text_91') }}</span>
</div>
<h3 class="font-headline-md text-headline-md text-primary font-bold">{{ $page->text('text_92') }}</h3>
<p class="font-body-md text-body-md text-on-surface-variant mt-2">{{ $page->text('text_93') }}</p>
</div>
<div class="mt-space-lg pt-space-md space-y-2.5">
<div class="flex items-center justify-between font-body-sm text-body-sm">
<span class="text-on-surface-variant">{{ $page->text('text_94') }}</span>
<span class="font-bold text-primary">{{ $page->text('text_95') }}</span>
</div>
<div class="flex items-center justify-between font-body-sm text-body-sm">
<span class="text-on-surface-variant">{{ $page->text('text_96') }}</span>
<span class="font-bold text-primary">{{ $page->text('text_97') }}</span>
</div>
<div class="flex items-center justify-between font-body-sm text-body-sm">
<span class="text-on-surface-variant">{{ $page->text('text_98') }}</span>
<span class="font-bold text-primary">{{ $page->text('text_99') }}</span>
</div>
</div>
</div>
</div>

<div class="p-space-lg rounded-[3rem] bg-surface-container-lowest flex flex-col lg:flex-row items-center justify-between gap-space-lg shadow-sm">
<div class="flex items-center gap-space-md">
<div class="w-12 h-12 rounded-full bg-secondary-container text-on-secondary-container flex items-center justify-center flex-shrink-0">
<span aria-hidden="true" class="text-[24px] font-symbols font-normal not-italic leading-none normal-case whitespace-nowrap [font-feature-settings:'liga'] [word-wrap:normal]">hub</span>
</div>
<div class="">
<h4 class="font-headline-sm text-headline-sm text-primary font-bold">{{ $page->text('text_100') }}</h4>
<p class="font-body-sm text-body-sm text-on-surface-variant">{{ $page->text('text_101') }}</p>
</div>
</div>
<a class="inline-flex items-center gap-2 px-5 py-2.5 rounded-full bg-primary text-on-primary font-label-md text-label-md hover:bg-primary-container transition-all flex-shrink-0" href="/kontak">
<span class="">{{ $page->text('text_102') }}</span>
<span aria-hidden="true" class="text-[16px] font-symbols font-normal not-italic leading-none normal-case whitespace-nowrap [font-feature-settings:'liga'] [word-wrap:normal]">chevron_right</span>
</a>
</div>
</div>
</section>

<section class="w-full max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-space-xl lg:py-28">
<div class="flex flex-col md:flex-row md:items-end justify-between mb-space-xl gap-space-md">
<div class="">
<span class="font-label-sm text-label-sm uppercase tracking-widest text-secondary font-bold block mb-2">{{ $page->text('text_103') }}</span>
<h2 class="font-headline-2xl text-headline-2xl text-primary tracking-tight leading-none">{{ $page->text('text_104') }}</h2>
</div>
<p class="font-body-md text-body-md text-on-surface-variant max-w-md">{{ $page->text('text_105') }}</p>
</div>

<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-space-md">

<div class="group relative rounded-[2rem] overflow-hidden bg-surface-container-lowest shadow-sm flex flex-col">
<div class="h-48 overflow-hidden">
<img alt="Modern spacious central library of Harapan Mulia Foundation with floor-to-ceiling timber bookshelves, quiet study pods, natural botanical skylights and cozy reading cushions, architectural photography style." class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105" decoding="async" loading="lazy" src="{{ $page->media('image_4') }}"/>
</div>
<div class="p-5 flex flex-col justify-between flex-1">
<div class="">
<div class="w-8 h-8 rounded-full bg-surface-container-low text-primary flex items-center justify-center mb-3">
<span aria-hidden="true" class="text-[18px] font-symbols font-normal not-italic leading-none normal-case whitespace-nowrap [font-feature-settings:'liga'] [word-wrap:normal]">local_library</span>
</div>
<h3 class="font-headline-sm text-headline-sm font-bold text-primary">{{ $page->text('text_106') }}</h3>
<p class="font-body-sm text-body-sm text-on-surface-variant mt-1.5">{{ $page->text('text_107') }}</p>
</div>
<span class="font-label-sm text-label-sm text-secondary font-bold mt-4 block">{{ $page->text('text_108') }}</span>
</div>
</div>

<div class="group relative rounded-[2rem] overflow-hidden bg-surface-container-lowest shadow-sm flex flex-col">
<div class="h-48 overflow-hidden">
<img alt="Harapan Mulia grand campus auditorium seating 1000 people with acoustic curved wood paneling, theatrical spotlighting, wide performing arts stage and grand piano, warm cinematic architectural lighting." class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105" decoding="async" loading="lazy" src="{{ $page->media('image_5') }}"/>
</div>
<div class="p-5 flex flex-col justify-between flex-1">
<div class="">
<div class="w-8 h-8 rounded-full bg-surface-container-low text-primary flex items-center justify-center mb-3">
<span aria-hidden="true" class="text-[18px] font-symbols font-normal not-italic leading-none normal-case whitespace-nowrap [font-feature-settings:'liga'] [word-wrap:normal]">theater_comedy</span>
</div>
<h3 class="font-headline-sm text-headline-sm font-bold text-primary">{{ $page->text('text_109') }}</h3>
<p class="font-body-sm text-body-sm text-on-surface-variant mt-1.5">{{ $page->text('text_110') }}</p>
</div>
<span class="font-label-sm text-label-sm text-secondary font-bold mt-4 block">{{ $page->text('text_111') }}</span>
</div>
</div>

<div class="group relative rounded-[2rem] overflow-hidden bg-surface-container-lowest shadow-sm flex flex-col">
<div class="h-48 overflow-hidden">
<img alt="Olympic-size indoor swimming pool and timber floor basketball indoor gymnasium inside Harapan Mulia athletic complex, bright airy clean architecture with lush tropical garden view through high windows." class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105" decoding="async" loading="lazy" src="{{ $page->media('image_6') }}"/>
</div>
<div class="p-5 flex flex-col justify-between flex-1">
<div class="">
<div class="w-8 h-8 rounded-full bg-surface-container-low text-primary flex items-center justify-center mb-3">
<span aria-hidden="true" class="text-[18px] font-symbols font-normal not-italic leading-none normal-case whitespace-nowrap [font-feature-settings:'liga'] [word-wrap:normal]">pool</span>
</div>
<h3 class="font-headline-sm text-headline-sm font-bold text-primary">{{ $page->text('text_112') }}</h3>
<p class="font-body-sm text-body-sm text-on-surface-variant mt-1.5">{{ $page->text('text_113') }}</p>
</div>
<span class="font-label-sm text-label-sm text-secondary font-bold mt-4 block">{{ $page->text('text_114') }}</span>
</div>
</div>

<div class="group relative rounded-[2rem] overflow-hidden bg-surface-container-lowest shadow-sm flex flex-col">
<div class="h-48 overflow-hidden">
<img alt="High tech STEM innovation laboratory with 3D printers, laser cutters, clean chemistry experiment benches and collaborative workbenches, clean biophilic green modern interior design." class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105" decoding="async" loading="lazy" src="{{ $page->media('image_7') }}"/>
</div>
<div class="p-5 flex flex-col justify-between flex-1">
<div class="">
<div class="w-8 h-8 rounded-full bg-surface-container-low text-primary flex items-center justify-center mb-3">
<span aria-hidden="true" class="text-[18px] font-symbols font-normal not-italic leading-none normal-case whitespace-nowrap [font-feature-settings:'liga'] [word-wrap:normal]">science</span>
</div>
<h3 class="font-headline-sm text-headline-sm font-bold text-primary">{{ $page->text('text_115') }}</h3>
<p class="font-body-sm text-body-sm text-on-surface-variant mt-1.5">{{ $page->text('text_116') }}</p>
</div>
<span class="font-label-sm text-label-sm text-secondary font-bold mt-4 block">{{ $page->text('text_117') }}</span>
</div>
</div>
</div>
</section>

<section class="w-full max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pb-space-xl lg:pb-28">
<div class="relative rounded-[3rem] bg-primary text-on-primary p-8 sm:p-12 lg:p-16 overflow-hidden shadow-xl">

<div class="absolute -right-16 -bottom-16 w-80 h-80 rounded-full bg-primary-container/60 blur-3xl pointer-events-none"></div>
<div class="absolute top-0 right-0 w-1/3 h-full opacity-10 pointer-events-none hidden lg:block">
<svg class="w-full h-full text-surface" fill="none" viewbox="0 0 400 400">
<circle class="" cx="200" cy="200" r="180" stroke="currentColor" stroke-dasharray="8 8" stroke-width="2"></circle>
<circle class="" cx="200" cy="200" r="120" stroke="currentColor" stroke-width="1.5"></circle>
<path class="" d="M200 20 L200 380 M20 200 L380 200" stroke="currentColor" stroke-width="1"></path>
</svg>
</div>
<div class="relative z-10 max-w-2xl">
<span class="font-label-sm text-label-sm uppercase tracking-widest text-tertiary-fixed font-bold block mb-space-xs">{{ $page->text('text_118') }}</span>
<h2 class="font-headline-2xl text-headline-2xl text-on-primary tracking-tight leading-tight">{{ $page->text('text_119') }}</h2>
<p class="font-body-lg text-body-lg text-on-primary-container mt-space-sm leading-relaxed">{{ $page->text('text_120') }}</p>

<div class="mt-space-lg flex flex-wrap items-center gap-space-sm">
<a class="inline-flex items-center gap-2 px-8 py-3.5 rounded-full bg-tertiary-fixed text-on-tertiary-fixed font-label-lg text-label-lg font-bold hover:bg-tertiary-fixed-dim transition-all shadow-sm" href="/kontak">
<span aria-hidden="true" class="text-[20px] font-symbols font-normal not-italic leading-none normal-case whitespace-nowrap [font-feature-settings:'liga'] [word-wrap:normal]">calendar_month</span>
<span class="">{{ $page->text('text_121') }}</span>
</a>
<a class="inline-flex items-center gap-2 px-7 py-3.5 rounded-full bg-surface-container-lowest text-primary font-label-lg text-label-lg font-bold hover:bg-surface-container-low transition-all" href="/kontak">
<span aria-hidden="true" class="text-[20px] font-symbols font-normal not-italic leading-none normal-case whitespace-nowrap [font-feature-settings:'liga'] [word-wrap:normal]">download</span>
<span class="">{{ $page->text('text_122') }}</span>
</a>
</div>

<div class="mt-space-xl pt-space-md border-t border-on-primary-container/20 flex flex-wrap items-center gap-6 font-body-sm text-body-sm text-on-primary-container">
<div class="flex items-center gap-2">
<span aria-hidden="true" class="text-[18px] text-tertiary-fixed font-symbols font-normal not-italic leading-none normal-case whitespace-nowrap [font-feature-settings:'liga'] [word-wrap:normal]">check_circle</span>
<span class="">{{ $page->text('text_123') }}</span>
</div>
<div class="flex items-center gap-2">
<span aria-hidden="true" class="text-[18px] text-tertiary-fixed font-symbols font-normal not-italic leading-none normal-case whitespace-nowrap [font-feature-settings:'liga'] [word-wrap:normal]">check_circle</span>
<span class="">{{ $page->text('text_124') }}</span>
</div>
<div class="flex items-center gap-2">
<span aria-hidden="true" class="text-[18px] text-tertiary-fixed font-symbols font-normal not-italic leading-none normal-case whitespace-nowrap [font-feature-settings:'liga'] [word-wrap:normal]">check_circle</span>
<span class="">{{ $page->text('text_125') }}</span>
</div>
</div>
</div>
</div>
</section>
</div>
</main>
@endsection
