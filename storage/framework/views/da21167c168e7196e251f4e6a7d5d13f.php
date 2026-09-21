<?php
    $seo = $item ?? ($page ?? null);
    $title = $seo?->meta_title ?: ($seo?->title ?: 'Pencarian — Harapan Mulia');
    $description = $seo?->meta_description ?: ($seo?->description ?: $foundation?->description);
    $ogImage = $seo?->image_url ?: (isset($page) ? $page->media('image_1') : '');
    $isHome = request()->routeIs('home');
?>
<!DOCTYPE html>
<html lang="id" class="scroll-smooth motion-reduce:scroll-auto">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo e($title); ?></title>
    <meta name="description" content="<?php echo e($description); ?>">
    <link rel="canonical" href="<?php echo e(url()->current()); ?>">
    <meta property="og:title" content="<?php echo e($title); ?>">
    <meta property="og:description" content="<?php echo e($description); ?>">
    <meta property="og:image" content="<?php echo e($ogImage); ?>">
    <meta property="og:url" content="<?php echo e(url()->current()); ?>">
    <meta property="og:type" content="<?php echo e(($kind ?? '') === 'berita' ? 'article' : 'website'); ?>">
    <meta property="og:locale" content="id_ID">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Caveat:wght@600;700&family=Manrope:wght@400;500;600;700;800&family=Newsreader:ital,opsz,wght@0,6..72,400;0,6..72,500;0,6..72,600;0,6..72,700;1,6..72,400;1,6..72,600&family=Material+Symbols+Outlined:wght@400&display=swap"
        rel="stylesheet">
    <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>
    <?php
        $schema = [
            '@context' => 'https://schema.org',
            '@type' => isset($school) ? 'School' : (($kind ?? '') === 'berita' ? 'Article' : 'Organization'),
            'name' => $title,
            'url' => url()->current(),
            'description' => $description,
        ];
        if (($kind ?? '') === 'berita') {
            $schema += [
                'headline' => $item->title,
                'datePublished' => $item->published_at?->toIso8601String(),
                'author' => ['@type' => 'Person', 'name' => data_get($item->data, 'author', 'Tim Redaksi')],
            ];
        }
    ?>
    <script type="application/ld+json"><?php echo json_encode($schema, JSON_HEX_TAG | JSON_HEX_AMP | JSON_HEX_APOS | JSON_HEX_QUOT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES); ?></script>
    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(config('services.analytics.measurement_id')): ?>
        <script async src="https://www.googletagmanager.com/gtag/js?id=<?php echo e(config('services.analytics.measurement_id')); ?>">
        </script>
        <script>
            window.dataLayer = window.dataLayer || [];

            function gtag() {
                dataLayer.push(arguments)
            }
            gtag('js', new Date());
            gtag('config', <?php echo json_encode(config('services.analytics.measurement_id'), 15, 512) ?>);
        </script>
    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(config('services.analytics.search_console')): ?>
        <meta name="google-site-verification" content="<?php echo e(config('services.analytics.search_console')); ?>">
    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
</head>

