@extends('layouts.public')
@section('content')
<main class="pt-20" id="main-content">
<div class="flex flex-col w-full">

<section class="relative w-full bg-[#FAF9F5] overflow-hidden pt-space-lg pb-space-xl">

<div class="absolute -top-24 -left-20 w-96 h-96 rounded-full bg-secondary-fixed/40 blur-3xl pointer-events-none"></div>
<div class="absolute top-1/2 -right-24 w-80 h-80 rounded-full bg-surface-container-high/60 blur-3xl pointer-events-none"></div>
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">

<div class="flex flex-wrap items-center gap-space-xs sm:gap-space-sm mb-space-md">
<span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-primary-container text-tertiary-fixed font-label-sm text-label-sm tracking-wider uppercase font-semibold">
<span class="w-2 h-2 rounded-full bg-tertiary-fixed animate-pulse"></span>{{ $page->text('text_1') }}</span>
<span class="inline-flex items-center gap-1 px-3 py-1 rounded-full bg-surface-container text-on-surface-variant font-label-sm text-label-sm">
<span aria-hidden="true" class="text-[16px] text-primary font-symbols font-normal not-italic leading-none normal-case whitespace-nowrap [font-feature-settings:'liga'] [word-wrap:normal]">verified</span>{{ $page->text('text_2') }}</span>
<span class="inline-flex items-center gap-1 px-3 py-1 rounded-full bg-surface-container text-on-surface-variant font-label-sm text-label-sm">
<span aria-hidden="true" class="text-[16px] text-primary font-symbols font-normal not-italic leading-none normal-case whitespace-nowrap [font-feature-settings:'liga'] [word-wrap:normal]">military_tech</span>{{ $page->text('text_3') }}</span>
</div>

<div class="grid grid-cols-1 lg:grid-cols-12 gap-space-lg items-center">

<div class="lg:col-span-7">
<p class="font-label-md text-label-md uppercase tracking-wider text-secondary font-bold mb-space-xs">{{ $page->text('text_4') }}</p>
<h1 class="font-headline-2xl text-headline-2xl font-normal text-primary tracking-tight leading-[1.1] mb-space-md">{{ $page->text('text_5') }}<br class=""/>
<span class="italic font-headline-2xl text-primary-container">{{ $page->text('text_6') }}</span> <br class=""/>{{ $page->text('text_7') }}</h1>
<p class="font-body-xl text-body-xl text-on-surface-variant max-w-xl leading-relaxed mb-space-lg">{{ $page->text('text_8') }}</p>

<div class="grid grid-cols-3 gap-space-md py-space-md my-space-sm bg-surface-container-low/70 rounded-[1rem] px-space-md max-w-xl">
<div class="">
<span class="font-headline-lg text-headline-lg font-bold text-primary block leading-none">{{ $page->text('text_9') }}</span>
<span class="font-body-sm text-body-sm text-on-surface-variant mt-1 block">{{ $page->text('text_10') }}</span>
</div>
<div class="">
<span class="font-headline-lg text-headline-lg font-bold text-primary block leading-none">{{ $page->text('text_11') }}</span>
<span class="font-body-sm text-body-sm text-on-surface-variant mt-1 block">{{ $page->text('text_12') }}</span>
</div>
<div class="">
<span class="font-headline-lg text-headline-lg font-bold text-primary block leading-none">{{ $page->text('text_13') }}</span>
<span class="font-body-sm text-body-sm text-on-surface-variant mt-1 block">{{ $page->text('text_14') }}</span>
</div>
</div>

<div class="flex flex-wrap items-center gap-space-sm pt-space-sm">
<a class="inline-flex items-center gap-space-xs px-space-lg py-space-sm rounded-full bg-primary text-on-primary font-label-lg text-label-lg shadow-sm hover:bg-primary-container transition-all" href="#jenjang-sekolah">
<span class="">{{ $page->text('text_15') }}</span>
<span aria-hidden="true" class="text-[18px] font-symbols font-normal not-italic leading-none normal-case whitespace-nowrap [font-feature-settings:'liga'] [word-wrap:normal]">south</span>
</a>
<a class="inline-flex items-center gap-space-xs px-space-lg py-space-sm rounded-full bg-transparent text-primary font-label-lg text-label-lg hover:bg-surface-container transition-colors" href="#alur-pendaftaran">
<span aria-hidden="true" class="text-[20px] text-primary font-symbols font-normal not-italic leading-none normal-case whitespace-nowrap [font-feature-settings:'liga'] [word-wrap:normal]">flowsheet</span>
<span class="">{{ $page->text('text_16') }}</span>
</a>
</div>
</div>

