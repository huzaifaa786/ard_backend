<div
    wire:ignore
    x-data
    x-init="
        () => {
            const post = FilePond.create($refs.<?php echo e($attributes->get('ref') ?? 'input'); ?>);
            post.setOptions({
                allowMultiple: <?php echo e($attributes->has('multiple') ? 'true' : 'false'); ?>,
                server: {
                    process:(fieldName, file, metadata, load, error, progress, abort, transfer, options) => {
                        window.livewire.find('<?php echo e($_instance->id); ?>').upload('<?php echo e($attributes->whereStartsWith('wire:model')->first()); ?>', file, load, error, progress)
                    },
                    revert: (filename, load) => {
                        window.livewire.find('<?php echo e($_instance->id); ?>').removeUpload('<?php echo e($attributes->whereStartsWith('wire:model')->first()); ?>', filename, load)
                    },
                },
                allowImagePreview: <?php echo e($attributes->has('allowFileTypeValidation') ? 'true' : 'false'); ?>,
                imagePreviewMaxHeight: <?php echo e($attributes->has('imagePreviewMaxHeight') ? $attributes->get('imagePreviewMaxHeight') : '256'); ?>,
                allowFileTypeValidation: <?php echo e($attributes->has('allowFileTypeValidation') ? 'true' : 'false'); ?>,
                acceptedFileTypes: <?php echo $attributes->get('acceptedFileTypes') ?? 'null'; ?>,
                allowFileSizeValidation: <?php echo e($attributes->has('allowFileSizeValidation') ? 'true' : 'false'); ?>,
                maxFileSize: <?php echo $attributes->has('maxFileSize') ? "'".$attributes->get('maxFileSize')."'" : 'null'; ?>

            });
        }
    "
>
    <input type="file" x-ref="<?php echo e($attributes->get('ref') ?? 'input'); ?>" />
</div>


<?php $__env->startPush('scripts'); ?>
    <?php if (! $__env->hasRenderedOnce('7b00bda1-81d9-497a-963d-7b74aa2236b1')): $__env->markAsRenderedOnce('7b00bda1-81d9-497a-963d-7b74aa2236b1'); ?>
        <script>
            FilePond.registerPlugin(FilePondPluginFileValidateType);
            FilePond.registerPlugin(FilePondPluginFileValidateSize);
            FilePond.registerPlugin(FilePondPluginImagePreview);
        </script>
    <?php endif; ?>
<?php $__env->stopPush(); ?><?php /**PATH E:\Laravel\ofelia\resources\views/components/input/filepond.blade.php ENDPATH**/ ?>