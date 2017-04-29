<?php $__env->startSection('content'); ?>
    <div id="content">
        <section class="">
            <div class="section-body">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-head">
                                <header class="text-primary section-header" style="line-height: 46px; margin-bottom: 0">
                                    <?php echo e($auction->car->title); ?> Biddings
                                </header>
                            </div>
                            <div class="card-body dataTables_wrapper" style="padding-top: 0;">
                                <div class="col-md-12">
                                    <?php echo $__env->make('commonbackend::layouts._alert-response', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                                </div><!--end .col -->
                                <form method="post" id="filters"
                                      action="<?php echo e(route('auctioneer.auctionWinner', ['id' => $auction->id])); ?>">
                                    <?php echo e(csrf_field()); ?>

                                    <input type="hidden" value="" name="id">
                                    <table class="table table-striped table-hover dataTable">
                                        <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>UserName</th>
                                            <th>Bidding Amount</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php ($i = 1); ?>
                                        <?php $__currentLoopData = $auction->bidding; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bid): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr>
                                                <td><?php echo e($i); ?></td>
                                                <td><?php echo e($bid->user->username); ?></td>
                                                <td><?php echo e($bid->bid_amount); ?></td>
                                                <td width="150">
                                                    <?php if(!$auction->winner_user_id): ?>
                                                        <button class="btnon" type="button" data-id="<?php echo e($bid->user->id); ?>">
                                                            is winner?
                                                        </button>
                                                    <?php else: ?>
                                                        <?php if($auction->winner_user_id == $bid->user->id): ?>
                                                            Winner
                                                        <?php endif; ?>
                                                    <?php endif; ?>
                                                </td>
                                            </tr>
                                            <?php ($i++); ?>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </tbody>
                                    </table>
                                </form>
                            </div><!--end .card-body -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>
    <script src="<?php echo e(Module::asset('commonbackend:admin_assets/js/includes/h-functions.js')); ?>"></script>
    <script>
        $('.btnon').click(function (e) {
            e.preventDefault();
            $('input[name=id]').val($(this).data('id'));

            $('form').submit();
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('commonbackend::layouts.admin_app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>