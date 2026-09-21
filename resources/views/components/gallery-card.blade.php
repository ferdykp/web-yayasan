@props(['item'])
<article class="gallery-item group flex flex-col rounded-[3rem] overflow-hidden bg-surface-container-lowest shadow-sm hover:shadow-xl transition-all duration-300" data-category="harian">
<div class="relative overflow-hidden aspect-[4/3] bg-surface-container"><img alt="{{ $item->title }}" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105" decoding="async" loading="lazy" src="{{ $item->image_url }}"/>

<span class="absolute top-space-sm left-space-sm px-space-md py-space-xs rounded-full bg-surface-container-lowest/90 backdrop-blur-md text-primary font-label-sm text-label-sm uppercase font-bold">{{ $item->text('text_1') }}</span>
<span class="absolute bottom-space-sm right-space-sm px-space-sm py-1 rounded-[1rem] bg-inverse-surface/80 text-inverse-on-surface font-label-sm text-label-sm">{{ $item->text('text_2') }}</span>
</div>
<div class="p-space-lg flex flex-col flex-grow justify-between bg-surface-container-low/40">
<div class="">
<a href="{{ $item->public_url }}"><h3 class="font-headline-sm text-headline-sm text-primary group-hover:text-primary-container transition-colors mb-space-xs">{{ $item->title }}</h3></a>
<p class="font-body-md text-body-md text-on-surface-variant leading-relaxed mb-space-md">{{ $item->description }}</p>
</div>
<div class="flex items-center justify-between pt-space-sm border-t border-outline-variant/30 text-secondary font-label-md text-label-md">
<span class="flex items-center gap-space-xs">
<span aria-hidden="true" class="text-[16px] font-symbols font-normal not-italic leading-none normal-case whitespace-nowrap [font-feature-settings:'liga'] [word-wrap:normal]">photo_camera</span>{{ $item->text('text_3') }}</span>
<span class="text-primary font-bold">{{ $item->text('text_4') }}</span>
</div>
</div>
</article>