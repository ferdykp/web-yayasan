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
<article class="gallery-item group flex flex-col rounded-[3rem] overflow-hidden bg-surface-container-lowest shadow-sm hover:shadow-xl transition-all duration-300" data-category="harian">
<div class="relative overflow-hidden aspect-[4/3] bg-surface-container"><img alt="<?php echo e($item->title); ?>" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105" decoding="async" loading="lazy" src="<?php echo e($item->image_url); ?>"/>

<span class="absolute top-space-sm left-space-sm px-space-md py-space-xs rounded-full bg-surface-container-lowest/90 backdrop-blur-md text-primary font-label-sm text-label-sm uppercase font-bold"><?php echo e($item->text('text_1')); ?></span>
<span class="absolute bottom-space-sm right-space-sm px-space-sm py-1 rounded-[1rem] bg-inverse-surface/80 text-inverse-on-surface font-label-sm text-label-sm"><?php echo e($item->text('text_2')); ?></span>
</div>
<div class="p-space-lg flex flex-col flex-grow justify-between bg-surface-container-low/40">
<div class="">
<a href="<?php echo e($item->public_url); ?>"><h3 class="font-headline-sm text-headline-sm text-primary group-hover:text-primary-container transition-colors mb-space-xs"><?php echo e($item->title); ?></h3></a>
<p class="font-body-md text-body-md text-on-surface-variant leading-relaxed mb-space-md"><?php echo e($item->description); ?></p>
</div>
<div class="flex items-center justify-between pt-space-sm border-t border-outline-variant/30 text-secondary font-label-md text-label-md">
<span class="flex items-center gap-space-xs">
<span aria-hidden="true" class="text-[16px] font-symbols font-normal not-italic leading-none normal-case whitespace-nowrap [font-feature-settings:'liga'] [word-wrap:normal]">photo_camera</span><?php echo e($item->text('text_3')); ?></span>
<span class="text-primary font-bold"><?php echo e($item->text('text_4')); ?></span>
</div>
</div>
</article><?php /**PATH /Users/ferdy/project-fl/yayasan/resources/views/components/gallery-card.blade.php ENDPATH**/ ?>