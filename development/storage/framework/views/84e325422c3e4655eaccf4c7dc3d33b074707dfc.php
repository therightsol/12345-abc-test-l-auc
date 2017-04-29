<?php $__env->startSection('content'); ?>
    <div id="content">
        <section class="">
            <div class="section-header">
                <h2 class="text-primary">Update Request Inspection</h2>
            </div>
            <div class="section-body">
                <div class="row">
                    <div class="col-md-12">
                        <?php echo $__env->make('commonbackend::layouts._alert-response', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                    </div><!--end .col -->
                    <div class="col-lg-6 col-lg-offset-3">
                        <?php echo Form::model($inspection,['route' => [Helper::route('update'), $inspection->id], 'method'=>'put', 'class' => 'form']); ?>


                        <?php echo $__env->make('inspectionrequests::_form', [
                        'buttonText' => 'Submit',
                        'title' => 'Update Request Inspection',
                        'update' => true
                        ], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                        <?php echo Form::close(); ?>


                    </div>
                </div>
            </div>
        </section>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('commonbackend::layouts.admin_app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>