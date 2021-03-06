<?php $__env->startSection('style'); ?>

    <style>
        .preview-color {
            float: right;
            width: 15px;
            height: 15px;
            margin-left: 15px;
        }

        .media {
            display: flex;
        }

        .media-body {
            margin-left: 20px;
            width: 100%;
        }
    </style>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <section id="secondary-banner" class="dynamic-image-8">
        <!--for other images just change the class name of this section block like, class="dynamic-image-2" and add css for the changed class-->
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-6 col-xs-12">
                    <h2><?php echo e($auction->car->title); ?> </h2>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 ">
                    <ul class="breadcrumb">
                        <li><a href="<?php echo e(url('/')); ?>">Home</a></li>
                        <li><a href="<?php echo e(route('auction.index')); ?>">Auctions</a></li>
                        <li>Auction Listing</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!--secondary-banner ends-->
    <div class="message-shadow"></div>
    <div class="clearfix"></div>
    <section class="content">
        <div class="container">
            <?php echo $__env->make('commonbackend::layouts._alert-response', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

            <div class="inner-page inventory-listing">
                <div class="inventory-heading margin-bottom-10 clearfix">
                    <div class="row">
                        <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
                            <h2><?php echo e($auction->car->title); ?>

                                <?php if(!$auction->isActive()): ?>
                                    <small style="color: red;">Closed</small>
                                <?php endif; ?>

                            </h2>
                            <span class="margin-top-10">
                        </span>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 text-right">
                            <h2><?php echo e(Helper::currencySymbol().$auction->bid_starting_amount); ?></h2>
                        </div>
                    </div>
                    <div class="content-nav margin-bottom-30">

                    </div>
                    <div class="row">
                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 left-content padding-left-none">
                            <!--OPEN OF SLIDER-->
                            <div class="listing-slider">
                                <section class="slider home-banner">
                                    <div class="flexslider" id="home-slider-canvas">
                                        <ul class="slides">

                                            <li data-thumb="<?php echo e($auction->car->getFeaturedImage()); ?>"><img
                                                        src="<?php echo e($auction->car->getFeaturedImage()); ?>"
                                                        alt=""
                                                        data-full-image="<?php echo e($auction->car->getFeaturedImage()); ?>"/></li>

                                            
                                            <?php $__currentLoopData = $auction->car->getGallery(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $img): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <li data-thumb="<?php echo e(asset($img->file_name)); ?>"><img
                                                            src="<?php echo e(asset($img->file_name)); ?>"
                                                            alt="" data-full-image="<?php echo e(asset($img->file_name)); ?>"/></li>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </ul>
                                    </div>
                                </section>
                                <section class="home-slider-thumbs">
                                    <div class="flexslider" id="home-slider-thumbs">
                                        <ul class="slides">
                                            <li data-thumb="<?php echo e($auction->car->getFeaturedImage()); ?>"><a href="#"><img
                                                            src="<?php echo e($auction->car->getFeaturedImage()); ?>"
                                                            alt=""/></a></li>
                                            <?php $__currentLoopData = $auction->car->getGallery(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $img): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <li data-thumb="<?php echo e(asset($img->file_name)); ?>"><img
                                                            src="<?php echo e(asset($img->file_name)); ?>"
                                                            alt="" data-full-image="<?php echo e(asset($img->file_name)); ?>"/></li>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </ul>
                                    </div>
                                </section>
                            </div>
                            <!--CLOSE OF SLIDER-->
                            <!--Slider End-->
                            <div class="clearfix"></div>
                            <div class="bs-example bs-example-tabs example-tabs margin-top-50">
                                <ul id="myTab" class="nav nav-tabs">
                                    <li class="active"><a href="#features" data-toggle="tab">Features &amp; Options</a>
                                    </li>

                                </ul>
                                <div id="myTabContent" class="tab-content margin-top-15 margin-bottom-20">
                                    <div class="tab-pane fade active in" id="features">
                                        <ul class="fa-ul">
                                            <?php $__currentLoopData = $auction->car->features; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $feature): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <li><i class="fa-li fa fa-check"></i> <?php echo e($feature->title); ?></li>

                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </ul>
                                    </div>

                                </div>
                            </div>
                            <div class="clearfix"></div>

                            <?php if($auction->winner_user_id): ?>
                                <?php ($winner = $auction->bidding->where('user_id', $auction->winner_user_id)->first()); ?>
                                <?php if($winner): ?>
                                    <h4>Winner</h4>
                                    <div class="media" style="    border: 2px solid green;
    background: #e6f9e6;">
                                        <div class="media-left">
                                            <img src="<?php echo e(isset($winner->user->picture) ? $winner->user->picture : asset('images/image-not-found-100x100.png')); ?>"
                                                 class="media-object" style="width:60px">
                                        </div>
                                        <div class="media-body">
                                            <p class="media-heading"
                                            >User Name: <b><?php echo e($winner->user->username); ?></b>
                                                <span style="display: inline;font-size: 12px;color: darkred;"><?php echo e($winner->created_at->format('F d, Y')); ?></span>

                                            </p>
                                            <p class="media-heading">Bid Amount:
                                                <b><?php echo e(Helper::currencySymbol().$winner->bid_amount); ?></b></p>
                                        </div>
                                    </div>

                                <?php endif; ?>
                            <?php endif; ?>


                            <h4>Bids</h4>
                            <?php $__currentLoopData = $auction->bidding; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bid): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="media">
                                    <div class="media-left">
                                        <img src="<?php echo e(isset($bid->user->picture) ? $bid->user->picture : asset('images/image-not-found-100x100.png')); ?>"
                                             class="media-object" style="width:60px">
                                    </div>
                                    <div class="media-body">
                                        <p class="media-heading"
                                        >User Name: <b><?php echo e($bid->user->username); ?></b>
                                            <span style="display: inline;font-size: 12px;color: darkred;"><?php echo e($bid->created_at->format('F d, Y')); ?></span>
                                        </p>
                                        <div class="media-heading">Bid Amount:
                                        <?php if(Auth::check() and Auth::user()->id == $bid->user->id and $auction->isActive()): ?>
                                            <form style="display: inline-block" method="post" action="<?php echo e(route('bidder.updateBid', ['id'=> $bid->id])); ?>">
                                                <?php echo e(csrf_field()); ?>

                                                <input name="amount" style="float: none; width: 200px" type="number"
                                                       value="<?php echo e($bid->bid_amount); ?>">
                                                <input type="submit" value="update">
                                            </form>
                                        <?php else: ?>
                                            <b><?php echo e(Helper::currencySymbol().$bid->bid_amount); ?></b>
                                            <?php endif; ?>

                                            </div>
                                    </div>
                                </div>

                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 right-content padding-right-none">
                            <div class="side-content">
                                <div class="car-info margin-bottom-50">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <tbody>
                                            <tr>
                                                <td>MODEL:</td>
                                                <td><?php echo e($auction->car->carModel->model_name); ?></td>
                                            </tr>
                                            <tr>
                                                <td>COMPANY:</td>
                                                <td><?php echo e($auction->car->carModel->carCompany->company_name); ?></td>
                                            </tr>
                                            <tr>
                                                <td>Body Style:</td>
                                                <td><?php echo e($auction->car->body_type); ?></td>
                                            </tr>
                                            <tr>
                                                <td>ENGINE:</td>
                                                <td><?php echo e(($auction->car->engineType)?$auction->car->engineType->title: ''); ?></td>
                                            </tr>
                                            <tr>
                                                <td>TRANSMISSION:</td>
                                                <td><?php echo e($auction->car->transmission); ?></td>
                                            </tr>
                                            <tr>
                                                <td>YEAR:</td>
                                                <td><?php echo e($auction->car->manufacturing_year); ?></td>
                                            </tr>
                                            <tr>
                                                <td>TRIM:</td>
                                                <td><?php echo e($auction->car->trim); ?></td>
                                            </tr>
                                            <tr>
                                                <td>EXTERIOR COLOR:</td>
                                                <td>
                                                    <div class="preview-color"
                                                         style="background-color: <?php echo e($auction->car->exterior_color); ?>;"></div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>INTERIOR COLOR:</td>
                                                <td>
                                                    <div class="preview-color"
                                                         style="background-color: <?php echo e($auction->car->interior_color); ?>;"></div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>GRADE:</td>
                                                <td><?php echo e($auction->car->grade); ?></td>
                                            </tr>
                                            <tr>
                                                <td>KILOMETERS:</td>
                                                <td><?php echo e($auction->car->kilometers); ?></td>
                                            </tr>
                                            <tr>
                                                <td>ENGINE #:</td>
                                                <td><?php echo e($auction->car->engine_number); ?></td>
                                            </tr>
                                            <tr>
                                                <td>CHASSIS #:</td>
                                                <td><?php echo e($auction->car->chassis_number); ?></td>
                                            </tr>
                                            <tr>
                                                <td>PLATE #:</td>
                                                <td><?php echo e($auction->car->number_plate); ?></td>
                                            </tr>
                                            <tr>
                                                <td>CITY #:</td>
                                                <td><?php echo e($auction->car->city_of_registration); ?></td>
                                            </tr>
                                            <tr>
                                                <td>DRIVETRAIN #:</td>
                                                <td><?php echo e($auction->car->drivetrain); ?></td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="efficiency-rating text-center padding-vertical-15 margin-bottom-40">
                                    <h3>Bid statistic</h3>
                                    <ul>

                                        <li class="hwy_mpg">
                                            <small>Min Allowed Bid:</small>
                                            <strong><?php echo e(Helper::currencySymbol().$auction->bid_starting_amount); ?></strong>
                                        </li>
                                        <li class="hwy_mpg">
                                            <small>Average Bid:</small>
                                            <strong><?php echo e(Helper::currencySymbol().round($auction->bidding->average('bid_amount'), 2)); ?></strong>
                                        </li>
                                        <li class="city_mpg">
                                            <small>Min Bid:</small>
                                            <strong><?php echo e(Helper::currencySymbol().$auction->bidding->min('bid_amount')); ?></strong>
                                        </li>
                                        <li class="hwy_mpg">
                                            <small>Max Bid:</small>
                                            <strong><?php echo e(Helper::currencySymbol().$auction->bidding->max('bid_amount')); ?></strong>
                                        </li>
                                    </ul>
                                    <p>Actual rating will vary with options, driving conditions,
                                        driving habits and vehicle condition.</p>
                                </div>

                                <div class="clearfix"></div>
                                <?php if($auction->end_date > \Carbon\Carbon::now()): ?>
                                    <?php echo $__env->make('auction._bidForm', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <!--container ends-->
        </div>
    </section>
    <!--content ends-->
    <div class="clearfix"></div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>