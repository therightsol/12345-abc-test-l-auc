<?php $__env->startSection('style'); ?>
    <style>

        input[type="text"],
        input[type="password"],
        input[type="email"]{
            color: #000000;
            font-weight: bold;
        }


        .margin-top-65{
            margin-top: 65px !important;
        }

        .wrong_credentials{
            color: white;
            background: #c7081b;
            display: inline-block;
            padding: 4px;
        }

        input[type="password"]{
            float: left;
            width: 108px;
            border-radius: 2px;
            border: 1px solid #E4E4E4;
            color: #54545e;
            text-shadow: 1px 0 0 0 #fff;
            padding: 1px 4px;
        }

        input[type="password"]:focus{

            border: 1px solid #66AFE9;
            outline: 0;
            -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 8px rgba(102, 175, 233, 0.6);
            box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 8px rgba(102, 175, 233, 0.6);
        }

        .login-section{
            background-color: rgb(25, 76, 61);
            margin-right: 10px;
        }

        .inverse{
            color: white;
            padding: 3px 5px;
        }

        .inverse:hover{
            color: white;
            background: #c7081b;
            padding: 3px 5px;
        }
    </style>
<?php $__env->stopSection(); ?>






<?php $__env->startSection('content'); ?>

<section class="content">
    <div class="container">
        <div class="inner-page full-width row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 padding-left-none padding-right-none">
                <div class="blog-content">
                    <div class="blog-title">
                        <h2 class="margin-top-65">Login</h2>
                        <strong class="margin-top-5 margin-bottom-25">Already member then login</strong>
                    </div>
                    <div>
                        <div class=" login-section search-form margin-top-20 padding-vertical-20">

                            <?php if(isset($params) && $params == true): ?>
                                <div class="select-wrapper clearfix">
                                    <div class="col-md-12">
                                        <div class="my-dropdown">
                                            <p class="wrong_credentials">Sorry! provided username / password was wrong.</p>
                                        </div>
                                    </div>

                                </div>
                            <?php endif; ?>



                            <form method="post" action="<?php echo e(route('frontend-do_login')); ?>">
                                <?php echo e(csrf_field()); ?>

                                <div class="select-wrapper clearfix">
                                    <div class="col-md-7">
                                        <div class="my-dropdown">
                                            <input class="full-width" type="text" name="username" value="" required placeholder="username (Required)">
                                        </div>
                                    </div>

                                </div>
                                <div class="select-wrapper clearfix">
                                    <div class="col-md-7">
                                        <div class="my-dropdown">
                                            <input class="full-width" type="password" name="password" required value="" placeholder="Password (Required)">
                                        </div>
                                    </div>
                                </div>
                                <div class="clear"></div>
                                <div class="select-wrapper clearfix">
                                    <div class="form-element">
                                        <a href="<?php echo e(route('frontend-reset')); ?>" class="inverse">Need Help?</a>
                                    </div>

                                    <div class="form-element">
                                        <input type="submit" value="Login" class="inverse find_new_vehicle pull-right md-button">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 padding-left-none padding-right-none">
                <div class="blog-content">
                    <div class="blog-title">
                        <h2 class="margin-top-65">Register</h2>
                        <strong class="margin-top-5 margin-bottom-25">Don't have an account! Its Free!</strong>
                    </div>
                    <div>
                        <div class="search-form margin-top-20 padding-vertical-20">
                            <form method="post" action="<?php echo e(route('frontend-do_register')); ?>">
                                <?php echo e(csrf_field()); ?>

                                <div class="select-wrapper clearfix">
                                    <div class="col-md-6">
                                        <div class="my-dropdown">
                                            <input class="full-width" type="text" name="fullname" value="<?php echo e(old('fullname')); ?>" placeholder="Full Name">
                                            <?php echo $errors->first('fullname', '<p class="help-block">:message</p>'); ?>


                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="my-dropdown <?php echo e($errors->has('username') ? 'has-error' : ''); ?>">
                                            <input class="full-width" type="text" name="username" value="<?php echo e(old('username')); ?>" required placeholder="username (Required)">
                                            <?php echo $errors->first('username', '<p class="help-block">:message</p>'); ?>


                                        </div>
                                    </div>
                                </div>
                                <div class="select-wrapper clearfix">
                                    <div class="col-md-6">
                                        <div class="my-dropdown <?php echo e($errors->has('email') ? 'has-error' : ''); ?>">
                                            <input class="full-width" type="email" name="email" value="<?php echo e(old('email')); ?>" required placeholder="Email (Required)">
                                            <?php echo $errors->first('email', '<p class="help-block">:message</p>'); ?>


                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="my-dropdown  <?php echo e($errors->has('cnic') ? 'has-error' : ''); ?>">
                                            <input class="full-width" type="text" name="cnic" value="<?php echo e(old('cnic')); ?>" placeholder="CNIC">
                                            <?php echo $errors->first('cnic', '<p class="help-block">:message</p>'); ?>


                                        </div>
                                    </div>
                                </div>
                                <div class="select-wrapper clearfix">
                                    <div class="col-md-6">
                                        <div class="my-dropdown <?php echo e($errors->has('contact') ? 'has-error' : ''); ?>">
                                            <input class="full-width" type="text" name="contact" value="<?php echo e(old('contact')); ?>" placeholder="Contact Number">
                                            <?php echo $errors->first('contact', '<p class="help-block">:message</p>'); ?>


                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="my-dropdown <?php echo e($errors->has('url') ? 'has-error' : ''); ?>">
                                            <input class="full-width" type="text" name="url" value="<?php echo e(old('url')); ?>" placeholder="Website">
                                            <?php echo $errors->first('url', '<p class="help-block">:message</p>'); ?>


                                        </div>
                                    </div>
                                </div>
                                <div class="select-wrapper clearfix">
                                    <div class="col-md-6">
                                        <div class="my-dropdown  <?php echo e($errors->has('password') ? 'has-error' : ''); ?>">
                                            <input class="full-width" type="password" name="password" value="" required placeholder="Password (Required)">
                                            <?php echo $errors->first('password', '<p class="help-block">:message</p>'); ?>

                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="my-dropdown  <?php echo e($errors->has('conf-password') ? 'has-error' : ''); ?>">
                                            <input class="full-width" type="password" name="conf-password" value="" required placeholder="Re-type Password (Required)">
                                            <?php echo $errors->first('conf-password', '<p class="help-block">:message</p>'); ?>


                                        </div>
                                    </div>
                                </div>
                                <div class="select-wrapper clearfix">
                                    <div class="col-md-12">
                                        <div class="my-dropdown  <?php echo e($errors->has('user_role') ? 'has-error' : ''); ?>">
                                            <select class="form-control select2-list" name="user_role" id="user_role"
                                                     data-placeholder="Select Role">
                                                <option selected value="">Choose Role</option>
                                                <optgroup label="User Roles">
                                                    <?php $__currentLoopData = $userroles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $userrole): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <option value="<?php echo e($userrole); ?>" <?php echo old('user_role') || ( isset($user->user_role) ? $user->user_role : '' ) == strtolower($userrole) ? 'selected' : ''; ?>>
                                                            <?php echo e($userrole); ?>

                                                        </option>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </optgroup>
                                            </select>
                                            <?php echo $errors->first('user_role', '<p class="help-block">:message</p>'); ?>

                                        </div>
                                    </div>
                                </div>
                                <div class="clear"></div>
                                <div class="select-wrapper clearfix">

                                    <div class="form-element">
                                        <input type="submit" value="Register" class="find_new_vehicle pull-right md-button">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <!--container ends-->
</section>
<!--content ends-->
<div class="clearfix"></div>
<?php $__env->stopSection(); ?>



<?php $__env->startSection('js'); ?>
    <script>

    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>