<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames((['item']));

foreach ($attributes->all() as $__key => $__value) {
    if (in_array($__key, $__propNames)) {
        $$__key = $$__key ?? $__value;
    } else {
        $__newAttributes[$__key] = $__value;
    }
}

$attributes = new \Illuminate\View\ComponentAttributeBag($__newAttributes);

unset($__propNames);
unset($__newAttributes);

foreach (array_filter((['item']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars, $__key, $__value); ?>
<article class="article-card flex flex-col rounded-[1rem] bg-surface-container-lowest overflow-hidden shadow-sm hover:shadow-lg transition-all duration-300" data-category="sd">
<div class="relative h-56 overflow-hidden"><img alt="<?php echo e($item->title); ?>" class="w-full h-full object-cover transition-transform duration-500 hover:scale-105" decoding="async" loading="lazy" src="<?php echo e($item->image_url); ?>"/>

<div class="absolute top-4 left-4 px-3 py-1 rounded-full bg-surface-container-lowest/95 backdrop-blur-sm shadow-xs font-label-sm text-label-sm font-bold text-secondary uppercase"><?php echo e($item->text('text_1')); ?></div>
</div>
<div class="p-space-lg flex-1 flex flex-col justify-between">
<div class="">
<div class="flex items-center gap-2 text-secondary font-label-md text-label-md mb-2">
<span aria-hidden="true" class="text-[16px] font-symbols font-normal not-italic leading-none normal-case whitespace-nowrap [font-feature-settings:'liga'] [word-wrap:normal]">calendar_today</span>
<span class=""><?php echo e($item->text('text_2')); ?></span>
</div>
<a href="<?php echo e($item->public_url); ?>"><h4 class="font-headline-md text-headline-md font-serif text-primary leading-snug mb-space-xs hover:text-primary-container transition-colors cursor-pointer"><?php echo e($item->title); ?></h4></a>
<p class="font-body-md text-body-md text-on-surface-variant line-clamp-3 leading-relaxed mb-space-md"><?php echo e($item->description); ?></p>
</div>
<div class="pt-space-sm border-t border-surface-container flex items-center justify-between">
<span class="font-label-sm text-label-sm text-secondary truncate max-w-[180px]"><?php echo e($item->text('text_3')); ?></span>
<a class="font-label-md text-label-md font-bold text-primary flex items-center gap-1 hover:text-secondary transition-colors" href="<?php echo e($item->public_url); ?>"><?php echo e($item->text('text_4')); ?><span aria-hidden="true" class="text-[16px] font-symbols font-normal not-italic leading-none normal-case whitespace-nowrap [font-feature-settings:'liga'] [word-wrap:normal]">arrow_forward</span>
</a>
</div>
</div>
</article><?php /**PATH /Users/ferdy/project-fl/yayasan/resources/views/components/news-card.blade.php ENDPATH**/ ?>