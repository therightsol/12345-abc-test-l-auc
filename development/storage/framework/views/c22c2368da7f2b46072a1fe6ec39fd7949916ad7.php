<?php $__env->startSection('content'); ?>


    <section id="secondary-banner" class="dynamic-image-1"><!--for other images just change the class name of this section block like, class="dynamic-image-2" and add css for the changed class-->
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-8 col-sm-6 col-xs-12">
                    <h2>Contact Us</h2>
                </div>
            </div>
        </div>
    </section>
    <!--#secondary-banner ends-->
    <div class="message-shadow"></div>
    <div class="clearfix"></div>

    <section class="content">
        <div class="container">

            <div class="inner-page">
                <?php if(count($errors) > 0): ?>
                    <div class="alert alert-danger">
                        <ul>
                            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li><?php echo e($error); ?></li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>
                <?php endif; ?>
                    <div class="col-md-12">
                        <?php echo $__env->make('commonbackend::layouts._alert-response', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                    </div><!--end .col -->
                <?php echo Form::open(['route' => 'contact', 'method'=>'post', 'class' => '']); ?>

                <div class="contact_wrapper information_head">
                    <h3 class="margin-bottom-25 margin-top-none">CONTACT FORM</h3>
                    <div class="form_contact margin-bottom-20">
                        <div id="result"></div>
                        <fieldset id="contact_form">
                            <input type="text" name="name" required class="form-control margin-bottom-25" placeholder="Name  (Required)" />
                            <input type="email" name="email" required class="form-control margin-bottom-25" placeholder="Email  (Required)" />
                            <textarea name="msg" required class="form-control margin-bottom-25 contact_textarea" placeholder="Your message" rows="7"></textarea>
                            <input id="submit_btn" type="submit" value="Send Message">
                        </fieldset>
                    </div>
                </div>

                <?php echo e(Form::close()); ?>


            </div>
        </div>
        <!--container ends-->
    </section>
    <?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>

    <?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>