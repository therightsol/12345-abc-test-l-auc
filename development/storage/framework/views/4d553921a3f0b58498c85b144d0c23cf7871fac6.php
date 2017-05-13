
<!--Footer Start-->
<footer class="design_2">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 padding-left-none md-padding-left-none sm-padding-left-15 xs-padding-left-15">
                <h4>About Us</h4>
                <?php echo isset($settings['about_us'])?$settings['about_us']: ''; ?>

            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <h4>Latest auction</h4>
                <div class="latest-tweet">
                    <?php $__currentLoopData = $latestAuctions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $latestAuction): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div>
                            <div style="float: left; width: 60px; margin-right: 10px">
                                <a href="<?php echo e(route('auction.show', [$latestAuction->id])); ?>">
                                    <img src="<?php echo e(isset($latestAuction->car->meta[0]) ? asset($latestAuction->car->meta[0]->meta_value) : asset('images/image-not-found-100x100.png')); ?>"  alt="" class="img-responsive">
                                </a>
                            </div>
                            <div>
                                <div><strong><?php echo e($latestAuction->car->title); ?></strong></div>
                                <div><?php echo e(Helper::currencySymbol()); ?> <?php echo e($latestAuction->bid_starting_amount); ?></div>
                            </div>
                        </div>

                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 padding-right-none md-padding-right-none sm-padding-right-15 xs-padding-right-15">
                <h4>Contact us</h4>
                <div class="footer-contact">
                    <ul>
                        <li><i class="fa fa-map-marker"></i> <strong>Address:</strong> <?php echo e(isset($settings['address'])?$settings['address']: '107 Sunset Blvd., Beverly Hills, CA  90210'); ?></li>
                        <li><i class="fa fa-phone"></i> <strong>Phone:</strong><?php echo e(isset($settings['phone_number'])?$settings['phone_number']: '1-800-567-0123'); ?></li>
                        <li><i class="fa fa-envelope-o"></i> <strong>Email:</strong><a href="#"><?php echo e(isset($settings['email'])?$settings['email']: 'sales@company.com'); ?></a></li>
                    </ul>

                    <i class="fa fa-location-arrow back_icon"></i>
                </div>
            </div>
        </div>
    </div>
</footer>

<div class="clearfix"></div>
<section class="copyright-wrap padding-bottom-10">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="logo-footer margin-bottom-20 md-margin-bottom-20 sm-margin-bottom-10 xs-margin-bottom-20"><a href="<?php echo e(url('/')); ?>">
                        <h1>PakAuction</h1>
                        <span>Company Slogan</span></a>
                </div>
                <p><?php echo isset($settings['copyright'])?$settings['copyright']: 'Copyright &copy; 2017 pakauction.  All rights reserved'; ?> </p>
            </div>

        </div>
    </div>
</section>
<div class="back_to_top"> <img src="<?php echo e(url('images/2017/default-images/arrow-up.png')); ?>" alt="scroll up" /> </div>
