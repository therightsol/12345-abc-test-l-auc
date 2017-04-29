<?php $__env->startSection('table'); ?>
    <table class="table table-striped table-hover dataTable">
        <thead>
        <tr>
            <th>Id</th>
            <th class="sorting" data-table="Bidding.bid_amount">Amount Bid</th>
            <th class="sorting" data-table="Auction.bid_starting_amount">Bid Starting Amount</th>
            <th class="sorting" data-table="UserModel.full_name">User Full Name</th>
            <th>Action</th>

        </tr>
        </thead>
        <tbody>
        <?php ($i = $biddings->firstItem()); ?>

        <?php $__currentLoopData = $biddings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bid): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($i); ?></td>
                <td><?php echo e($bid->bid_amount); ?></td>
                <td><?php echo e($bid->bid_starting_amount); ?></td>
                <td><?php echo e($bid->full_name); ?></td>
                <td width="150">
                    <a href="<?php echo e(route(Helper::route('edit'),$bid->id)); ?>" type="button" class="btn btn-icon-toggle" data-toggle="tooltip"
                       data-placement="top" data-original-title="Edit row">
                        <i class="fa fa-pencil"></i>
                    </a>
                    <button type="button" class="btn delete-row btn-icon-toggle"
                            data-id="<?php echo e($bid->id); ?>" data-toggle="tooltip"
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
<?php echo $__env->make( 'commonbackend::layouts.grid', ['pageTitle' => 'Biddings', 'obj' => $biddings] , array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>