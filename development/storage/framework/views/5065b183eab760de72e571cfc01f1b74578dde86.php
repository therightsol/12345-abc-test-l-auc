<?php echo $__env->make('media::layoutfiles.embedd', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<?php $__env->startSection('content'); ?>
    <div id="content">
        <section class="">
            <div class="section-header">
                <h2 class="text-primary">Add Inspection Request</h2>
            </div>
            <div class="section-body">
                <div class="row">
                    <div class="col-md-12">
                        <?php echo $__env->make('commonbackend::layouts._alert-response', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                    </div><!--end .col -->
                    <div class="col-lg-10 col-lg-offset-1">
                        <?php if(session('auctioneer.car')): ?>
                            <?php echo Form::open(['route' => Helper::route('store'), 'method'=>'post', 'class' => 'form']); ?>


                            <?php echo $__env->make('inspectionrequests::_form', [
                            'buttonText' => 'Submit',
                            'title' => 'Add Inspection Request for ('.$car->title.')',
                            ], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                            <?php echo Form::close(); ?>


                        <?php else: ?>

                            <?php echo Form::open(['route' => 'auctioneer.storeCar', 'method'=>'post', 'class' => 'form']); ?>

                            <?php echo $__env->make('cars::_form', [
                            'buttonText' => 'Submit',
                            'title' => 'Add Inspection Request',
                            ], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                            <?php echo Form::close(); ?>


                        <?php endif; ?>


                    </div>
                </div>
            </div>
        </section>

    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('commonbackend::layouts.admin_app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>