<?php $__env->startSection('content'); ?>
    <div id="content">
        <section class="">
            <div class="section-body">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-head">
                                <header class="text-primary section-header" style="line-height: 46px; margin-bottom: 0">
                                    My Auctions
                                </header>
                            </div>
                            <?php ($obj = $auctions); ?>
                            <div class="card-body dataTables_wrapper" style="padding-top: 0;">
                                <form id="filters" action="#">
                                    <?php echo $__env->make('commonbackend::layouts._table-header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                                    <table class="table table-striped table-hover dataTable">
                                        <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th class="sorting" data-table="Car.title">Title</th>
                                            <th class="sorting" data-table="Auction.bid_starting_amount">Bidding Starting Amount</th>
                                            <th>Total Bids</th>
                                            <th>Status</th>
                                            <th>view All Bids</th>

                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php ($i = $auctions->firstItem()); ?>

                                        <?php $__currentLoopData = $auctions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $auction): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr>
                                                <td><?php echo e($i); ?></td>
                                                <td><a href="<?php echo e(url('view-auction/'.$auction->id)); ?>"><?php echo e($auction->title); ?></a></td>
                                                <td><?php echo e($auction->bid_starting_amount); ?></td>
                                                <td><?php echo e($auction->bidding->count()); ?></td>
                                                <td><?php echo e(($auction->winner_user_id)? 'Closed': 'Opened'); ?></td>
                                                <td width="150">
                                                    <a  href="<?php echo e(route('auctioneer.auctionBids', ['id' => $auction->id])); ?>"  class="btn btn-icon-toggle">
                                                        <i class="fa fa-eye"></i>
                                                    </a>
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