<div class="lg:col-span-5 relative">
<div class="relative w-full rounded-[2rem] overflow-hidden shadow-xl bg-surface-container-highest aspect-[4/5]">
<img alt="A candid, warm, high-end editorial photograph of happy Indonesian elementary, middle, and high school students in pristine Harapan Mulia green-and-white school uniforms, laughing together under natural gentle sunlight in a modern courtyard filled with tropical greenery and contemporary architecture." class="w-full h-full object-cover" decoding="async" fetchpriority="high" loading="eager" src="{{ $page->media('image_1') }}"/>
<div class="absolute inset-0 bg-gradient-to-t from-primary/80 via-transparent to-transparent"></div>

<div class="absolute bottom-6 left-6 right-6 text-on-primary">
<p class="font-headline-sm text-headline-sm font-semibold leading-snug mb-1">{{ $page->text('text_17') }}</p>
<p class="font-label-sm text-label-sm text-tertiary-fixed tracking-wide uppercase">{{ $page->text('text_18') }}</p>
</div>
</div>

<div class="absolute -bottom-6 -left-6 bg-surface-container-lowest text-on-surface p-space-md rounded-[1rem] shadow-xl max-w-xs hidden sm:flex items-center gap-space-sm">
<div class="w-12 h-12 rounded-full bg-tertiary-fixed text-primary flex items-center justify-center flex-shrink-0">
<span aria-hidden="true" class="text-[24px] font-symbols font-normal not-italic leading-none normal-case whitespace-nowrap [font-feature-settings:'liga'] [word-wrap:normal]">school</span>
</div>
<div class="">
<p class="font-label-md text-label-md font-bold text-primary">{{ $page->text('text_19') }}</p>
<p class="font-body-sm text-body-sm text-on-surface-variant">{{ $page->text('text_20') }}</p>
</div>
</div>
</div>
</div>
</div>
</section>

<section class="w-full bg-[#FAF9F5] py-space-xl" id="jenjang-sekolah">
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

<div class="flex flex-col md:flex-row md:items-end justify-between mb-space-xl gap-space-md">
<div class="">
<span class="font-label-md text-label-md uppercase tracking-wider text-secondary font-bold block mb-space-xs">{{ $page->text('text_21') }}</span>
<h2 class="font-headline-xl text-headline-xl text-primary font-normal">{{ $page->text('text_22') }}</h2>
</div>
<p class="font-body-md text-body-md text-on-surface-variant max-w-md">{{ $page->text('text_23') }}</p>
</div>

<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-space-lg">

<div class="group bg-surface-container-lowest rounded-[2rem] p-space-md flex flex-col justify-between shadow-sm hover:shadow-xl transition-all duration-300">
<div class="">

<div class="relative w-full h-56 rounded-[1rem] overflow-hidden mb-space-md bg-surface-container-low">
<img alt="Young Indonesian primary school students at SD Harapan Mulia sitting around a round wooden desk in a bright, modern, plant-filled classroom, joyfully doing hands-on creative science activities with child-friendly laboratory tools." class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" decoding="async" loading="lazy" src="{{ $page->media('image_2') }}"/>
<span class="absolute top-3 left-3 px-3 py-1 rounded-full bg-surface-container-lowest/90 backdrop-blur-sm text-primary font-label-sm text-label-sm font-bold shadow-sm">{{ $page->text('text_24') }}</span>
<span class="absolute top-3 right-3 px-2.5 py-1 rounded-full bg-tertiary-fixed text-on-tertiary-fixed font-label-sm text-label-sm font-bold shadow-sm">{{ $page->text('text_25') }}</span>
</div>

<div class="flex items-center gap-space-xs text-secondary font-label-sm text-label-sm uppercase tracking-wider mb-1">
<span aria-hidden="true" class="text-[16px] font-symbols font-normal not-italic leading-none normal-case whitespace-nowrap [font-feature-settings:'liga'] [word-wrap:normal]">child_care</span>
<span class="">{{ $page->text('text_26') }}</span>
</div>
<h3 class="font-headline-md text-headline-md text-primary font-medium mb-space-xs">{{ $page->text('text_27') }}</h3>
<p class="font-body-md text-body-md text-on-surface-variant mb-space-md">{{ $page->text('text_28') }}</p>

<div class="space-y-2 bg-surface-container-low/50 rounded-[1rem] p-space-sm mb-space-md text-body-sm text-on-surface-variant">
<div class="flex items-center justify-between">
<span class="font-medium text-on-surface">{{ $page->text('text_29') }}</span>
<span class="font-bold text-primary">{{ $page->text('text_30') }}</span>
</div>
<div class="flex items-center justify-between">
<span class="font-medium text-on-surface">{{ $page->text('text_31') }}</span>
<span class="text-on-surface">{{ $page->text('text_32') }}</span>
</div>
<div class="flex items-center justify-between">
<span class="font-medium text-on-surface">{{ $page->text('text_33') }}</span>
<span class="text-on-surface">{{ $page->text('text_34') }}</span>
</div>
</div>
</div>

