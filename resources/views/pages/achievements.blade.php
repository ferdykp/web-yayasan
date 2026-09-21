@extends('layouts.public')
@section('content')
<main class="pt-20 min-h-screen" id="main-content"><div class="flex flex-col w-full">

<section class="relative w-full bg-surface-container-lowest px-gutter py-space-xl overflow-hidden">

<div class="absolute -top-32 -right-32 w-96 h-96 rounded-full bg-surface-container-highest/60 blur-3xl pointer-events-none"></div>
<div class="absolute top-1/2 -left-24 w-80 h-80 rounded-full bg-secondary-container/40 blur-3xl pointer-events-none"></div>
<div class="max-w-7xl mx-auto relative z-10">
<div class="grid grid-cols-1 lg:grid-cols-12 gap-gutter items-center">

<div class="lg:col-span-7 flex flex-col gap-space-md">
<div class="inline-flex items-center gap-space-xs self-start px-space-md py-1 rounded-full bg-surface-container-high text-primary font-label-sm text-label-sm uppercase tracking-wider">
<span class="w-2 h-2 rounded-full bg-primary-container"></span>
<span class="">{{ $page->text('text_1') }}</span>
</div>
<h1 class="font-headline-2xl text-headline-2xl text-primary font-normal leading-tight tracking-tight">{{ $page->text('text_2') }}<span class="italic font-serif">{{ $page->text('text_3') }}</span>{{ $page->text('text_4') }}</h1>
<p class="font-body-xl text-body-xl text-on-surface-variant max-w-2xl leading-relaxed">{{ $page->text('text_5') }}</p>
<div class="flex flex-wrap items-center gap-space-md pt-space-xs">
<a class="inline-flex items-center gap-space-xs px-space-lg py-space-sm rounded-full bg-primary text-on-primary font-label-lg text-label-lg hover:bg-primary-container transition-all duration-200 shadow-sm" href="#direktori-prestasi">
<span class="">{{ $page->text('text_6') }}</span>
<span aria-hidden="true" class="text-[18px] font-symbols font-normal not-italic leading-none normal-case whitespace-nowrap [font-feature-settings:'liga'] [word-wrap:normal]">south</span>
</a>
<a class="inline-flex items-center gap-space-xs px-space-lg py-space-sm rounded-full bg-surface-container text-primary font-label-lg text-label-lg hover:bg-surface-container-high transition-colors" href="#inkubasi-talenta">
<span class="">{{ $page->text('text_7') }}</span>
<span aria-hidden="true" class="text-[18px] font-symbols font-normal not-italic leading-none normal-case whitespace-nowrap [font-feature-settings:'liga'] [word-wrap:normal]">psychology</span>
</a>
</div>
</div>

<div class="lg:col-span-5 relative mt-space-lg lg:mt-0">
<div class="relative mx-auto max-w-md lg:max-w-none">

<div class="relative rounded-[2rem] overflow-hidden bg-surface-container shadow-md aspect-[4/5]">
<img alt="Indonesian high school and middle school students wearing modern neat school uniforms holding science competition trophies and smiling warmly together with their teacher mentor in a bright contemporary botanical campus courtyard with soft afternoon lighting and deep green academic atmosphere." class="w-full h-full object-cover" decoding="async" fetchpriority="high" loading="eager" src="{{ $page->media('image_1') }}"/>
<div class="absolute inset-0 bg-gradient-to-t from-primary/60 via-transparent to-transparent"></div>
<div class="absolute bottom-6 left-6 right-6 text-on-primary">
<span class="font-label-sm text-label-sm text-tertiary-fixed uppercase tracking-wider block">{{ $page->text('text_8') }}</span>
<p class="font-headline-sm text-headline-sm italic font-serif">{{ $page->text('text_9') }}</p>
</div>
</div>

