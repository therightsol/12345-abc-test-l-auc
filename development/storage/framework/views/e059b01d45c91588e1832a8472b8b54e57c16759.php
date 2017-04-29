<?php $__env->startSection('table'); ?>
    <table class="table table-striped table-hover dataTable">
        <thead>
        <tr>
            <th>Id</th>
            <th class="sorting" data-table="UserModel.username">Username</th>
            <th>Car Title</th>
            <th class="sorting" data-table="InspectionRequest.date_of_inspection">Date of inspection</th>
            <th>Time of inspection</th>
            <th>Action/Status</th>

        </tr>
        </thead>
        <tbody>
        <?php ($i = $inspections->firstItem()); ?>

        <?php $__currentLoopData = $inspections; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $inspection): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($inspection_unique_id.$inspection->id); ?></td>
                <td><?php echo e($inspection->username); ?></td>
                <td><?php echo e($inspection->title); ?></td>
                <td><?php echo e($inspection->date_of_inspection->format('d F Y')); ?></td>
                <td><?php echo e($inspection->time_of_inspection); ?></td>
                <td width="150">
                    <?php if(\Auth::user()->hasRole(['auctioneer']) and ($inspection->date_of_inspection->format('Y-m-d') . ' '. $inspection->time_of_inspection > \Carbon\Carbon::now()->addDay()) ): ?>
                    <a href="<?php echo e(route(Helper::route('edit'),$inspection->id)); ?>" type="button"
                       class="btn btn-icon-toggle" data-toggle="tooltip"
                       data-placement="top" data-original-title="Edit row">
                        <i class="fa fa-pencil"></i>
                    </a>
                        <?php else: ?>

                        <?php if(!$inspection->is_inspection_complete): ?>
                        Time up (Pending)
                            <?php else: ?>
                            Complete
                            <?php endif; ?>
                            <br>

                    <?php endif; ?>
                    <?php if(\Auth::user()->hasRole(['admin', 'staff']) ): ?>
                    <a href="<?php echo e(route(Helper::route('edit'),$inspection->id)); ?>" type="button"
                       class="btn btn-icon-toggle" data-toggle="tooltip"
                       data-placement="top" data-original-title="Edit row">
                        <i class="fa fa-pencil"></i>
                    </a>
                    <?php endif; ?>
                    <?php if(!\Auth::user()->hasRole(['auctioneer'])): ?>
                        <button type="button" class="btn delete-row btn-icon-toggle"
                                data-id="<?php echo e($inspection->id); ?>" data-toggle="tooltip"
                                data-placement="top" data-original-title="Delete row">
                            <i class="fa fa-trash-o"></i>
                        </button>
                    <?php endif; ?>
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
<?php echo $__env->make( 'commonbackend::layouts.grid', ['pageTitle' => 'Inspections', 'obj' => $inspections] , array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>