<div class="pt-space-sm space-y-2">
<a class="w-full inline-flex items-center justify-center gap-2 py-3 px-4 rounded-full bg-primary text-on-primary font-label-lg text-label-lg font-bold hover:bg-primary-container transition-all" href="/ppdb">
<span class="">{{ $page->text('text_35') }}</span>
<span aria-hidden="true" class="text-[18px] font-symbols font-normal not-italic leading-none normal-case whitespace-nowrap [font-feature-settings:'liga'] [word-wrap:normal]">arrow_forward</span>
</a>
<a class="w-full inline-flex items-center justify-center gap-1 py-2 px-4 rounded-full bg-transparent text-secondary hover:bg-surface-container font-label-md text-label-md transition-colors" href="/ppdb/sd" type="button">
<span aria-hidden="true" class="text-[16px] font-symbols font-normal not-italic leading-none normal-case whitespace-nowrap [font-feature-settings:'liga'] [word-wrap:normal]">info</span>
<span class="">{{ $page->text('text_36') }}</span>
</a>
</div>
</div>

<div class="group bg-surface-container-lowest rounded-[2rem] p-space-md flex flex-col justify-between shadow-sm hover:shadow-xl transition-all duration-300">
<div class="">

<div class="relative w-full h-56 rounded-[1rem] overflow-hidden mb-space-md bg-surface-container-low">
<img alt="Group of middle school students in smart green school vests discussing an engineering design project using a tablet and notes in a sleek modern digital library at SMP Harapan Mulia." class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" decoding="async" loading="lazy" src="{{ $page->media('image_3') }}"/>
<span class="absolute top-3 left-3 px-3 py-1 rounded-full bg-surface-container-lowest/90 backdrop-blur-sm text-primary font-label-sm text-label-sm font-bold shadow-sm">{{ $page->text('text_37') }}</span>
<span class="absolute top-3 right-3 px-2.5 py-1 rounded-full bg-tertiary-fixed text-on-tertiary-fixed font-label-sm text-label-sm font-bold shadow-sm">{{ $page->text('text_38') }}</span>
</div>

<div class="flex items-center gap-space-xs text-secondary font-label-sm text-label-sm uppercase tracking-wider mb-1">
<span aria-hidden="true" class="text-[16px] font-symbols font-normal not-italic leading-none normal-case whitespace-nowrap [font-feature-settings:'liga'] [word-wrap:normal]">psychology</span>
<span class="">{{ $page->text('text_39') }}</span>
</div>
<h3 class="font-headline-md text-headline-md text-primary font-medium mb-space-xs">{{ $page->text('text_40') }}</h3>
<p class="font-body-md text-body-md text-on-surface-variant mb-space-md">{{ $page->text('text_41') }}</p>

<div class="space-y-2 bg-surface-container-low/50 rounded-[1rem] p-space-sm mb-space-md text-body-sm text-on-surface-variant">
<div class="flex items-center justify-between">
<span class="font-medium text-on-surface">{{ $page->text('text_42') }}</span>
<span class="font-bold text-primary">{{ $page->text('text_43') }}</span>
</div>
<div class="flex items-center justify-between">
<span class="font-medium text-on-surface">{{ $page->text('text_44') }}</span>
<span class="text-on-surface">{{ $page->text('text_45') }}</span>
</div>
<div class="flex items-center justify-between">
<span class="font-medium text-on-surface">{{ $page->text('text_46') }}</span>
<span class="text-on-surface">{{ $page->text('text_47') }}</span>
</div>
</div>
</div>

<div class="pt-space-sm space-y-2">
<a class="w-full inline-flex items-center justify-center gap-2 py-3 px-4 rounded-full bg-primary text-on-primary font-label-lg text-label-lg font-bold hover:bg-primary-container transition-all" href="/ppdb">
<span class="">{{ $page->text('text_48') }}</span>
<span aria-hidden="true" class="text-[18px] font-symbols font-normal not-italic leading-none normal-case whitespace-nowrap [font-feature-settings:'liga'] [word-wrap:normal]">arrow_forward</span>
</a>
<a class="w-full inline-flex items-center justify-center gap-1 py-2 px-4 rounded-full bg-transparent text-secondary hover:bg-surface-container font-label-md text-label-md transition-colors" href="/ppdb/smp" type="button">
<span aria-hidden="true" class="text-[16px] font-symbols font-normal not-italic leading-none normal-case whitespace-nowrap [font-feature-settings:'liga'] [word-wrap:normal]">info</span>
<span class="">{{ $page->text('text_49') }}</span>
</a>
</div>
</div>

<div class="group bg-surface-container-lowest rounded-[2rem] p-space-md flex flex-col justify-between shadow-sm hover:shadow-xl transition-all duration-300">
<div class="">

