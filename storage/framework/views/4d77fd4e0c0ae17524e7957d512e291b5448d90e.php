<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps(['id', 'maxWidth']) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps(['id', 'maxWidth']); ?>
<?php foreach (array_filter((['id', 'maxWidth']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<?php
$id = $id ?? md5($attributes->wire('model'));

$maxWidth = [
    'sm' => 'modal-sm',
    'md' => 'modal-md',
    'lg' => 'modal-lg',
    'xl' => 'modal-xl',
    '2xl' => 'modal-2xl',
][$maxWidth ?? '2xl'];
?>

<div class="modal fade" id="<?php echo e($id); ?>" tabindex="-1" aria-labelledby="<?php echo e($id); ?>Label" aria-hidden="true">
    <div class="modal-dialog <?php echo e($maxWidth); ?>">
        <div class="modal-content">
            <?php echo e($slot); ?>

        </div>
    </div>
</div>

<?php /**PATH /home/fran/public_html/elRinconDeLasLetras/resources/views/components/modal.blade.php ENDPATH**/ ?>