<div>
    <?php if(auth()->check() && auth()->user()->hasAnyRole('manager')): ?>
        <?php if($subExpired): ?>
            <div class="p-2 py-4 text-center text-white bg-red-400">
                Your subscription has expired. <a href="<?php echo e(route('my.subscribe')); ?>"
                    class="p-2 text-black bg-white rounded hover:underline hover:shadow">Subscribe</a>
            </div>
        <?php endif; ?>
    <?php endif; ?>

</div>
<?php /**PATH E:\Laravel\ofelia\resources\views/livewire/header/subscription.blade.php ENDPATH**/ ?>