<div class="relative w-full h-56 rounded-[1rem] overflow-hidden mb-space-md bg-surface-container-low">
<img alt="Senior high school male and female students in tidy smart-casual green school blazers collaborating in a state-of-the-art university-prep innovation studio, looking focused and confident at SMA Harapan Mulia." class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" decoding="async" loading="lazy" src="{{ $page->media('image_4') }}"/>
<span class="absolute top-3 left-3 px-3 py-1 rounded-full bg-surface-container-lowest/90 backdrop-blur-sm text-primary font-label-sm text-label-sm font-bold shadow-sm">{{ $page->text('text_50') }}</span>
<span class="absolute top-3 right-3 px-2.5 py-1 rounded-full bg-tertiary-fixed text-on-tertiary-fixed font-label-sm text-label-sm font-bold shadow-sm">{{ $page->text('text_51') }}</span>
</div>

<div class="flex items-center gap-space-xs text-secondary font-label-sm text-label-sm uppercase tracking-wider mb-1">
<span aria-hidden="true" class="text-[16px] font-symbols font-normal not-italic leading-none normal-case whitespace-nowrap [font-feature-settings:'liga'] [word-wrap:normal]">rocket_launch</span>
<span class="">{{ $page->text('text_52') }}</span>
</div>
<h3 class="font-headline-md text-headline-md text-primary font-medium mb-space-xs">{{ $page->text('text_53') }}</h3>
<p class="font-body-md text-body-md text-on-surface-variant mb-space-md">{{ $page->text('text_54') }}</p>

<div class="space-y-2 bg-surface-container-low/50 rounded-[1rem] p-space-sm mb-space-md text-body-sm text-on-surface-variant">
<div class="flex items-center justify-between">
<span class="font-medium text-on-surface">{{ $page->text('text_55') }}</span>
<span class="font-bold text-primary">{{ $page->text('text_56') }}</span>
</div>
<div class="flex items-center justify-between">
<span class="font-medium text-on-surface">{{ $page->text('text_57') }}</span>
<span class="text-on-surface">{{ $page->text('text_58') }}</span>
</div>
<div class="flex items-center justify-between">
<span class="font-medium text-on-surface">{{ $page->text('text_59') }}</span>
<span class="text-on-surface">{{ $page->text('text_60') }}</span>
</div>
</div>
</div>

<div class="pt-space-sm space-y-2">
<a class="w-full inline-flex items-center justify-center gap-2 py-3 px-4 rounded-full bg-primary text-on-primary font-label-lg text-label-lg font-bold hover:bg-primary-container transition-all" href="/ppdb">
<span class="">{{ $page->text('text_61') }}</span>
<span aria-hidden="true" class="text-[18px] font-symbols font-normal not-italic leading-none normal-case whitespace-nowrap [font-feature-settings:'liga'] [word-wrap:normal]">arrow_forward</span>
</a>
<a class="w-full inline-flex items-center justify-center gap-1 py-2 px-4 rounded-full bg-transparent text-secondary hover:bg-surface-container font-label-md text-label-md transition-colors" href="/ppdb/sma" type="button">
<span aria-hidden="true" class="text-[16px] font-symbols font-normal not-italic leading-none normal-case whitespace-nowrap [font-feature-settings:'liga'] [word-wrap:normal]">info</span>
<span class="">{{ $page->text('text_62') }}</span>
</a>
</div>
</div>
</div>
</div>
</section>

<section class="w-full bg-surface-container-low/50 py-space-xl" id="alur-pendaftaran">
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
<div class="max-w-2xl mb-space-lg">
<span class="font-label-md text-label-md uppercase tracking-wider text-secondary font-bold block mb-space-xs">{{ $page->text('text_63') }}</span>
<h2 class="font-headline-xl text-headline-xl text-primary font-normal">{{ $page->text('text_64') }}</h2>
<p class="font-body-md text-body-md text-on-surface-variant mt-2">{{ $page->text('text_65') }}</p>
</div>

<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-space-md">

<div class="bg-surface-container-lowest rounded-[1rem] p-space-md shadow-sm relative overflow-hidden flex flex-col justify-between">
<div class="text-tertiary-fixed-dim/40 font-headline-2xl text-headline-2xl font-bold leading-none absolute -right-2 -top-2 select-none">{{ $page->text('text_66') }}</div>
<div class="relative z-10">
<div class="w-10 h-10 rounded-full bg-surface-container text-primary flex items-center justify-center mb-space-sm">
<span aria-hidden="true" class="text-[20px] font-symbols font-normal not-italic leading-none normal-case whitespace-nowrap [font-feature-settings:'liga'] [word-wrap:normal]">how_to_reg</span>
</div>
<h3 class="font-headline-sm text-headline-sm font-semibold text-primary mb-1">{{ $page->text('text_67') }}</h3>
<p class="font-body-sm text-body-sm text-on-surface-variant">{{ $page->text('text_68') }}</p>
</div>
<div class="pt-space-md border-t border-outline-variant/20 mt-space-md">
<span class="font-label-sm text-label-sm text-secondary font-semibold">{{ $page->text('text_69') }}</span>
</div>
</div>

