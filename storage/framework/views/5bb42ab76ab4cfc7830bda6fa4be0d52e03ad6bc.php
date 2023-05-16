<?php $__env->startSection('title', 'Become A Partner'); ?>
<div>
    <?php if( setting('partnersCanRegister',true) ): ?>
    <div class="items-center min-h-screen bg-gray-50 md:flex ">
        <div class="flex flex-col overflow-y-auto md:flex-row">
            
            <div class="hidden h-screen md:block md:w-1/2">
                <div class="w-full h-full">
                    <img aria-hidden="true" class="object-cover w-full h-full" src="<?php echo e(setting('registerImage', asset('images/login-office.jpeg'))); ?>" alt="Office" />
                </div>
            </div>
            
            <div class="w-11/12 h-full max-w-xl mx-auto my-12 overflow-hidden bg-white rounded-lg shadow-xl md:my-auto md:max-w-2xl ">
                <div class="flex flex-col overflow-y-auto md:flex-row">
                    <div class="flex items-center justify-center w-full p-6 sm:p-12 ">
                        <div class="w-full">
                            <h1 class="mb-4 text-3xl font-bold text-gray-700 uppercase">
                                <?php echo e(__('Become a partner')); ?> </h1>

                            
                            <div x-data="{ tab: window.location.hash ? window.location.hash.substring(1) : 'driver' }" id="tab_wrapper">

                                <?php if(false): ?>
                                <nav class="mb-8">
                                    <a :class="tab==='driver' ? 'bg-primary-800 text-white' : 'bg-primary-500 text-gray-500'" class="p-2 font-semibold text-white rounded-t-lg text-md" @click.prevent="tab = 'driver'; window.location.hash = 'driver'" href="#"><?php echo e(__('Driver')); ?></a>
                                    <a :class="tab==='vendor' ? 'bg-primary-800 text-white' : 'bg-primary-500 text-gray-500'" class="p-2 font-semibold text-white rounded-t-lg text-md" @click.prevent="tab = 'vendor'; window.location.hash = 'vendor'" href="#"><?php echo e(__('Vendor')); ?></a>
                                </nav>
                                <?php endif; ?>


                                
                                
                                <div x-show="tab === 'driver'">
                                    <?php echo $__env->make('livewire.auth.register.partials.driver', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                </div>
                                
                                <div x-show="tab === 'vendor'">
                                    <?php echo $__env->make('livewire.auth.register.partials.vendor', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                </div>
                                <p class="my-4 text-center">
                                    <?php echo e(__('Already have an account?')); ?> <a href="<?php echo e(route('login')); ?>" class="ml-2 font-bold text-primary-500 text-md"><?php echo e(__('Login')); ?></a>
                                </p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php else: ?>
    
    <div class="w-full p-12 mx-auto my-12 rounded-sm shadow md:w-5/12 lg:w-4/12 ">
        <p class="mb-2 text-2xl font-semibold"><?php echo e(__('Registration Page Not available')); ?></p>
        <p class="text-sm">
            <?php echo e(__('Partner account registration is currently unavailable. Please stay tune/contact support regarding further instruction about registering for a partners account. Thank you')); ?>

        </p>
        <p class='mt-4 text-center'><a href="<?php echo e(route('contact')); ?>" class="underline text-primary-600"><?php echo e(__('Contact Us')); ?></a></p>
    </div>
    <?php endif; ?>
    
    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.loading','data' => []]); ?>
<?php $component->withName('loading'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
</div>
<?php /**PATH E:\Laravel\ofelia\resources\views/livewire/auth/register/register.blade.php ENDPATH**/ ?>