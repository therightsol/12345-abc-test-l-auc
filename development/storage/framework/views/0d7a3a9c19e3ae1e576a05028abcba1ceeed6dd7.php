<?php $__env->startSection('content'); ?>
    <div id="content">
        <section class="">
            <div class="section-body">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-head">
                                <header class="text-primary section-header" style="line-height: 46px; margin-bottom: 0">
                                    My Bidding
                                </header>
                            </div>
                            <?php ($obj = $biddings); ?>
                            <div class="card-body dataTables_wrapper" style="padding-top: 0;">
                                <form id="filters" action="#">
                                    <?php echo $__env->make('commonbackend::layouts._table-header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                                    <table class="table table-striped table-hover dataTable">
                                        <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th class="sorting" data-table="Bidding.bid_amount">Amount Bid</th>
                                            <th class="sorting" data-table="Auction.bid_starting_amount">Bid Starting Amount</th>
                                            <th class="sorting" data-table="Auction.id">Auction</th>
                                            <th>Action</th>

                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php ($i = $biddings->firstItem()); ?>

                                        <?php $__currentLoopData = $biddings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bid): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr <?php if($bid->auction->winner_user_id == \Auth::user()->id): ?> style="    border: 1px solid green;" title="Won" <?php endif; ?>>
                                                <td><?php echo e($i); ?></td>
                                                <td><?php echo e($bid->bid_amount); ?></td>
                                                <td><?php echo e($bid->bid_starting_amount); ?></td>
                                                <td><a href="<?php echo e(url('view-auction/'.$bid->auction_id)); ?>" target="_blank"><?php echo e($bid->title); ?></a></td>
                                                <td width="150">

                                                    <a target="_blank" href="<?php echo e(url('view-auction/'.$bid->auction_id)); ?>"  class="btn delete-row btn-icon-toggle"
                                                            >
                                                        <i class="fa fa-eye"></i>
                                                    </a>
                                                    <?php echo e($bid->auction->isActive() ? 'Active': 'Closed'); ?>

                                                </td>
                                            </tr>
                                            <?php ($i++); ?>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </tbody>
                                    </table>

                                </form>
                            </div><!--end .card-body -->
                            <?php echo $__env->make('commonbackend::layouts._table-footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <?php echo $__env->make('commonbackend::layouts.confirm-modal', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>
    <script src="<?php echo e(Module::asset('commonbackend:admin_assets/js/includes/h-functions.js')); ?>"></script>
    <script>

        $(document).ready(function () {
            $('table.dataTable').setTableOrder({
                form: 'form#filters'
            });

        })
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('commonbackend::layouts.admin_app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>