<div class="bg-surface-container-lowest rounded-[1rem] p-space-md shadow-sm relative overflow-hidden flex flex-col justify-between">
<div class="text-tertiary-fixed-dim/40 font-headline-2xl text-headline-2xl font-bold leading-none absolute -right-2 -top-2 select-none">{{ $page->text('text_70') }}</div>
<div class="relative z-10">
<div class="w-10 h-10 rounded-full bg-surface-container text-primary flex items-center justify-center mb-space-sm">
<span aria-hidden="true" class="text-[20px] font-symbols font-normal not-italic leading-none normal-case whitespace-nowrap [font-feature-settings:'liga'] [word-wrap:normal]">upload_file</span>
</div>
<h3 class="font-headline-sm text-headline-sm font-semibold text-primary mb-1">{{ $page->text('text_71') }}</h3>
<p class="font-body-sm text-body-sm text-on-surface-variant">{{ $page->text('text_72') }}</p>
</div>
<div class="pt-space-md border-t border-outline-variant/20 mt-space-md">
<span class="font-label-sm text-label-sm text-secondary font-semibold">{{ $page->text('text_73') }}</span>
</div>
</div>

<div class="bg-surface-container-lowest rounded-[1rem] p-space-md shadow-sm relative overflow-hidden flex flex-col justify-between">
<div class="text-tertiary-fixed-dim/40 font-headline-2xl text-headline-2xl font-bold leading-none absolute -right-2 -top-2 select-none">{{ $page->text('text_74') }}</div>
<div class="relative z-10">
<div class="w-10 h-10 rounded-full bg-surface-container text-primary flex items-center justify-center mb-space-sm">
<span aria-hidden="true" class="text-[20px] font-symbols font-normal not-italic leading-none normal-case whitespace-nowrap [font-feature-settings:'liga'] [word-wrap:normal]">psychology_alt</span>
</div>
<h3 class="font-headline-sm text-headline-sm font-semibold text-primary mb-1">{{ $page->text('text_75') }}</h3>
<p class="font-body-sm text-body-sm text-on-surface-variant">{{ $page->text('text_76') }}</p>
</div>
<div class="pt-space-md border-t border-outline-variant/20 mt-space-md">
<span class="font-label-sm text-label-sm text-secondary font-semibold">{{ $page->text('text_77') }}</span>
</div>
</div>

<div class="bg-surface-container-lowest rounded-[1rem] p-space-md shadow-sm relative overflow-hidden flex flex-col justify-between">
<div class="text-tertiary-fixed-dim/40 font-headline-2xl text-headline-2xl font-bold leading-none absolute -right-2 -top-2 select-none">{{ $page->text('text_78') }}</div>
<div class="relative z-10">
<div class="w-10 h-10 rounded-full bg-surface-container text-primary flex items-center justify-center mb-space-sm">
<span aria-hidden="true" class="text-[20px] font-symbols font-normal not-italic leading-none normal-case whitespace-nowrap [font-feature-settings:'liga'] [word-wrap:normal]">campaign</span>
</div>
<h3 class="font-headline-sm text-headline-sm font-semibold text-primary mb-1">{{ $page->text('text_79') }}</h3>
<p class="font-body-sm text-body-sm text-on-surface-variant">{{ $page->text('text_80') }}</p>
</div>
<div class="pt-space-md border-t border-outline-variant/20 mt-space-md">
<span class="font-label-sm text-label-sm text-secondary font-semibold">{{ $page->text('text_81') }}</span>
</div>
</div>

<div class="bg-primary text-on-primary rounded-[1rem] p-space-md shadow-md relative overflow-hidden flex flex-col justify-between">
<div class="text-on-primary-container/20 font-headline-2xl text-headline-2xl font-bold leading-none absolute -right-2 -top-2 select-none">{{ $page->text('text_82') }}</div>
<div class="relative z-10">
<div class="w-10 h-10 rounded-full bg-primary-container text-tertiary-fixed flex items-center justify-center mb-space-sm">
<span aria-hidden="true" class="text-[20px] font-symbols font-normal not-italic leading-none normal-case whitespace-nowrap [font-feature-settings:'liga'] [word-wrap:normal]">task_alt</span>
</div>
<h3 class="font-headline-sm text-headline-sm font-semibold text-tertiary-fixed mb-1">{{ $page->text('text_83') }}</h3>
<p class="font-body-sm text-body-sm text-on-primary-container">{{ $page->text('text_84') }}</p>
</div>
<div class="pt-space-md border-t border-primary-container mt-space-md">
<span class="font-label-sm text-label-sm text-tertiary-fixed font-semibold">{{ $page->text('text_85') }}</span>
</div>
</div>
</div>
</div>
</section>

