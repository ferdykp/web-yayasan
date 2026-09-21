@props(['item'])
@php($category = data_get($item->data, 'category', 'Berita'))
<article class="article-card flex flex-col rounded-[1rem] bg-surface-container-lowest overflow-hidden shadow-sm hover:shadow-lg transition-all duration-300" data-category="{{ $category }}">
<div class="relative h-56 overflow-hidden"><img alt="{{ $item->title }}" class="w-full h-full object-cover transition-transform duration-500 hover:scale-105" decoding="async" loading="lazy" src="{{ $item->image_url }}"/>

<div class="absolute top-4 left-4 px-3 py-1 rounded-full bg-surface-container-lowest/95 backdrop-blur-sm shadow-xs font-label-sm text-label-sm font-bold text-secondary uppercase">{{ $category }}</div>
</div>
<div class="p-space-lg flex-1 flex flex-col justify-between">
<div class="">
<div class="flex items-center gap-2 text-secondary font-label-md text-label-md mb-2">
<span aria-hidden="true" class="text-[16px] font-symbols font-normal not-italic leading-none normal-case whitespace-nowrap [font-feature-settings:'liga'] [word-wrap:normal]">calendar_today</span>
<span class="">{{ $item->published_at?->translatedFormat('d F Y') }}</span>
</div>
<a href="{{ $item->public_url }}"><h4 class="font-headline-md text-headline-md font-serif text-primary leading-snug mb-space-xs hover:text-primary-container transition-colors cursor-pointer">{{ $item->title }}</h4></a>
<p class="font-body-md text-body-md text-on-surface-variant line-clamp-3 leading-relaxed mb-space-md">{{ $item->description }}</p>
</div>
<div class="pt-space-sm border-t border-surface-container flex items-center justify-between">
<span class="font-label-sm text-label-sm text-secondary truncate max-w-[180px]">{{ data_get($item->data, 'author', 'Tim Redaksi') }}</span>
<a class="font-label-md text-label-md font-bold text-primary flex items-center gap-1 hover:text-secondary transition-colors" href="{{ $item->public_url }}">{{ $item->text('text_4', 'Baca selengkapnya') }}<span aria-hidden="true" class="text-[16px] font-symbols font-normal not-italic leading-none normal-case whitespace-nowrap [font-feature-settings:'liga'] [word-wrap:normal]">arrow_forward</span>
</a>
</div>
</div>
</article>