<body
    class="min-h-screen overflow-x-hidden font-sans antialiased <?php echo e($isHome ? 'pb-0 bg-cream text-neutral-800 selection:bg-lime/60 selection:text-forest-dark' : 'pb-16 bg-cream text-on-surface selection:bg-lime/60 lg:pb-0'); ?>"
    x-data="portal">
    <a href="#main-content"
        class="sr-only focus:not-sr-only focus:fixed focus:top-2 focus:left-2 focus:z-[100] focus:bg-white focus:p-4 focus:rounded-xl">Lewati
        ke konten utama</a>
    <?php if (isset($component)) { $__componentOriginala591787d01fe92c5706972626cdf7231 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginala591787d01fe92c5706972626cdf7231 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.navbar','data' => ['home' => $isHome]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('navbar'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['home' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($isHome)]); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginala591787d01fe92c5706972626cdf7231)): ?>
<?php $attributes = $__attributesOriginala591787d01fe92c5706972626cdf7231; ?>
<?php unset($__attributesOriginala591787d01fe92c5706972626cdf7231); ?>
<?php endif; ?>
<?php if (isset($__componentOriginala591787d01fe92c5706972626cdf7231)): ?>
<?php $component = $__componentOriginala591787d01fe92c5706972626cdf7231; ?>
<?php unset($__componentOriginala591787d01fe92c5706972626cdf7231); ?>
<?php endif; ?>
    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(session('success')): ?>
        <div role="status"
            class="fixed z-50 max-w-xl p-5 mx-auto text-white shadow-lg top-24 left-4 right-4 rounded-2xl bg-forest">
            <?php echo e(session('success')); ?></div>
    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($errors->any()): ?>
        <div role="alert"
            class="relative z-40 max-w-3xl p-5 mx-auto mt-24 rounded-xl bg-error-container text-on-error-container">
            <p>Periksa kembali isian Anda.</p>
            <ul>
                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoopIteration(); ?><?php endif; ?>
                    <li><?php echo e($error); ?></li>
                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>
            </ul>
        </div>
    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
    <?php echo $__env->yieldContent('content'); ?>
    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(isset($school)): ?>
        <?php if (isset($component)) { $__componentOriginalef120467dd03c1cd835f491219f018f8 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalef120467dd03c1cd835f491219f018f8 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.school-information','data' => ['school' => $school]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('school-information'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['school' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($school)]); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalef120467dd03c1cd835f491219f018f8)): ?>
<?php $attributes = $__attributesOriginalef120467dd03c1cd835f491219f018f8; ?>
<?php unset($__attributesOriginalef120467dd03c1cd835f491219f018f8); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalef120467dd03c1cd835f491219f018f8)): ?>
<?php $component = $__componentOriginalef120467dd03c1cd835f491219f018f8; ?>
<?php unset($__componentOriginalef120467dd03c1cd835f491219f018f8); ?>
<?php endif; ?>
    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
    <?php if (isset($component)) { $__componentOriginal8a8716efb3c62a45938aca52e78e0322 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal8a8716efb3c62a45938aca52e78e0322 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.footer','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('footer'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal8a8716efb3c62a45938aca52e78e0322)): ?>
<?php $attributes = $__attributesOriginal8a8716efb3c62a45938aca52e78e0322; ?>
<?php unset($__attributesOriginal8a8716efb3c62a45938aca52e78e0322); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8a8716efb3c62a45938aca52e78e0322)): ?>
<?php $component = $__componentOriginal8a8716efb3c62a45938aca52e78e0322; ?>
<?php unset($__componentOriginal8a8716efb3c62a45938aca52e78e0322); ?>
<?php endif; ?>
    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if (! ($isHome)): ?>
        <div
            class="fixed inset-x-0 bottom-0 z-40 flex items-center justify-between px-5 py-3 border-t border-sage-border bg-cream/95 backdrop-blur lg:hidden">
            <a href="/sekolah" class="text-sm font-semibold text-forest">Unit Sekolah</a><a href="/ppdb"
                class="px-5 py-2 text-sm font-bold rounded-full bg-lime text-forest-dark">Informasi PPDB →</a>
        </div>
    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
    <div x-cloak x-show="lightbox" x-trap.inert.noscroll="lightbox" @keydown.escape.window="lightbox = null"
        @click.self="lightbox = null"
        class="fixed inset-0 z-[100] flex items-center justify-center bg-forest-night/95 p-6" role="dialog"
        aria-modal="true" aria-label="Pratinjau foto"><button @click="lightbox = null"
            class="absolute px-4 py-2 bg-white rounded-full right-6 top-6 text-forest" aria-label="Tutup foto">Tutup
            ×</button><img :src="lightbox" alt="Foto galeri pilihan"
            class="max-h-[85vh] max-w-full object-contain"></div>
</body>

</html>
<?php /**PATH /Users/ferdy/project-fl/yayasan/resources/views/layouts/public.blade.php ENDPATH**/ ?>