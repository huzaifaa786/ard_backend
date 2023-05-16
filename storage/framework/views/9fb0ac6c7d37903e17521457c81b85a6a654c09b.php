<?php $__env->startSection('title', __('Subscriptions') ); ?>
<div>

    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.baseview','data' => ['title' => ''.e(__('Subscriptions')).'']]); ?>
<?php $component->withName('baseview'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['title' => ''.e(__('Subscriptions')).'']); ?>
        <div class="grid grid-cols-1 gap-4 md:grid-cols-3">
            <?php $__currentLoopData = $subscriptions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subscription): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="overflow-hidden text-center border rounded-md shadow cursor-pointer hover:shadow-lg" wire:click="subscriptionSelected('<?php echo e($subscription->id); ?>')">
                <p class="p-5 text-5xl font-bold text-white bg-primary-400">
                    
                    <?php echo e(currencyFormat($subscription->amount)); ?>

                </p>
                <p class="px-2 mt-4 mb-1 text-xl"><?php echo e($subscription->name); ?></p>
                <p class="px-2 mb-4 text-2xl font-medium"><?php echo e($subscription->days); ?> <span class="text-xl font-medium"><?php echo e(__('Days')); ?></span></p>
                <?php if(!empty($subscription->qty) ): ?>
                <p class="px-2 text-2xl font-medium"><?php echo e($subscription->qty); ?> <span class="text-xl font-medium"><?php echo e(__('Qty')); ?></span></p>
                <p class="mx-4 mb-4 text-xs text-gray-400"><?php echo e(__("Note: Number of products/services/package types allowed per vendor")); ?></p>
                <?php endif; ?>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>

    
    <div x-data="{ open: <?php if ((object) ('showCreate') instanceof \Livewire\WireDirective) : ?>window.Livewire.find('<?php echo e($_instance->id); ?>').entangle('<?php echo e('showCreate'->value()); ?>')<?php echo e('showCreate'->hasModifier('defer') ? '.defer' : ''); ?><?php else : ?>window.Livewire.find('<?php echo e($_instance->id); ?>').entangle('<?php echo e('showCreate'); ?>')<?php endif; ?> }">
        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.modal','data' => []]); ?>
<?php $component->withName('modal'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>

            <p class="text-xl font-semibold"><?php echo e(__('Subscription Payment')); ?></p>
            <div class="grid grid-cols-1 gap-4 md:grid-cols-2">
                <?php $__currentLoopData = $paymentMethods; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $paymentMethod): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <button wire:click='initPayment(<?php echo e($paymentMethod->id); ?>)'>
                    <div class="flex items-center p-1 border rounded shadow">
                        <img src="<?php echo e($paymentMethod->photo); ?>" class="w-2/12 md:w-3/12" />
                        <?php echo e($paymentMethod->name); ?>

                    </div>
                </button>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>

         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
    </div>

    
    <div x-data="{ open: <?php if ((object) ('showEdit') instanceof \Livewire\WireDirective) : ?>window.Livewire.find('<?php echo e($_instance->id); ?>').entangle('<?php echo e('showEdit'->value()); ?>')<?php echo e('showEdit'->hasModifier('defer') ? '.defer' : ''); ?><?php else : ?>window.Livewire.find('<?php echo e($_instance->id); ?>').entangle('<?php echo e('showEdit'); ?>')<?php endif; ?> }">
        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.modal','data' => ['withForm' => false]]); ?>
<?php $component->withName('modal'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['withForm' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(false)]); ?>
            <?php if(($selectedPaymentMethod->slug ?? '') == 'offline'): ?>
            <?php echo $__env->make('livewire.payment.offline.subscription', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php elseif( ($selectedPaymentMethod->slug ?? '') == "paypal" ): ?>
            <div id="paypal-button-container" class="py-12"></div>
            <?php endif; ?>
            
            <?php echo $__env->make('livewire.payment.gateways.paytm', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            
            <?php echo $__env->make('livewire.payment.gateways.payu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


            <?php if(($selectedPaymentMethod->slug ?? '') != 'offline'): ?>
            <p class="w-full p-4 text-sm text-center text-gray-500"><?php echo e(__('Do not close this window')); ?></p>
            <?php endif; ?>

         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
    </div>


</div>

<?php $__env->startPush('scripts'); ?>
<script src="https://js.stripe.com/v3/"></script>
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script src="https://checkout.flutterwave.com/v3.js"></script>
<script src="https://js.paystack.co/v1/inline.js"></script>
<script src="https://www.paypal.com/sdk/js?client-id=<?php echo e($paypalMethod->public_key ?? ''); ?>&currency=<?php echo e(setting('currencyCode', 'USD')); ?>&intent=capture">
</script>
<script src="<?php echo e(asset('js/subscription.js')); ?>"></script>

<?php $__env->stopPush(); ?>
<?php /**PATH E:\Laravel\ofelia\resources\views/livewire/subscribe.blade.php ENDPATH**/ ?>