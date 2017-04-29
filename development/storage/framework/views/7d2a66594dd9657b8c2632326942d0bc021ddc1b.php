<?php $__env->startSection('table'); ?>
    <table class="table table-striped table-hover dataTable">
        <thead>
        <tr>
            <th>Id</th>
            <th class="sorting" data-table="Car.title">Title</th>
            <th class="sorting" data-table="Car.grade">Grade</th>
            <th class="sorting" data-table="CarModel.model_name">Model</th>
            <th>Action</th>

        </tr>
        </thead>
        <tbody>
        <?php ($i = $cars->firstItem()); ?>
        <?php $__currentLoopData = $cars; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $car): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($i); ?></td>
                <td><?php echo e($car->title); ?></td>
                <td><?php echo e($car->grade); ?></td>
                <td><?php echo e($car->model_name); ?></td>
                <td width="150">
                    <a href="<?php echo e(route(Helper::route('edit'),$car->id)); ?>" type="button" class="btn btn-icon-toggle" data-toggle="tooltip"
                       data-placement="top" data-original-title="Edit row">
                        <i class="fa fa-pencil"></i>
                    </a>
                    <button type="button" class="btn delete-row btn-icon-toggle"
                            data-id="<?php echo e($car->id); ?>" data-toggle="tooltip"
                            data-placement="top" data-original-title="Delete row">
                        <i class="fa fa-trash-o"></i>
                    </button>
                </td>
            </tr>

            <?php ($i++); ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
<?php $__env->stopSection(); ?>



<?php $__env->startSection('js'); ?>
    ##parent-placeholder-93f8bb0eb2c659b85694486c41717eaf0fe23cd4##

    <script>

    </script>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('style'); ?>
    <style>

    </style>


<?php $__env->stopSection(); ?>
<?php echo $__env->make( 'commonbackend::layouts.grid', ['pageTitle' => 'Cars', 'obj' => $cars] , array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>