<div class="absolute -bottom-6 -left-6 bg-surface-container-lowest p-space-md rounded-[1rem] shadow-lg max-w-[240px] hidden sm:block">
<div class="flex items-center gap-space-xs text-primary mb-1">
<span aria-hidden="true" class="text-[20px] font-symbols font-normal not-italic leading-none normal-case whitespace-nowrap [font-feature-settings:'liga'] [word-wrap:normal] [font-variation-settings:'FILL'_1]">workspace_premium</span>
<span class="font-label-md text-label-md font-bold uppercase tracking-wider">{{ $page->text('text_10') }}</span>
</div>
<p class="font-body-sm text-body-sm text-on-surface-variant italic font-serif">{{ $page->text('text_11') }}</p>
</div>
</div>
</div>
</div>

<div class="mt-space-xl pt-space-lg bg-surface-container-low rounded-[2rem] p-space-lg">
<div class="grid grid-cols-2 md:grid-cols-4 gap-gutter text-center md:text-left divide-y md:divide-y-0 md:divide-x divide-outline-variant/30">
<div class="px-space-md py-space-xs">
<span class="font-headline-2xl text-headline-xl text-primary font-bold block leading-none">{{ $page->text('text_12') }}</span>
<span class="font-label-md text-label-md text-secondary uppercase tracking-wider mt-1 block">{{ $page->text('text_13') }}</span>
<p class="font-body-sm text-body-sm text-on-surface-variant mt-1 hidden sm:block">{{ $page->text('text_14') }}</p>
</div>
<div class="px-space-md py-space-xs pt-space-sm md:pt-space-xs">
<span class="font-headline-2xl text-headline-xl text-primary font-bold block leading-none">{{ $page->text('text_15') }}</span>
<span class="font-label-md text-label-md text-secondary uppercase tracking-wider mt-1 block">{{ $page->text('text_16') }}</span>
<p class="font-body-sm text-body-sm text-on-surface-variant mt-1 hidden sm:block">{{ $page->text('text_17') }}</p>
</div>
<div class="px-space-md py-space-xs pt-space-sm md:pt-space-xs">
<span class="font-headline-2xl text-headline-xl text-primary font-bold block leading-none">{{ $page->text('text_18') }}</span>
<span class="font-label-md text-label-md text-secondary uppercase tracking-wider mt-1 block">{{ $page->text('text_19') }}</span>
<p class="font-body-sm text-body-sm text-on-surface-variant mt-1 hidden sm:block">{{ $page->text('text_20') }}</p>
</div>
<div class="px-space-md py-space-xs pt-space-sm md:pt-space-xs">
<span class="font-headline-2xl text-headline-xl text-primary font-bold block leading-none">{{ $page->text('text_21') }}</span>
<span class="font-label-md text-label-md text-secondary uppercase tracking-wider mt-1 block">{{ $page->text('text_22') }}</span>
<p class="font-body-sm text-body-sm text-on-surface-variant mt-1 hidden sm:block">{{ $page->text('text_23') }}</p>
</div>
</div>
</div>
</div>
</section>

<section class="w-full bg-surface-container-lowest px-gutter py-space-xl">
<div class="max-w-7xl mx-auto">
<div class="flex flex-col md:flex-row md:items-end justify-between gap-space-md mb-space-lg">
<div class="">
<span class="font-label-sm text-label-sm text-secondary uppercase tracking-wider block mb-1">{{ $page->text('text_24') }}</span>
<h2 class="font-headline-xl text-headline-xl text-primary font-normal">{{ $page->text('text_25') }}</h2>
</div>
<p class="font-body-md text-body-md text-on-surface-variant max-w-md">{{ $page->text('text_26') }}</p>
</div>

<div class="grid grid-cols-1 lg:grid-cols-12 gap-gutter">

