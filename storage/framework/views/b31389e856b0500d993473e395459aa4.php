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
<article class="facility-card flex flex-col rounded-[2rem] overflow-hidden shadow-sm hover:shadow-md transition-all duration-300 bg-surface-container-lowest border border-outline-variant/40" data-item-category="akademik">
<div class="relative h-60 w-full overflow-hidden bg-surface-container"><img alt="<?php echo e($item->title); ?>" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" decoding="async" loading="lazy" src="<?php echo e($item->image_url); ?>"/>

<div class="absolute top-space-sm left-space-sm flex gap-space-xs">
<span class="bg-primary text-on-primary font-label-sm text-label-sm px-space-sm py-1 rounded-full uppercase tracking-wider"><?php echo e($item->text('text_1')); ?></span>
<span class="bg-surface-container-lowest/90 backdrop-blur-sm text-secondary font-label-sm text-label-sm px-space-sm py-1 rounded-full font-semibold"><?php echo e($item->text('text_2')); ?></span>
</div>
<div class="absolute bottom-space-sm right-space-sm bg-surface-container-lowest/90 backdrop-blur-sm text-primary font-label-sm text-label-sm px-space-sm py-0.5 rounded-full flex items-center gap-1 font-semibold">
<span aria-hidden="true" class="text-[16px] font-symbols font-normal not-italic leading-none normal-case whitespace-nowrap [font-feature-settings:'liga'] [word-wrap:normal]">groups</span><?php echo e($item->text('text_3')); ?></div>
</div>
<div class="p-space-lg flex flex-col flex-grow justify-between">
<div class="">
<div class="flex items-center gap-space-xs text-secondary mb-space-xs">
<span aria-hidden="true" class="text-[18px] font-symbols font-normal not-italic leading-none normal-case whitespace-nowrap [font-feature-settings:'liga'] [word-wrap:normal]">biotech</span>
<span class="font-label-sm text-label-sm uppercase tracking-wider"><?php echo e($item->text('text_4')); ?></span>
</div>
<a href="<?php echo e($item->public_url); ?>"><h3 class="font-headline-md text-headline-md text-primary font-medium mb-space-xs"><?php echo e($item->title); ?></h3></a>
<p class="font-body-md text-body-md text-on-surface-variant mb-space-md"><?php echo e($item->description); ?></p>
</div>
<div class="pt-space-md border-t border-outline-variant/30 flex items-center justify-between">
<span class="font-body-sm text-body-sm text-secondary flex items-center gap-1">
<span aria-hidden="true" class="text-[16px] font-symbols font-normal not-italic leading-none normal-case whitespace-nowrap [font-feature-settings:'liga'] [word-wrap:normal]">verified</span><?php echo e($item->text('text_5')); ?></span>
<a class="text-primary font-label-lg text-label-lg font-bold hover:text-primary-container flex items-center gap-1" href="<?php echo e($item->public_url); ?>"><?php echo e($item->text('text_6')); ?><span aria-hidden="true" class="text-[16px] font-symbols font-normal not-italic leading-none normal-case whitespace-nowrap [font-feature-settings:'liga'] [word-wrap:normal]">chevron_right</span>
</a>
</div>
</div>
</article><?php /**PATH /Users/ferdy/project-fl/yayasan/resources/views/components/facilities-card.blade.php ENDPATH**/ ?>