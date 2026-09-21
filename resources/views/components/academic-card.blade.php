@props(['item'])
<div class="program-card bg-surface-container-lowest rounded-[2rem] overflow-hidden shadow-sm flex flex-col justify-between hover:shadow-md transition-all duration-300"
    data-levels="sd,smp,sma">
    <div class=""><img alt="{{ $item->title }}"
            class="object-cover w-full h-full transition-transform duration-500 group-hover:scale-105" decoding="async"
            loading="lazy" src="{{ $item->image_url }}" />
        <div class="relative w-full h-56 overflow-hidden">

            <div
                class="absolute py-1 font-bold rounded-full shadow-sm top-3 left-3 bg-surface-container-lowest/90 backdrop-blur-sm px-space-sm text-primary font-label-sm text-label-sm">
                {{ $item->text('text_1') }}</div>
        </div>
        <div class="p-space-lg">
            <div class="flex items-center gap-space-xs text-secondary mb-space-xs">
                <span aria-hidden="true"
                    class="text-[18px] font-symbols font-normal not-italic leading-none normal-case whitespace-nowrap [font-feature-settings:'liga'] [word-wrap:normal]">workspace_premium</span>
                <span class="tracking-wider uppercase font-label-sm text-label-sm">{{ $item->text('text_2') }}</span>
            </div>
            <a href="{{ $item->public_url }}">
                <h3 class="font-serif font-headline-sm text-headline-sm text-primary mb-space-xs">{{ $item->title }}
                </h3>
            </a>
            <p class="leading-relaxed font-body-md text-body-md text-on-surface-variant mb-space-md">
                {{ $item->description }}</p>
            <div class="flex flex-wrap gap-1.5">
                <span
                    class="px-2.5 py-1 rounded-full bg-surface-container-low text-primary font-label-sm text-label-sm">{{ $item->text('text_3') }}</span>
                <span
                    class="px-2.5 py-1 rounded-full bg-surface-container-low text-primary font-label-sm text-label-sm">{{ $item->text('text_4') }}</span>
            </div>
        </div>
    </div>
    <div class="pt-0 px-space-lg pb-space-lg">
        <a class="flex items-center justify-between w-full font-semibold transition-colors pt-space-sm text-primary font-label-lg text-label-lg hover:text-primary-container"
            href="{{ $item->public_url }}">
            <span class="">{{ $item->text('text_5') }}</span>
            <span aria-hidden="true"
                class="text-[18px] font-symbols font-normal not-italic leading-none normal-case whitespace-nowrap [font-feature-settings:'liga'] [word-wrap:normal]">arrow_forward</span>
        </a>
    </div>
</div>