<div class="lg:col-span-7 bg-surface-container-low rounded-[2rem] p-space-lg flex flex-col justify-between shadow-sm hover:shadow-md transition-shadow">
<div class="">
<div class="relative h-64 md:h-80 w-full rounded-[1rem] overflow-hidden mb-space-md bg-surface-container">
<img alt="Two Indonesian high school students, a boy and a girl, holding gold medals and certificates of national science olympiad next to their biology teacher inside a well equipped modern laboratory filled with microscopes and glassware, bright natural morning daylight, scholarly atmosphere." class="w-full h-full object-cover" decoding="async" loading="lazy" src="{{ $page->media('image_2') }}"/>
<div class="absolute top-4 left-4 bg-tertiary-fixed text-primary px-space-md py-1 rounded-full font-label-sm text-label-sm font-bold uppercase tracking-wider shadow-sm flex items-center gap-1">
<span aria-hidden="true" class="text-[16px] font-symbols font-normal not-italic leading-none normal-case whitespace-nowrap [font-feature-settings:'liga'] [word-wrap:normal]">stars</span>{{ $page->text('text_27') }}</div>
<div class="absolute bottom-4 right-4 bg-surface-container-lowest/90 backdrop-blur-sm text-on-surface px-space-sm py-1 rounded-full font-label-md text-label-md">{{ $page->text('text_28') }}</div>
</div>
<div class="flex items-center gap-space-xs text-secondary font-label-md text-label-md mb-1">
<span class="">{{ $page->text('text_29') }}</span>
<span class="">{{ $page->text('text_30') }}</span>
<span class="">{{ $page->text('text_31') }}</span>
</div>
<h3 class="font-headline-lg text-headline-lg text-primary font-medium mb-space-xs">{{ $page->text('text_32') }}</h3>
<p class="font-body-md text-body-md text-on-surface-variant mb-space-md">{{ $page->text('text_33') }}</p>
</div>
<div class="bg-surface-container-lowest p-space-md rounded-[1rem]">
<div class="flex flex-col sm:flex-row sm:items-center justify-between gap-space-sm">
<div class="">
<span class="font-label-sm text-label-sm text-secondary uppercase block">{{ $page->text('text_34') }}</span>
<span class="font-headline-sm text-headline-sm text-primary font-semibold">{{ $page->text('text_35') }}</span>
</div>
<div class="">
<span class="font-label-sm text-label-sm text-secondary uppercase block">{{ $page->text('text_36') }}</span>
<span class="font-body-md text-body-md font-semibold text-primary">{{ $page->text('text_37') }}</span>
</div>
</div>
<p class="font-body-sm text-body-sm text-on-surface-variant italic mt-space-sm border-t border-outline-variant/30 pt-space-xs">{{ $page->text('text_38') }}</p>
</div>
</div>

<div class="lg:col-span-5 bg-surface-container-low rounded-[2rem] p-space-lg flex flex-col justify-between shadow-sm hover:shadow-md transition-shadow">
<div class="">
<div class="relative h-56 md:h-64 w-full rounded-[1rem] overflow-hidden mb-space-md bg-surface-container">
<img alt="Junior high school student team in Indonesia showing their custom autonomous robotics rover on an international competition arena in Singapore, excited expressions holding a first place championship trophy, technological educational aesthetic, modern biophilic colors." class="w-full h-full object-cover" decoding="async" loading="lazy" src="{{ $page->media('image_3') }}"/>
<div class="absolute top-4 left-4 bg-tertiary-fixed text-primary px-space-md py-1 rounded-full font-label-sm text-label-sm font-bold uppercase tracking-wider shadow-sm flex items-center gap-1">
<span aria-hidden="true" class="text-[16px] font-symbols font-normal not-italic leading-none normal-case whitespace-nowrap [font-feature-settings:'liga'] [word-wrap:normal]">public</span>{{ $page->text('text_39') }}</div>
<div class="absolute bottom-4 right-4 bg-surface-container-lowest/90 backdrop-blur-sm text-on-surface px-space-sm py-1 rounded-full font-label-md text-label-md">{{ $page->text('text_40') }}</div>
</div>
<div class="flex items-center gap-space-xs text-secondary font-label-md text-label-md mb-1">
<span class="">{{ $page->text('text_41') }}</span>
</div>
<h3 class="font-headline-md text-headline-md text-primary font-medium mb-space-xs">{{ $page->text('text_42') }}</h3>
<p class="font-body-md text-body-md text-on-surface-variant mb-space-md">{{ $page->text('text_43') }}</p>
</div>
<div class="bg-surface-container-lowest p-space-md rounded-[1rem]">
<div class="flex flex-col sm:flex-row sm:items-center justify-between gap-space-sm">
<div class="">
<span class="font-label-sm text-label-sm text-secondary uppercase block">{{ $page->text('text_44') }}</span>
<span class="font-headline-sm text-headline-sm text-primary font-semibold">{{ $page->text('text_45') }}</span>
</div>
<div class="">
<span class="font-label-sm text-label-sm text-secondary uppercase block">{{ $page->text('text_46') }}</span>
<span class="font-body-md text-body-md font-semibold text-primary">{{ $page->text('text_47') }}</span>
</div>
</div>
<p class="font-body-sm text-body-sm text-on-surface-variant italic mt-space-sm border-t border-outline-variant/30 pt-space-xs">{{ $page->text('text_48') }}</p>
</div>
</div>