<section class="w-full bg-[#FAF9F5] py-space-xl">
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
<div class="text-center max-w-2xl mx-auto mb-space-xl">
<span class="font-label-md text-label-md uppercase tracking-wider text-secondary font-bold block mb-space-xs">{{ $page->text('text_86') }}</span>
<h2 class="font-headline-xl text-headline-xl text-primary font-normal">{{ $page->text('text_87') }}</h2>
<p class="font-body-md text-body-md text-on-surface-variant mt-2">{{ $page->text('text_88') }}</p>
</div>

<div class="grid grid-cols-1 lg:grid-cols-2 gap-space-lg items-stretch">

<div class="bg-surface-container-lowest rounded-[2rem] p-space-lg shadow-sm flex flex-col justify-between">
<div class="">
<div class="flex items-center justify-between pb-space-md border-b border-outline-variant/30 mb-space-md">
<div class="">
<span class="px-3 py-1 rounded-full bg-secondary-container text-on-secondary-container font-label-sm text-label-sm font-bold">{{ $page->text('text_89') }}</span>
<h3 class="font-headline-md text-headline-md text-primary font-bold mt-2">{{ $page->text('text_90') }}</h3>
</div>
<span aria-hidden="true" class="text-primary text-[36px] font-symbols font-normal not-italic leading-none normal-case whitespace-nowrap [font-feature-settings:'liga'] [word-wrap:normal]">workspace_premium</span>
</div>
<ul class="space-y-space-md">
<li class="flex items-start gap-space-sm">
<div class="w-8 h-8 rounded-full bg-surface-container text-primary flex items-center justify-center flex-shrink-0 mt-0.5">
<span aria-hidden="true" class="text-[18px] font-symbols font-normal not-italic leading-none normal-case whitespace-nowrap [font-feature-settings:'liga'] [word-wrap:normal]">calendar_month</span>
</div>
<div class="">
<h4 class="font-label-lg text-label-lg font-bold text-on-surface">{{ $page->text('text_91') }}</h4>
<p class="font-body-md text-body-md text-on-surface-variant">{{ $page->text('text_92') }}</p>
</div>
</li>
<li class="flex items-start gap-space-sm">
<div class="w-8 h-8 rounded-full bg-surface-container text-primary flex items-center justify-center flex-shrink-0 mt-0.5">
<span aria-hidden="true" class="text-[18px] font-symbols font-normal not-italic leading-none normal-case whitespace-nowrap [font-feature-settings:'liga'] [word-wrap:normal]">assignment_turned_in</span>
</div>
<div class="">
<h4 class="font-label-lg text-label-lg font-bold text-on-surface">{{ $page->text('text_93') }}</h4>
<p class="font-body-md text-body-md text-on-surface-variant">{{ $page->text('text_94') }}</p>
</div>
</li>
<li class="flex items-start gap-space-sm">
<div class="w-8 h-8 rounded-full bg-surface-container text-primary flex items-center justify-center flex-shrink-0 mt-0.5">
<span aria-hidden="true" class="text-[18px] font-symbols font-normal not-italic leading-none normal-case whitespace-nowrap [font-feature-settings:'liga'] [word-wrap:normal]">verified</span>
</div>
<div class="">
<h4 class="font-label-lg text-label-lg font-bold text-on-surface">{{ $page->text('text_95') }}</h4>
<p class="font-body-md text-body-md text-on-surface-variant">{{ $page->text('text_96') }}</p>
</div>
</li>
</ul>
</div>
<div class="mt-space-lg pt-space-md border-t border-outline-variant/30 flex items-center justify-between">
<span class="font-label-sm text-label-sm text-secondary font-bold">{{ $page->text('text_97') }}</span>
<a class="font-label-lg text-label-lg text-primary font-bold hover:underline inline-flex items-center gap-1" href="#jenjang-sekolah">{{ $page->text('text_98') }}<span aria-hidden="true" class="text-[16px] font-symbols font-normal not-italic leading-none normal-case whitespace-nowrap [font-feature-settings:'liga'] [word-wrap:normal]">arrow_forward</span>
</a>
</div>
</div>

