<div class="card-actionbar">
    <div class="card-actionbar-row">
        <div class="flash-message">
            <?php $__currentLoopData = ['danger', 'warning', 'success', 'info']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $msg): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if(Session::has('alert-' . $msg)): ?>
                   <a href="<?php echo e(route(Helper::route('index'))); ?>" class="btn btn-flat btn-primary ink-reaction pull-left">Go Back</a>
                <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
        <button type="submit" class="btn btn-flat btn-primary ink-reaction"><?php echo e($buttonText); ?></button>
    </div>
</div>