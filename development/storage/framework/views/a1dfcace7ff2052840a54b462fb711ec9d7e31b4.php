<?php $__env->startSection('style'); ?>

    <style>
        .preview-color{
            float:right;
            width: 15px;
            height: 15px;
        }
    </style>

    <?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>


    <section id="secondary-banner" class="dynamic-image-1"><!--for other images just change the class name of this section block like, class="dynamic-image-2" and add css for the changed class-->
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-8 col-sm-6 col-xs-12">
                    <h2>Auction</h2>
                    <h4>Unlimited Listings, Any Vehicle Type</h4>
                </div>
                <div class="col-lg-6 col-md-4 col-sm-6 col-xs-12">
                    <ul class="breadcrumb">
                        <li><a href="#">Home</a></li>
                        <li>Inventory</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!--#secondary-banner ends-->
    <div class="message-shadow"></div>
    <div class="clearfix"></div>

    <section class="content">
        <div class="container">
            <div class="inner-page row">
                <?php echo $__env->make('auction._form', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

                <div id="myTabContent" class="tab-content">
                    <div class="tab-pane fade active in" id="full-width">
                        <div class="content-wrap">
                            <div class="row car_listings">
                                <?php if(count($auctions)): ?>
                                <?php $__currentLoopData = $auctions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $auction): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="inventory margin-bottom-20 clearfix scroll_effect fadeIn">
                                    <a class="inventory" href="<?php echo e(route('auction.show', [$auction->id])); ?>">
                                        <div class="title"><?php echo e($auction->car->title); ?></div>
                                        <img src="<?php echo e(isset($auction->car->meta[0]) ? asset($auction->car->meta[0]->meta_value) : asset('images/image-not-found-100x100.png')); ?>" class="preview" alt="preview">
                                        <table class="options-primary">
                                            <tr>
                                                <td class="option primary">Body Style:</td>
                                                <td class="spec"><?php echo e($auction->car->body_type); ?></td>
                                            </tr>
                                            <tr>
                                                <td class="option primary">Drivetrain:</td>
                                                <td class="spec"><?php echo e($auction->car->drivetrain); ?></td>
                                            </tr>
                                            <?php if(isset($auction->car->engineType->title)): ?>
                                            <tr>
                                                <td class="option primary">Engine:</td>
                                                <td class="spec"><?php echo e($auction->car->engineType->title); ?></td>
                                            </tr>
                                            <?php endif; ?>
                                            <tr>
                                                <td class="option primary">Transmission:</td>
                                                <td class="spec"><?php echo e($auction->car->transmission); ?></td>
                                            </tr>
                                            <tr>
                                                <td class="option primary">Mileage:</td>
                                                <td class="spec">
                                                    <?php echo e(number_format( (float)$auction->car->kilometers)); ?> (km)
                                                </td>
                                            </tr>
                                        </table>
                                        <table class="options-secondary">
                                            <tr>
                                                <td class="option secondary">Exterior Color:</td>
                                                <td class="spec">
                                                    <div class="preview-color" style="background-color: <?php echo e($auction->car->exterior_color); ?>;"></div>

                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="option secondary">Interior Color:</td>
                                                <td class="spec">
                                                    <span class="preview-color" style="background-color: <?php echo e($auction->car->interior_color); ?>;"></span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="option secondary">Year:</td>
                                                <td class="spec"><?php echo e($auction->car->manufacturing_year); ?></td>
                                            </tr>
                                            <tr>
                                                <td class="option secondary">Plate Number:</td>
                                                <td class="spec"><?php echo e($auction->car->number_plate); ?></td>
                                            </tr>
                                            <tr>
                                                <td class="option secondary">Grade:</td>
                                                <td class="spec"><?php echo e($auction->car->grade); ?></td>
                                            </tr>
                                        </table>
                                        <img src="<?php echo e(url('images/2017/default-images')); ?>/carfax.png" alt="carfax" class="carfax" />
                                        <div class="price">Min Bid <b>Price:</b><br>
                                            <div class="figure">
                                                <?php echo e(Helper::currencySymbol().$auction->bid_starting_amount); ?><br>
                                            </div>
                                        </div>
                                        <div class="view-details gradient_button"><i class='fa fa-plus-circle'></i> View Details </div>
                                        <div class="clearfix"></div>
                                    </a>
                                </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                    <?php else: ?>
                                <div class="alert alert-info">
                                    No Auction Found
                                </div>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="clearfix"></div>
                    </div>

                    <div class="tab-pane fade" id="box-full-width">
                        <div class="inventory_box car_listings boxed boxed_full">
                            <div class="vehicle_demo clearfix">
                                <?php if(count($auctions)): ?>
                                <?php $__currentLoopData = $auctions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $auction): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                    <div class="inventory margin-bottom-20 clearfix scroll_effect fadeIn">
                                        <a class="inventory" href="<?php echo e(route('auction.show', [$auction->id])); ?>">
                                            <div class="title"><?php echo e($auction->car->title); ?></div>
                                            <img src="<?php echo e(url('images/2017/default-images')); ?>/car-1-200x150.jpg" class="preview" alt="preview">
                                            <table class="options-primary">
                                                <tr>
                                                    <td class="option primary">Body Style:</td>
                                                    <td class="spec"><?php echo e($auction->car->body_type); ?></td>
                                                </tr>
                                                <tr>
                                                    <td class="option primary">Drivetrain:</td>
                                                    <td class="spec"><?php echo e($auction->car->drivetrain); ?></td>
                                                </tr>

                                                <tr>
                                                    <td class="option primary">Transmission:</td>
                                                    <td class="spec"><?php echo e($auction->car->transmission); ?></td>
                                                </tr>
                                                <tr>
                                                    <td class="option primary">Mileage:</td>
                                                    <td class="spec">
                                                        <?php echo e(number_format( (float)$auction->car->kilometers)); ?>  (km)
                                                    </td>
                                                </tr>
                                            </table>

                                            <img src="<?php echo e(url('images/2017/default-images')); ?>/carfax.png" alt="carfax" class="carfax" />
                                            <div class="price"><b>Price:</b><br>
                                                <div class="figure">
                                                    <?php echo e(Helper::currencySymbol().$auction->bid_starting_amount); ?><br>
                                                </div>
                                            </div>
                                            <div class="view-details gradient_button"><i class='fa fa-plus-circle'></i> View Details </div>
                                            <div class="clearfix"></div>
                                        </a>
                                    </div>
                                </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <?php else: ?>
                                        <div class="alert alert-info">
                                            No Auction Found
                                        </div>
                                    <?php endif; ?>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--container ends-->
    </section>
    <?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
    <script>
        $('#listingForm').find('select').change(function () {
            $('#listingForm').submit();
        });
    </script>
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>