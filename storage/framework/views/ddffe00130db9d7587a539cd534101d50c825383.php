<?php if( $driverType == "taxi"): ?>
<hr class="my-4" />
<p class="font-light"><?php echo e(__('Vehicle Details')); ?></p>
<div class="grid grid-cols-2 gap-4">
    
    <div>
        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('component.autocomplete-input', ['title' => ''.e(__('Car Make')).'','column' => 'name','model' => 'CarMake','emitFunction' => 'autocompleteCategorySelected'])->html();
} elseif ($_instance->childHasBeenRendered('l924152199-0')) {
    $componentId = $_instance->getRenderedChildComponentId('l924152199-0');
    $componentTag = $_instance->getRenderedChildComponentTagName('l924152199-0');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l924152199-0');
} else {
    $response = \Livewire\Livewire::mount('component.autocomplete-input', ['title' => ''.e(__('Car Make')).'','column' => 'name','model' => 'CarMake','emitFunction' => 'autocompleteCategorySelected']);
    $html = $response->html();
    $_instance->logRenderedChild('l924152199-0', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.input-error','data' => ['message' => ''.e($errors->first('car_make_id')).'']]); ?>
<?php $component->withName('input-error'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['message' => ''.e($errors->first('car_make_id')).'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
    </div>

    
    <div>
        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('component.autocomplete-input', ['title' => ''.e(__('Car Model')).'','column' => 'name','model' => 'CarModel','updateQueryClauseName' => 'carModelQueryClasueUpdate','queryClause' => $carModelSearchClause,'emitFunction' => 'autocompleteAddressSelected'])->html();
} elseif ($_instance->childHasBeenRendered('l924152199-1')) {
    $componentId = $_instance->getRenderedChildComponentId('l924152199-1');
    $componentTag = $_instance->getRenderedChildComponentTagName('l924152199-1');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l924152199-1');
} else {
    $response = \Livewire\Livewire::mount('component.autocomplete-input', ['title' => ''.e(__('Car Model')).'','column' => 'name','model' => 'CarModel','updateQueryClauseName' => 'carModelQueryClasueUpdate','queryClause' => $carModelSearchClause,'emitFunction' => 'autocompleteAddressSelected']);
    $html = $response->html();
    $_instance->logRenderedChild('l924152199-1', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.input-error','data' => ['message' => ''.e($errors->first('car_model_id')).'']]); ?>
<?php $component->withName('input-error'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['message' => ''.e($errors->first('car_model_id')).'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
    </div>
</div>

<div class="grid grid-cols-2 gap-4">
    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.input','data' => ['title' => ''.e(__('Registration Number')).'','name' => 'reg_no']]); ?>
<?php $component->withName('input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['title' => ''.e(__('Registration Number')).'','name' => 'reg_no']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.input','data' => ['title' => ''.e(__('Color')).'','name' => 'color']]); ?>
<?php $component->withName('input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['title' => ''.e(__('Color')).'','name' => 'color']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
    
    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.select','data' => ['title' => ''.e(__('Vehicle Type')).'','options' => $vehicleTypes ?? [],'name' => 'vehicle_type_id','defer' => true]]); ?>
<?php $component->withName('select'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['title' => ''.e(__('Vehicle Type')).'','options' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($vehicleTypes ?? []),'name' => 'vehicle_type_id','defer' => true]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
</div>
<?php endif; ?>
<?php /**PATH E:\Laravel\ofelia\resources\views/livewire/auth/register/partials/taxi_driver.blade.php ENDPATH**/ ?>