<div class="lg:col-span-6 bg-surface-container-low rounded-[2rem] p-space-lg flex flex-col justify-between shadow-sm hover:shadow-md transition-shadow">
<div class="">
<div class="relative h-56 md:h-64 w-full rounded-[1rem] overflow-hidden mb-space-md bg-surface-container">
<img alt="Elementary school girls in vibrant traditional Indonesian Saman and Ratoh Jaroe dance costumes, smiling gracefully on an amphitheater stage with golden trophy after winning national cultural arts competition, warm festive stage illumination, artistic pride." class="w-full h-full object-cover" decoding="async" loading="lazy" src="{{ $page->media('image_4') }}"/>
<div class="absolute top-4 left-4 bg-tertiary-fixed text-primary px-space-md py-1 rounded-full font-label-sm text-label-sm font-bold uppercase tracking-wider shadow-sm flex items-center gap-1">
<span aria-hidden="true" class="text-[16px] font-symbols font-normal not-italic leading-none normal-case whitespace-nowrap [font-feature-settings:'liga'] [word-wrap:normal]">palette</span>{{ $page->text('text_49') }}</div>
<div class="absolute bottom-4 right-4 bg-surface-container-lowest/90 backdrop-blur-sm text-on-surface px-space-sm py-1 rounded-full font-label-md text-label-md">{{ $page->text('text_50') }}</div>
</div>
<div class="flex items-center gap-space-xs text-secondary font-label-md text-label-md mb-1">
<span class="">{{ $page->text('text_51') }}</span>
</div>
<h3 class="font-headline-md text-headline-md text-primary font-medium mb-space-xs">{{ $page->text('text_52') }}</h3>
<p class="font-body-md text-body-md text-on-surface-variant mb-space-md">{{ $page->text('text_53') }}</p>
</div>
<div class="bg-surface-container-lowest p-space-md rounded-[1rem]">
<div class="flex flex-col sm:flex-row sm:items-center justify-between gap-space-sm">
<div class="">
<span class="font-label-sm text-label-sm text-secondary uppercase block">{{ $page->text('text_54') }}</span>
<span class="font-headline-sm text-headline-sm text-primary font-semibold">{{ $page->text('text_55') }}</span>
</div>
<div class="">
<span class="font-label-sm text-label-sm text-secondary uppercase block">{{ $page->text('text_56') }}</span>
<span class="font-body-md text-body-md font-semibold text-primary">{{ $page->text('text_57') }}</span>
</div>
</div>
<p class="font-body-sm text-body-sm text-on-surface-variant italic mt-space-sm border-t border-outline-variant/30 pt-space-xs">{{ $page->text('text_58') }}</p>
</div>
</div>

