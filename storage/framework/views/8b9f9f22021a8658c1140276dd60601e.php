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
<div class="program-card bg-surface-container-lowest rounded-[2rem] overflow-hidden shadow-sm flex flex-col justify-between hover:shadow-md transition-all duration-300"
    data-levels="sd,smp,sma">
    <div class=""><img alt="<?php echo e($item->title); ?>"
            class="object-cover w-full h-full transition-transform duration-500 group-hover:scale-105" decoding="async"
            loading="lazy" src="<?php echo e($item->image_url); ?>" />
        <div class="relative w-full h-56 overflow-hidden">

            <div
                class="absolute py-1 font-bold rounded-full shadow-sm top-3 left-3 bg-surface-container-lowest/90 backdrop-blur-sm px-space-sm text-primary font-label-sm text-label-sm">
                <?php echo e($item->text('text_1')); ?></div>
        </div>
        <div class="p-space-lg">
            <div class="flex items-center gap-space-xs text-secondary mb-space-xs">
                <span aria-hidden="true"
                    class="text-[18px] font-symbols font-normal not-italic leading-none normal-case whitespace-nowrap [font-feature-settings:'liga'] [word-wrap:normal]">workspace_premium</span>
                <span class="tracking-wider uppercase font-label-sm text-label-sm"><?php echo e($item->text('text_2')); ?></span>
            </div>
            <a href="<?php echo e($item->public_url); ?>">
                <h3 class="font-serif font-headline-sm text-headline-sm text-primary mb-space-xs"><?php echo e($item->title); ?>

                </h3>
            </a>
            <p class="leading-relaxed font-body-md text-body-md text-on-surface-variant mb-space-md">
                <?php echo e($item->description); ?></p>
            <div class="flex flex-wrap gap-1.5">
                <span
                    class="px-2.5 py-1 rounded-full bg-surface-container-low text-primary font-label-sm text-label-sm"><?php echo e($item->text('text_3')); ?></span>
                <span
                    class="px-2.5 py-1 rounded-full bg-surface-container-low text-primary font-label-sm text-label-sm"><?php echo e($item->text('text_4')); ?></span>
            </div>
        </div>
    </div>
    <div class="pt-0 px-space-lg pb-space-lg">
        <a class="flex items-center justify-between w-full font-semibold transition-colors pt-space-sm text-primary font-label-lg text-label-lg hover:text-primary-container"
            href="<?php echo e($item->public_url); ?>">
            <span class=""><?php echo e($item->text('text_5')); ?></span>
            <span aria-hidden="true"
                class="text-[18px] font-symbols font-normal not-italic leading-none normal-case whitespace-nowrap [font-feature-settings:'liga'] [word-wrap:normal]">arrow_forward</span>
        </a>
    </div>
</div>
<?php /**PATH /Users/ferdy/project-fl/yayasan/resources/views/components/academic-card.blade.php ENDPATH**/ ?>