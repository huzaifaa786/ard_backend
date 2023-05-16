<div>
    <div class="">

        <div wire:loading.flex>
            <div class="w-11/12 p-12 mx-auto mt-10 border rounded shadow ">
                <?php if (isset($component)) { $__componentOriginalcd9972c8156dfa6e5fd36675ca7bf5f21b506e2e = $component; } ?>
<?php $component = $__env->getContainer()->make(BladeUI\Icons\Components\Svg::class, []); ?>
<?php $component->withName('heroicon-o-clock'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'w-12 h-12 mx-auto text-gray-400 md:h-24 md:w-24']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalcd9972c8156dfa6e5fd36675ca7bf5f21b506e2e)): ?>
<?php $component = $__componentOriginalcd9972c8156dfa6e5fd36675ca7bf5f21b506e2e; ?>
<?php unset($__componentOriginalcd9972c8156dfa6e5fd36675ca7bf5f21b506e2e); ?>
<?php endif; ?>
                <p class="text-xl font-medium text-center"><?php echo e(__('Subscription Payment')); ?></p>
                <p class="text-sm text-center"><?php echo e(__('Please wait while we process your payment')); ?></p>
            </div>
        </div>

        <div wire:loading.remove.saveOfflinePayment >

            
            <div class="<?php echo e($done ? 'hidden' : 'block'); ?>">
                <div class="flex items-center pb-1 my-1 border-b">
                    <div class="">
                        <?php echo e(__('Subscription Payment')); ?>

                    </div>
                    <div class="ml-auto text-right">
                        <p class="text-2xl font-bold"><?php echo e(currencyFormat($selectedSubscription->amount ?? '')); ?></p>
                        <p class="text-sm font-light"><?php echo e($selectedPaymentMethod->name); ?></p>
                    </div>
                </div>
                
                <p class="mt-1 text-lg font-medium"><?php echo e(__('Instructions')); ?></p>
                <p class="text-md"><?php echo nl2br(e($selectedPaymentMethod->instruction)); ?></p>

                <p class="pt-2 mt-2 text-lg font-medium border-t"><?php echo e(__('Payment Details')); ?></p>
                
                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.form','data' => ['action' => 'saveOfflinePayment','noClass' => true]]); ?>
<?php $component->withName('form'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['action' => 'saveOfflinePayment','noClass' => true]); ?>
                    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.input','data' => ['title' => ''.e(__('Transaction Code')).'','name' => 'paymentCode']]); ?>
<?php $component->withName('input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['title' => ''.e(__('Transaction Code')).'','name' => 'paymentCode']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                    <div class="my-4">
                        <span class="text-gray-700 my-2"><?php echo e(__('Transaction Photo')); ?></span>
                        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.input.filepond','data' => ['wire:model' => 'photo','acceptedFileTypes' => '[\'image/png\', \'image/jpg\']','allowImagePreview' => true,'allowFileSizeValidation' => true,'maxFileSize' => ''.e(setting('filelimit.max_product_digital_files_size', 2)).'mb']]); ?>
<?php $component->withName('input.filepond'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['wire:model' => 'photo','acceptedFileTypes' => '[\'image/png\', \'image/jpg\']','allowImagePreview' => true,'allowFileSizeValidation' => true,'maxFileSize' => ''.e(setting('filelimit.max_product_digital_files_size', 2)).'mb']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                    </div>
                    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.buttons.primary','data' => ['title' => ''.e(__('Submit')).'']]); ?>
<?php $component->withName('buttons.primary'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['title' => ''.e(__('Submit')).'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
            </div>


            
            <div class="<?php echo e($done ? 'block' : 'hidden'); ?>">
                <?php if($error): ?>
                    <?php if (isset($component)) { $__componentOriginalcd9972c8156dfa6e5fd36675ca7bf5f21b506e2e = $component; } ?>
<?php $component = $__env->getContainer()->make(BladeUI\Icons\Components\Svg::class, []); ?>
<?php $component->withName('heroicon-o-emoji-sad'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'w-12 h-12 mx-auto text-red-500 md:h-24 md:w-24']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalcd9972c8156dfa6e5fd36675ca7bf5f21b506e2e)): ?>
<?php $component = $__componentOriginalcd9972c8156dfa6e5fd36675ca7bf5f21b506e2e; ?>
<?php unset($__componentOriginalcd9972c8156dfa6e5fd36675ca7bf5f21b506e2e); ?>
<?php endif; ?>
                <?php else: ?>
                    <?php if (isset($component)) { $__componentOriginalcd9972c8156dfa6e5fd36675ca7bf5f21b506e2e = $component; } ?>
<?php $component = $__env->getContainer()->make(BladeUI\Icons\Components\Svg::class, []); ?>
<?php $component->withName('heroicon-o-emoji-happy'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'w-12 h-12 mx-auto text-green-500 md:h-24 md:w-24']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalcd9972c8156dfa6e5fd36675ca7bf5f21b506e2e)): ?>
<?php $component = $__componentOriginalcd9972c8156dfa6e5fd36675ca7bf5f21b506e2e; ?>
<?php unset($__componentOriginalcd9972c8156dfa6e5fd36675ca7bf5f21b506e2e); ?>
<?php endif; ?>
                <?php endif; ?>
                
                <p class="text-sm font-medium text-center"><?php echo e($errorMessage); ?></p>
            </div>

        </div>





        
        <p class="<?php echo e($done ? 'block' : 'hidden'); ?> w-full p-4 text-sm text-center text-gray-500"><?php echo e(__('You can close this window')); ?></p>
        <p class="<?php echo e($done ? 'hidden' : 'block'); ?> w-full p-4 text-sm text-center text-gray-500"><?php echo e(__('Do not close this window')); ?></p>
    </div>
</div>
<?php /**PATH E:\Laravel\ofelia\resources\views/livewire/payment/offline/subscription.blade.php ENDPATH**/ ?>