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
<div class="prestasi-card bg-surface-container-lowest rounded-[2rem] p-space-md shadow-sm hover:shadow-md transition-all flex flex-col justify-between" data-category="sains" data-level="sma">
<div class="">
<div class="flex items-center justify-between mb-2">
<span class="inline-flex items-center gap-1 text-primary bg-surface-container px-2 py-0.5 rounded-full font-label-sm text-label-sm">
<span aria-hidden="true" class="text-[14px] font-symbols font-normal not-italic leading-none normal-case whitespace-nowrap [font-feature-settings:'liga'] [word-wrap:normal]">military_tech</span><?php echo e($item->text('text_1')); ?></span>
<span class="font-label-sm text-label-sm text-secondary"><?php echo e($item->text('text_2')); ?></span>
</div>
<a href="<?php echo e($item->public_url); ?>"><h4 class="font-headline-sm text-headline-sm text-primary mb-1"><?php echo e($item->title); ?></h4></a>
<p class="font-body-md text-body-md text-on-surface-variant mb-space-sm line-clamp-2"><?php echo e($item->description); ?></p>
</div>
<div class="bg-surface-container-low p-space-sm rounded-[1rem] text-on-surface">
<p class="font-body-sm text-body-sm font-bold text-primary"><?php echo e($item->text('text_3')); ?></p>
<p class="font-body-sm text-body-sm text-secondary"><?php echo e($item->text('text_4')); ?></p>
</div>
</div><?php /**PATH /Users/ferdy/project-fl/yayasan/resources/views/components/achievements-card.blade.php ENDPATH**/ ?>