<div class="bg-surface-container-lowest rounded-[2rem] p-space-lg shadow-sm flex flex-col justify-between">
<div class="">
<div class="flex items-center justify-between pb-space-md border-b border-outline-variant/30 mb-space-md">
<div class="">
<span class="px-3 py-1 rounded-full bg-surface-container text-on-surface-variant font-label-sm text-label-sm font-bold">{{ $page->text('text_99') }}</span>
<h3 class="font-headline-md text-headline-md text-primary font-bold mt-2">{{ $page->text('text_100') }}</h3>
</div>
<span aria-hidden="true" class="text-secondary text-[36px] font-symbols font-normal not-italic leading-none normal-case whitespace-nowrap [font-feature-settings:'liga'] [word-wrap:normal]">event_repeat</span>
</div>
<ul class="space-y-space-md">
<li class="flex items-start gap-space-sm">
<div class="w-8 h-8 rounded-full bg-surface-container text-primary flex items-center justify-center flex-shrink-0 mt-0.5">
<span aria-hidden="true" class="text-[18px] font-symbols font-normal not-italic leading-none normal-case whitespace-nowrap [font-feature-settings:'liga'] [word-wrap:normal]">calendar_month</span>
</div>
<div class="">
<h4 class="font-label-lg text-label-lg font-bold text-on-surface">{{ $page->text('text_101') }}</h4>
<p class="font-body-md text-body-md text-on-surface-variant">{{ $page->text('text_102') }}</p>
</div>
</li>
<li class="flex items-start gap-space-sm">
<div class="w-8 h-8 rounded-full bg-surface-container text-primary flex items-center justify-center flex-shrink-0 mt-0.5">
<span aria-hidden="true" class="text-[18px] font-symbols font-normal not-italic leading-none normal-case whitespace-nowrap [font-feature-settings:'liga'] [word-wrap:normal]">assignment_turned_in</span>
</div>
<div class="">
<h4 class="font-label-lg text-label-lg font-bold text-on-surface">{{ $page->text('text_103') }}</h4>
<p class="font-body-md text-body-md text-on-surface-variant">{{ $page->text('text_104') }}</p>
</div>
</li>
<li class="flex items-start gap-space-sm">
<div class="w-8 h-8 rounded-full bg-surface-container text-primary flex items-center justify-center flex-shrink-0 mt-0.5">
<span aria-hidden="true" class="text-[18px] font-symbols font-normal not-italic leading-none normal-case whitespace-nowrap [font-feature-settings:'liga'] [word-wrap:normal]">group</span>
</div>
<div class="">
<h4 class="font-label-lg text-label-lg font-bold text-on-surface">{{ $page->text('text_105') }}</h4>
<p class="font-body-md text-body-md text-on-surface-variant">{{ $page->text('text_106') }}</p>
</div>
</li>
</ul>
</div>
<div class="mt-space-lg pt-space-md border-t border-outline-variant/30 flex items-center justify-between">
<span class="font-label-sm text-label-sm text-on-surface-variant">{{ $page->text('text_107') }}</span>
<span class="font-label-md text-label-md text-on-surface-variant italic">{{ $page->text('text_108') }}</span>
</div>
</div>
</div>
</div>
</section>

<section class="w-full bg-surface-container-low/40 py-space-xl">
<div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
<div class="text-center mb-space-lg">
<span class="font-label-md text-label-md uppercase tracking-wider text-secondary font-bold block mb-space-xs">{{ $page->text('text_109') }}</span>
<h2 class="font-headline-xl text-headline-xl text-primary font-normal">{{ $page->text('text_110') }}</h2>
<p class="font-body-md text-body-md text-on-surface-variant mt-2">{{ $page->text('text_111') }}</p>
</div>

<div class="space-y-space-sm">
<details class="group bg-surface-container-lowest rounded-[1rem] p-space-md shadow-sm transition-all" open="">
<summary class="flex items-center justify-between cursor-pointer list-none select-none font-headline-sm text-headline-sm text-primary font-medium">
<span class="">{{ $page->text('text_112') }}</span>
<span aria-hidden="true" class="text-[20px] transition-transform duration-300 group-open:rotate-180 text-secondary font-symbols font-normal not-italic leading-none normal-case whitespace-nowrap [font-feature-settings:'liga'] [word-wrap:normal]">expand_more</span>
</summary>
<div class="mt-space-sm pt-space-sm border-t border-outline-variant/20 font-body-md text-body-md text-on-surface-variant leading-relaxed">{{ $page->text('text_113') }}</div>
</details>
<details class="group bg-surface-container-lowest rounded-[1rem] p-space-md shadow-sm transition-all">
<summary class="flex items-center justify-between cursor-pointer list-none select-none font-headline-sm text-headline-sm text-primary font-medium">
<span class="">{{ $page->text('text_114') }}</span>
<span aria-hidden="true" class="text-[20px] transition-transform duration-300 group-open:rotate-180 text-secondary font-symbols font-normal not-italic leading-none normal-case whitespace-nowrap [font-feature-settings:'liga'] [word-wrap:normal]">expand_more</span>
</summary>
<div class="mt-space-sm pt-space-sm border-t border-outline-variant/20 font-body-md text-body-md text-on-surface-variant leading-relaxed">{{ $page->text('text_115') }}</div>
</details>
<details class="group bg-surface-container-lowest rounded-[1rem] p-space-md shadow-sm transition-all">
<summary class="flex items-center justify-between cursor-pointer list-none select-none font-headline-sm text-headline-sm text-primary font-medium">
<span class="">{{ $page->text('text_116') }}</span>
<span aria-hidden="true" class="text-[20px] transition-transform duration-300 group-open:rotate-180 text-secondary font-symbols font-normal not-italic leading-none normal-case whitespace-nowrap [font-feature-settings:'liga'] [word-wrap:normal]">expand_more</span>
</summary>
<div class="mt-space-sm pt-space-sm border-t border-outline-variant/20 font-body-md text-body-md text-on-surface-variant leading-relaxed">{{ $page->text('text_117') }}</div>
</details>
<details class="group bg-surface-container-lowest rounded-[1rem] p-space-md shadow-sm transition-all">
<summary class="flex items-center justify-between cursor-pointer list-none select-none font-headline-sm text-headline-sm text-primary font-medium">
<span class="">{{ $page->text('text_118') }}</span>
<span aria-hidden="true" class="text-[20px] transition-transform duration-300 group-open:rotate-180 text-secondary font-symbols font-normal not-italic leading-none normal-case whitespace-nowrap [font-feature-settings:'liga'] [word-wrap:normal]">expand_more</span>
</summary>
<div class="mt-space-sm pt-space-sm border-t border-outline-variant/20 font-body-md text-body-md text-on-surface-variant leading-relaxed">{{ $page->text('text_119') }}</div>
</details>
</div>
</div>
</section>