<div class="lg:col-span-6 bg-surface-container-low rounded-[2rem] p-space-lg flex flex-col justify-between shadow-sm hover:shadow-md transition-shadow">
<div class="">
<div class="relative h-56 md:h-64 w-full rounded-[1rem] overflow-hidden mb-space-md bg-surface-container">
<img alt="Indonesian high school student delivering an eloquent speech behind a formal diplomatic committee podium at a Singapore Model United Nations conference, dressed in professional formal attire holding diplomacy award plaque with poise and confidence." class="w-full h-full object-cover" decoding="async" loading="lazy" src="{{ $page->media('image_5') }}"/>
<div class="absolute top-4 left-4 bg-tertiary-fixed text-primary px-space-md py-1 rounded-full font-label-sm text-label-sm font-bold uppercase tracking-wider shadow-sm flex items-center gap-1">
<span aria-hidden="true" class="text-[16px] font-symbols font-normal not-italic leading-none normal-case whitespace-nowrap [font-feature-settings:'liga'] [word-wrap:normal]">record_voice_over</span>{{ $page->text('text_59') }}</div>
<div class="absolute bottom-4 right-4 bg-surface-container-lowest/90 backdrop-blur-sm text-on-surface px-space-sm py-1 rounded-full font-label-md text-label-md">{{ $page->text('text_60') }}</div>
</div>
<div class="flex items-center gap-space-xs text-secondary font-label-md text-label-md mb-1">
<span class="">{{ $page->text('text_61') }}</span>
</div>
<h3 class="font-headline-md text-headline-md text-primary font-medium mb-space-xs">{{ $page->text('text_62') }}</h3>
<p class="font-body-md text-body-md text-on-surface-variant mb-space-md">{{ $page->text('text_63') }}</p>
</div>
<div class="bg-surface-container-lowest p-space-md rounded-[1rem]">
<div class="flex flex-col sm:flex-row sm:items-center justify-between gap-space-sm">
<div class="">
<span class="font-label-sm text-label-sm text-secondary uppercase block">{{ $page->text('text_64') }}</span>
<span class="font-headline-sm text-headline-sm text-primary font-semibold">{{ $page->text('text_65') }}</span>
</div>
<div class="">
<span class="font-label-sm text-label-sm text-secondary uppercase block">{{ $page->text('text_66') }}</span>
<span class="font-body-md text-body-md font-semibold text-primary">{{ $page->text('text_67') }}</span>
</div>
</div>
<p class="font-body-sm text-body-sm text-on-surface-variant italic mt-space-sm border-t border-outline-variant/30 pt-space-xs">{{ $page->text('text_68') }}</p>
</div>
</div>
</div>
</div>
</section>

<section class="w-full bg-surface-container px-gutter py-space-xl" id="direktori-prestasi">
<div class="max-w-7xl mx-auto">

<div class="text-center max-w-3xl mx-auto mb-space-lg">
<span class="font-label-sm text-label-sm text-secondary uppercase tracking-wider block mb-1">{{ $page->text('text_69') }}</span>
<h2 class="font-headline-xl text-headline-xl text-primary font-normal">{{ $page->text('text_70') }}</h2>
<p class="font-body-lg text-body-lg text-on-surface-variant mt-2">{{ $page->text('text_71') }}</p>
</div>

<div class="bg-surface-container-lowest rounded-[2rem] p-space-md shadow-sm mb-space-lg flex flex-col gap-space-md">

<div class="flex flex-wrap items-center gap-space-xs">
<span class="font-label-sm text-label-sm text-secondary uppercase tracking-wider w-24">{{ $page->text('text_72') }}</span>
<div class="flex flex-wrap gap-2" id="filter-level-group">




</div>
</div>

