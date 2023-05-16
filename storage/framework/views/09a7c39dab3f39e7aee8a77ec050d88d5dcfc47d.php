<?php
$color = config('backend.colors')[$value] ?? "#f0f0f0";
?>

<div class="w-24 flex items-center justify-center px-2 py-1 m-1 font-medium rounded-full text-white" style="color: <?php echo e($color); ?>;border: 1px solid <?php echo e($color); ?>;">
    <div class="flex-initial max-w-full text-xs font-normal leading-none"><?php echo e(ucfirst($value) ?? ''); ?></div>
</div>
<?php /**PATH E:\Laravel\ofelia\resources\views/components/table/status.blade.php ENDPATH**/ ?>