<section class="w-full bg-[#FAF9F5] py-space-xl">
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
<div class="relative bg-primary text-on-primary rounded-[3rem] p-space-lg lg:p-space-xl overflow-hidden shadow-xl">

<div class="absolute -right-20 -bottom-20 w-80 h-80 rounded-full bg-primary-container blur-2xl pointer-events-none"></div>
<div class="absolute -left-10 -top-10 w-60 h-60 rounded-full bg-secondary blur-3xl opacity-30 pointer-events-none"></div>
<div class="relative z-10 grid grid-cols-1 lg:grid-cols-12 gap-space-lg items-center">
<div class="lg:col-span-8">
<span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-tertiary-fixed text-primary font-label-sm text-label-sm font-bold uppercase mb-space-sm">
<span aria-hidden="true" class="text-[16px] font-symbols font-normal not-italic leading-none normal-case whitespace-nowrap [font-feature-settings:'liga'] [word-wrap:normal]">support_agent</span>{{ $page->text('text_120') }}</span>
<h2 class="font-headline-xl text-headline-xl font-normal leading-tight mb-space-xs text-white">{{ $page->text('text_121') }}</h2>
<p class="font-body-lg text-body-lg text-on-primary-container max-w-2xl leading-relaxed">{{ $page->text('text_122') }}</p>
<div class="flex flex-wrap items-center gap-space-md pt-space-md">
<div class="flex items-center gap-2 text-white">
<span aria-hidden="true" class="text-tertiary-fixed text-[20px] font-symbols font-normal not-italic leading-none normal-case whitespace-nowrap [font-feature-settings:'liga'] [word-wrap:normal]">schedule</span>
<span class="font-body-sm text-body-sm">{{ $page->text('text_123') }}</span>
</div>
<div class="flex items-center gap-2 text-white">
<span aria-hidden="true" class="text-tertiary-fixed text-[20px] font-symbols font-normal not-italic leading-none normal-case whitespace-nowrap [font-feature-settings:'liga'] [word-wrap:normal]">location_on</span>
<span class="font-body-sm text-body-sm">{{ $page->text('text_124') }}</span>
</div>
</div>
</div>

<div class="lg:col-span-4 flex flex-col gap-space-sm">
<a class="w-full inline-flex items-center justify-center gap-space-xs py-3.5 px-space-md rounded-full bg-tertiary-fixed text-primary font-label-lg text-label-lg font-bold hover:brightness-105 transition-all shadow-md" href="https://wa.me/628123456789" target="_blank">
<span aria-hidden="true" class="text-[20px] font-symbols font-normal not-italic leading-none normal-case whitespace-nowrap [font-feature-settings:'liga'] [word-wrap:normal]">chat</span>
<span class="">{{ $page->text('text_125') }}</span>
</a>
<a class="w-full inline-flex items-center justify-center gap-space-xs py-3 px-space-md rounded-full bg-primary-container text-white border border-outline-variant/30 font-label-md text-label-md font-semibold hover:bg-surface-tint transition-colors" href="tel:+622112345678">
<span aria-hidden="true" class="text-[18px] font-symbols font-normal not-italic leading-none normal-case whitespace-nowrap [font-feature-settings:'liga'] [word-wrap:normal]">call</span>
<span class="">{{ $page->text('text_126') }}</span>
</a>
<a class="w-full inline-flex items-center justify-center gap-space-xs py-3 px-space-md rounded-full bg-transparent text-white hover:bg-white/10 font-label-md text-label-md transition-colors" href="/kontak#formulir" type="button">
<span aria-hidden="true" class="text-[18px] font-symbols font-normal not-italic leading-none normal-case whitespace-nowrap [font-feature-settings:'liga'] [word-wrap:normal]">calendar_add_on</span>
<span class="">{{ $page->text('text_127') }}</span>
</a>
</div>
</div>
</div>
</div>
</section>




</div>
</main>
@endsection