<div class="flex flex-wrap items-center gap-space-xs border-t border-outline-variant/30 pt-space-sm">
<span class="font-label-sm text-label-sm text-secondary uppercase tracking-wider w-24">{{ $page->text('text_73') }}</span>
<div class="flex flex-wrap gap-2" id="filter-category-group">






</div>
</div>

<div class="flex flex-wrap items-center justify-between gap-space-sm border-t border-outline-variant/30 pt-space-sm">
<div class="flex items-center gap-space-xs">
<span class="font-label-sm text-label-sm text-secondary uppercase tracking-wider w-24">{{ $page->text('text_74') }}</span>
<div class="flex gap-2">



</div>
</div>
<div class="text-secondary font-body-sm text-body-sm">{{ $page->text('text_75') }}<span class="font-bold text-primary" id="record-count">{{ $page->text('text_76') }}</span>{{ $page->text('text_77') }}</div>
</div>
</div>

<x-content-filters :categories="$categories" /><div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-gutter" id="koleksi">
















@foreach($items as $item)
<x-achievements-card :item="$item" />
@endforeach</div><div class="my-8">{{ $items->withQueryString()->links() }}</div>
</div>
</section>

<section class="w-full bg-surface-container-lowest px-gutter py-space-xl" id="inkubasi-talenta">
<div class="max-w-7xl mx-auto">
<div class="grid grid-cols-1 lg:grid-cols-12 gap-gutter items-center mb-space-xl">
<div class="lg:col-span-6">
<span class="font-label-sm text-label-sm text-secondary uppercase tracking-wider block mb-1">{{ $page->text('text_78') }}</span>
<h2 class="font-headline-xl text-headline-xl text-primary font-normal leading-tight">{{ $page->text('text_79') }}</h2>
</div>
<div class="lg:col-span-6">
<p class="font-body-lg text-body-lg text-on-surface-variant leading-relaxed">{{ $page->text('text_80') }}</p>
</div>
</div>

<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-gutter relative">

<div class="bg-surface-container-low rounded-[2rem] p-space-lg flex flex-col justify-between relative group hover:bg-surface-container transition-colors">
<div class="">
<div class="w-12 h-12 rounded-full bg-primary-container text-tertiary-fixed flex items-center justify-center font-headline-sm text-headline-sm font-bold mb-space-md">{{ $page->text('text_81') }}</div>
<h3 class="font-headline-sm text-headline-sm text-primary font-semibold mb-2">{{ $page->text('text_82') }}</h3>
<p class="font-body-md text-body-md text-on-surface-variant">{{ $page->text('text_83') }}</p>
</div>
<div class="pt-space-md flex items-center gap-2 text-primary font-label-sm text-label-sm uppercase tracking-wider">
<span aria-hidden="true" class="text-[18px] font-symbols font-normal not-italic leading-none normal-case whitespace-nowrap [font-feature-settings:'liga'] [word-wrap:normal]">travel_explore</span>
<span class="">{{ $page->text('text_84') }}</span>
</div>
</div>

<div class="bg-surface-container-low rounded-[2rem] p-space-lg flex flex-col justify-between relative group hover:bg-surface-container transition-colors">
<div class="">
<div class="w-12 h-12 rounded-full bg-primary-container text-tertiary-fixed flex items-center justify-center font-headline-sm text-headline-sm font-bold mb-space-md">{{ $page->text('text_85') }}</div>
<h3 class="font-headline-sm text-headline-sm text-primary font-semibold mb-2">{{ $page->text('text_86') }}</h3>
<p class="font-body-md text-body-md text-on-surface-variant">{{ $page->text('text_87') }}</p>
</div>
<div class="pt-space-md flex items-center gap-2 text-primary font-label-sm text-label-sm uppercase tracking-wider">
<span aria-hidden="true" class="text-[18px] font-symbols font-normal not-italic leading-none normal-case whitespace-nowrap [font-feature-settings:'liga'] [word-wrap:normal]">biotech</span>
<span class="">{{ $page->text('text_88') }}</span>
</div>
</div>

