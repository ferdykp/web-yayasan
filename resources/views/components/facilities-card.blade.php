@props(['item'])
<article class="facility-card flex flex-col rounded-[2rem] overflow-hidden shadow-sm hover:shadow-md transition-all duration-300 bg-surface-container-lowest border border-outline-variant/40" data-item-category="akademik">
<div class="relative h-60 w-full overflow-hidden bg-surface-container"><img alt="{{ $item->title }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" decoding="async" loading="lazy" src="{{ $item->image_url }}"/>

<div class="absolute top-space-sm left-space-sm flex gap-space-xs">
<span class="bg-primary text-on-primary font-label-sm text-label-sm px-space-sm py-1 rounded-full uppercase tracking-wider">{{ $item->text('text_1') }}</span>
<span class="bg-surface-container-lowest/90 backdrop-blur-sm text-secondary font-label-sm text-label-sm px-space-sm py-1 rounded-full font-semibold">{{ $item->text('text_2') }}</span>
</div>
<div class="absolute bottom-space-sm right-space-sm bg-surface-container-lowest/90 backdrop-blur-sm text-primary font-label-sm text-label-sm px-space-sm py-0.5 rounded-full flex items-center gap-1 font-semibold">
<span aria-hidden="true" class="text-[16px] font-symbols font-normal not-italic leading-none normal-case whitespace-nowrap [font-feature-settings:'liga'] [word-wrap:normal]">groups</span>{{ $item->text('text_3') }}</div>
</div>
<div class="p-space-lg flex flex-col flex-grow justify-between">
<div class="">
<div class="flex items-center gap-space-xs text-secondary mb-space-xs">
<span aria-hidden="true" class="text-[18px] font-symbols font-normal not-italic leading-none normal-case whitespace-nowrap [font-feature-settings:'liga'] [word-wrap:normal]">biotech</span>
<span class="font-label-sm text-label-sm uppercase tracking-wider">{{ $item->text('text_4') }}</span>
</div>
<a href="{{ $item->public_url }}"><h3 class="font-headline-md text-headline-md text-primary font-medium mb-space-xs">{{ $item->title }}</h3></a>
<p class="font-body-md text-body-md text-on-surface-variant mb-space-md">{{ $item->description }}</p>
</div>
<div class="pt-space-md border-t border-outline-variant/30 flex items-center justify-between">
<span class="font-body-sm text-body-sm text-secondary flex items-center gap-1">
<span aria-hidden="true" class="text-[16px] font-symbols font-normal not-italic leading-none normal-case whitespace-nowrap [font-feature-settings:'liga'] [word-wrap:normal]">verified</span>{{ $item->text('text_5') }}</span>
<a class="text-primary font-label-lg text-label-lg font-bold hover:text-primary-container flex items-center gap-1" href="{{ $item->public_url }}">{{ $item->text('text_6') }}<span aria-hidden="true" class="text-[16px] font-symbols font-normal not-italic leading-none normal-case whitespace-nowrap [font-feature-settings:'liga'] [word-wrap:normal]">chevron_right</span>
</a>
</div>
</div>
</article>