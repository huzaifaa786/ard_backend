<div class="border rounded-sm p-2 space-x-2 space-y-1 <?php echo e(count($items ?? []) == 0 ?'hidden':'flex flex-wrap'); ?>">
  <?php $__currentLoopData = $items ?? []; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      
      <div class="flex items-center justify-center px-2 py-1 m-1 font-medium bg-white border rounded-full text-primary-500 border-primary-500 ">
          <div class="flex-initial max-w-full text-xs font-normal leading-none">
              <?php echo e($item->name); ?></div>
          <div class="flex flex-row-reverse flex-auto">
              <div wire:click="<?php echo e($onRemove ?? 'removeItem'); ?>(<?php echo e($item->id ?? $item['id'] ?? ''); ?>)">
                  <?php if (isset($component)) { $__componentOriginalcd9972c8156dfa6e5fd36675ca7bf5f21b506e2e = $component; } ?>
<?php $component = $__env->getContainer()->make(BladeUI\Icons\Components\Svg::class, []); ?>
<?php $component->withName('heroicon-o-x'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'w-4 h-4 ml-2 rounded-full cursor-pointer feather feather-x hover:text-red-400']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalcd9972c8156dfa6e5fd36675ca7bf5f21b506e2e)): ?>
<?php $component = $__componentOriginalcd9972c8156dfa6e5fd36675ca7bf5f21b506e2e; ?>
<?php unset($__componentOriginalcd9972c8156dfa6e5fd36675ca7bf5f21b506e2e); ?>
<?php endif; ?>
              </div>
          </div>
      </div>
      
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div><?php /**PATH E:\Laravel\ofelia\resources\views/components/item-chips.blade.php ENDPATH**/ ?>