<div class="bg-surface-container-low rounded-[2rem] p-space-lg flex flex-col justify-between relative group hover:bg-surface-container transition-colors">
<div class="">
<div class="w-12 h-12 rounded-full bg-primary-container text-tertiary-fixed flex items-center justify-center font-headline-sm text-headline-sm font-bold mb-space-md">{{ $page->text('text_89') }}</div>
<h3 class="font-headline-sm text-headline-sm text-primary font-semibold mb-2">{{ $page->text('text_90') }}</h3>
<p class="font-body-md text-body-md text-on-surface-variant">{{ $page->text('text_91') }}</p>
</div>
<div class="pt-space-md flex items-center gap-2 text-primary font-label-sm text-label-sm uppercase tracking-wider">
<span aria-hidden="true" class="text-[18px] font-symbols font-normal not-italic leading-none normal-case whitespace-nowrap [font-feature-settings:'liga'] [word-wrap:normal]">mindfulness</span>
<span class="">{{ $page->text('text_92') }}</span>
</div>
</div>

<div class="bg-surface-container-low rounded-[2rem] p-space-lg flex flex-col justify-between relative group hover:bg-surface-container transition-colors">
<div class="">
<div class="w-12 h-12 rounded-full bg-primary-container text-tertiary-fixed flex items-center justify-center font-headline-sm text-headline-sm font-bold mb-space-md">{{ $page->text('text_93') }}</div>
<h3 class="font-headline-sm text-headline-sm text-primary font-semibold mb-2">{{ $page->text('text_94') }}</h3>
<p class="font-body-md text-body-md text-on-surface-variant">{{ $page->text('text_95') }}</p>
</div>
<div class="pt-space-md flex items-center gap-2 text-primary font-label-sm text-label-sm uppercase tracking-wider">
<span aria-hidden="true" class="text-[18px] font-symbols font-normal not-italic leading-none normal-case whitespace-nowrap [font-feature-settings:'liga'] [word-wrap:normal]">workspace_premium</span>
<span class="">{{ $page->text('text_96') }}</span>
</div>
</div>
</div>

<div class="mt-space-lg bg-surface-container p-space-lg rounded-[2rem] flex flex-col md:flex-row items-center gap-space-md">
<div class="w-14 h-14 rounded-full bg-primary text-tertiary-fixed flex items-center justify-center flex-shrink-0">
<span aria-hidden="true" class="text-[28px] font-symbols font-normal not-italic leading-none normal-case whitespace-nowrap [font-feature-settings:'liga'] [word-wrap:normal]">format_quote</span>
</div>
<div class="flex-1">
<p class="font-headline-sm text-headline-sm text-primary italic font-serif">{{ $page->text('text_97') }}</p>
<span class="font-label-sm text-label-sm text-secondary uppercase tracking-wider mt-1 block">{{ $page->text('text_98') }}</span>
</div>
</div>
</div>
</section>

<section class="w-full bg-surface-container-lowest px-gutter py-space-xl">
<div class="max-w-7xl mx-auto">
<div class="relative bg-primary text-on-primary rounded-[3rem] overflow-hidden p-space-lg md:p-space-xl shadow-xl">

