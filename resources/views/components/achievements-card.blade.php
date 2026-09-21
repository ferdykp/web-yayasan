@props(['item'])
<div class="prestasi-card bg-surface-container-lowest rounded-[2rem] p-space-md shadow-sm hover:shadow-md transition-all flex flex-col justify-between" data-category="sains" data-level="sma">
<div class="">
<div class="flex items-center justify-between mb-2">
<span class="inline-flex items-center gap-1 text-primary bg-surface-container px-2 py-0.5 rounded-full font-label-sm text-label-sm">
<span aria-hidden="true" class="text-[14px] font-symbols font-normal not-italic leading-none normal-case whitespace-nowrap [font-feature-settings:'liga'] [word-wrap:normal]">military_tech</span>{{ $item->text('text_1') }}</span>
<span class="font-label-sm text-label-sm text-secondary">{{ $item->text('text_2') }}</span>
</div>
<a href="{{ $item->public_url }}"><h4 class="font-headline-sm text-headline-sm text-primary mb-1">{{ $item->title }}</h4></a>
<p class="font-body-md text-body-md text-on-surface-variant mb-space-sm line-clamp-2">{{ $item->description }}</p>
</div>
<div class="bg-surface-container-low p-space-sm rounded-[1rem] text-on-surface">
<p class="font-body-sm text-body-sm font-bold text-primary">{{ $item->text('text_3') }}</p>
<p class="font-body-sm text-body-sm text-secondary">{{ $item->text('text_4') }}</p>
</div>
</div>