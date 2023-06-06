<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps(['submit']) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps(['submit']); ?>
<?php foreach (array_filter((['submit']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<div <?php echo e($attributes->merge(['class' => ''])); ?>>
    

    <div class="">
        <form wire:submit.prevent="<?php echo e($submit); ?>">
            <div class="<?php echo e(isset($actions) ? 'sm:rounded-tl-md sm:rounded-tr-md' : 'sm:rounded-md'); ?>">
                <div class="grid grid-cols-6 gap-6">
                    <?php echo e($form); ?>

                </div>
            </div>

            <?php if(isset($actions)): ?>
                <div class="">
                    <?php echo e($actions); ?>

                </div>
            <?php endif; ?>
        </form>
    </div>
</div>
<?php /**PATH /home/fran/Escritorio/AWS/Aws/resources/views/components/form-section.blade.php ENDPATH**/ ?>