<div class="absolute -right-20 -bottom-20 w-96 h-96 rounded-full bg-primary-container blur-3xl opacity-50 pointer-events-none"></div>
<div class="absolute left-1/3 -top-20 w-80 h-80 rounded-full bg-tertiary-container blur-3xl opacity-30 pointer-events-none"></div>
<div class="relative z-10 grid grid-cols-1 lg:grid-cols-12 gap-gutter items-center">
<div class="lg:col-span-8 flex flex-col gap-space-sm">
<div class="inline-flex items-center gap-space-xs self-start px-space-md py-1 rounded-full bg-tertiary-fixed text-on-tertiary-fixed font-label-sm text-label-sm uppercase tracking-wider font-bold">
<span aria-hidden="true" class="text-[16px] font-symbols font-normal not-italic leading-none normal-case whitespace-nowrap [font-feature-settings:'liga'] [word-wrap:normal]">school</span>{{ $page->text('text_99') }}</div>
<h2 class="font-headline-2xl text-headline-xl md:text-headline-2xl font-normal leading-tight">{{ $page->text('text_100') }}</h2>
<p class="font-body-lg text-body-lg text-on-primary-container max-w-2xl leading-relaxed">{{ $page->text('text_101') }}</p>
<div class="flex flex-wrap items-center gap-space-md pt-space-sm">
<a class="inline-flex items-center gap-space-xs px-space-lg py-space-sm rounded-full bg-tertiary-fixed text-primary font-label-lg text-label-lg font-bold hover:bg-tertiary-fixed-dim transition-all duration-200 shadow-md" href="/ppdb">
<span class="">{{ $page->text('text_102') }}</span>
<span aria-hidden="true" class="text-[18px] font-symbols font-normal not-italic leading-none normal-case whitespace-nowrap [font-feature-settings:'liga'] [word-wrap:normal]">arrow_forward</span>
</a>
<a class="inline-flex items-center gap-space-xs px-space-lg py-space-sm rounded-full bg-primary-container text-on-primary font-label-lg text-label-lg hover:bg-primary transition-colors" href="/kontak">
<span class="">{{ $page->text('text_103') }}</span>
<span aria-hidden="true" class="text-[18px] font-symbols font-normal not-italic leading-none normal-case whitespace-nowrap [font-feature-settings:'liga'] [word-wrap:normal]">chat</span>
</a>
</div>
</div>
<div class="lg:col-span-4 flex flex-col gap-space-sm bg-primary-container/80 backdrop-blur-sm p-space-md rounded-[1rem]">
<span class="font-label-md text-label-md text-tertiary-fixed uppercase tracking-wider block">{{ $page->text('text_104') }}</span>
<ul class="space-y-2 font-body-sm text-body-sm text-on-primary-container">
<li class="flex items-start gap-2">
<span aria-hidden="true" class="text-[18px] text-tertiary-fixed flex-shrink-0 font-symbols font-normal not-italic leading-none normal-case whitespace-nowrap [font-feature-settings:'liga'] [word-wrap:normal]">check_circle</span>
<span class="">{{ $page->text('text_105') }}</span>
</li>
<li class="flex items-start gap-2">
<span aria-hidden="true" class="text-[18px] text-tertiary-fixed flex-shrink-0 font-symbols font-normal not-italic leading-none normal-case whitespace-nowrap [font-feature-settings:'liga'] [word-wrap:normal]">check_circle</span>
<span class="">{{ $page->text('text_106') }}</span>
</li>
<li class="flex items-start gap-2">
<span aria-hidden="true" class="text-[18px] text-tertiary-fixed flex-shrink-0 font-symbols font-normal not-italic leading-none normal-case whitespace-nowrap [font-feature-settings:'liga'] [word-wrap:normal]">check_circle</span>
<span class="">{{ $page->text('text_107') }}</span>
</li>
<li class="flex items-start gap-2">
<span aria-hidden="true" class="text-[18px] text-tertiary-fixed flex-shrink-0 font-symbols font-normal not-italic leading-none normal-case whitespace-nowrap [font-feature-settings:'liga'] [word-wrap:normal]">check_circle</span>
<span class="">{{ $page->text('text_108') }}</span>
</li>
</ul>
<div class="border-t border-outline-variant/20 pt-space-xs mt-1">
<span class="font-label-sm text-label-sm text-on-primary block">{{ $page->text('text_109') }}</span>
<span class="font-body-md text-body-md font-bold text-tertiary-fixed">{{ $page->text('text_110') }}</span>
</div>
</div>
</div>
</div>
</div>
</section>


</div></main>
@endsection
