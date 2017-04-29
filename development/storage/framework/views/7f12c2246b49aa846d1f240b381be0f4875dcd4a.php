<div class="card">
    <div class="card-head style-primary">
        <header><?php echo e($title); ?> </header>
    </div>
    <div class="card-body floating-label">
        <?php if(!Auth::user()->hasRole(['auctioneer'])): ?>
            <div class="form-group<?php echo e($errors->has('car_id') ? ' has-error' : ''); ?>">
                <?php echo e(Form::select('car_id', isset($inspection)?[$inspection->car->id=>$inspection->car->title]:[], null,['class' => 'js-data-example-ajax form-control', 'placeholder' => 'Select Car'])); ?>

                <?php if($errors->has('car_id')): ?>
                    <span class="help-block">
                    <strong><?php echo e($errors->first('car_id')); ?></strong>
                </span>
                <?php endif; ?>
            </div>

            <div class="form-group">
                <div id="userName"><?php echo e(isset($inspection)? 'Username: '.$inspection->user->username :''); ?></div>
            </div>
        <?php endif; ?>
        <div class="form-group<?php echo e($errors->has('date_of_inspection') ? ' has-error' : ''); ?>">
            <?php echo e(Form::text('date_of_inspection', isset($inspection)? date('d F Y', strtotime($inspection->date_of_inspection)).' -- '. $inspection->time_of_inspection :null ,['class' => 'form-control'])); ?>

            <?php echo e(Form::label('date_of_inspection', 'Date Of Inspection:')); ?>

            <?php if($errors->has('date_of_inspection')): ?>
                <span class="help-block">
                    <strong><?php echo e($errors->first('date_of_inspection')); ?></strong>
                </span>
            <?php endif; ?>
        </div>
            <?php if(Auth::user()->hasRole(['admin', 'staff'])): ?>
        <div class="form-group">
            <div class="checkbox checkbox-styled">
                <label class="checkbox-primary" data-toggle="collapse" data-target="#update_password_row">
                    <input id="change_password" type="checkbox" name="is_inspection_complete" value="1"
                           <?php if( old('is_inspection_complete') == 1): ?> checked <?php else: ?>
                        <?php
                            if (isset($inspection) and $inspection->car->is_inspection_complete == 1) {
                                echo 'checked';
                            }
                            ?>

                            <?php endif; ?> >Is Inspection Complete
                </label>
            </div>
        </div>
            <?php endif; ?>


        <?php echo $__env->make('commonbackend::layouts._form-action', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

        <div class="spinnerLoader">
            <i class="ajax-loader medium animate-spin"></i>
        </div>

    </div>
</div>

<?php $__env->startSection('js'); ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
    <script src="<?php echo e(Module::asset('commonbackend:admin_assets/timepicker/bootstrap-datetimepicker.min.js')); ?>"></script>

    <script>
        $('input[name=date_of_inspection]').datetimepicker({
            format: 'dd MM yyyy -- hh:ii:ss',
            autoclose: true,
            todayBtn: true,
            startDate: "<?php echo e(\Carbon\Carbon::now()); ?>"
        });
        $('input[name=end_date]').datetimepicker({
            format: 'dd MM yyyy -- hh:ii:ss',
            autoclose: true,
            todayBtn: true,
            startDate: "<?php echo e(\Carbon\Carbon::now()); ?>"
        });

    </script>
    <script>

        var publicUrl = '<?php echo e(asset('/')); ?>';
        var oldval = "<?php echo e(isset($inspection)? 'Username: '.$inspection->user->username :''); ?>";
        $(".js-data-example-ajax").select2({
            ajax: {
                url: "<?php echo e(route('admin.searchCar')); ?>",
                dataType: 'json',
                delay: 250,
                data: function (params) {
                    return {
                        search: $.trim(params.term),
                        inspection_completed: 'false'
                    };
                },
                processResults: function (data) {
                    return {
                        results: data
                    };
                },
                cache: true
            },
            escapeMarkup: function (markup) {
                return markup;
            }, // let our custom formatter work
            minimumInputLength: 1,
            templateResult: formatRepo, // omitted for brevity, see the source of this page
        }).on('change', function (e) {
            var repo = $(this).select2('data');
//            console.log(repo[0].info.user.username);

            if(!repo[0].hasOwnProperty('info')){
                $('#userName').html(oldval);

            }else{
                $('#userName').html('Username: ' + repo[0].info.user.username);
            }

        });
        function formatRepo(repo) {
            if (repo.loading) return repo.text;
            var img = repo.info.meta;

            if (img.length) {
                img = publicUrl + img[0].meta_value;
            } else {
                img = 'http://placehold.it/60x45';
            }

            var markup = "<div class='select2-result-repository clearfix'>" +
                "<div class='select2-result-repository__avatar'><img src='" + img + "' /></div>" +
                "<div class='select2-result-repository__meta'>" +
                "<div class='select2-result-repository__title'>" + repo.info.title + "</div>";

            markup += "<div class='select2-result-repository__statistics'>" +
                "<div class='select2-result-repository__forks'><i class='fa fa-car'></i> " + repo.info.car_model.model_name + " Model</div>" +
                "<div class='select2-result-repository__forks'><i class='fa fa-ravelry'></i> " + repo.info.car_model.car_company.company_name + " Company</div>" +
                "<div class='select2-result-repository__watchers'><i class='fa fa-clock-o'></i> " + repo.info.manufacturing_year + " Year</div>" +
                "</div>" +
                "</div></div>";

            return markup;
        }




    </script>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('style'); ?>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet"/>
    <link href="<?php echo e(Module::asset('commonbackend:admin_assets/timepicker/bootstrap-datetimepicker.min.css')); ?>"
          rel="stylesheet">
    <style>
        .select2-result-repository {
            padding-top: 4px;
            padding-bottom: 3px;
        }

        .select2-result-repository__avatar {
            float: left;
            width: 60px;
            margin-right: 10px;
        }

        .select2-result-repository__meta {
            margin-left: 70px;
        }

        .select2-result-repository__avatar img {
            width: 100%;
            height: auto;
            border-radius: 2px;
        }

        .select2-result-repository__title {
            color: black;
            font-weight: bold;
            word-wrap: break-word;
            line-height: 1.1;
            margin-bottom: 4px;
        }

        .select2-result-repository__forks, .select2-result-repository__stargazers, .select2-result-repository__watchers {
            display: inline-block;
            color: #aaa;
            font-size: 11px;
        }

        .select2-results__option--highlighted .select2-result-repository__title {
            color: white;
        }

        .select2-results__option--highlighted .select2-result-repository__forks, .select2-results__option--highlighted .select2-result-repository__stargazers, .select2-results__option--highlighted .select2-result-repository__description, .select2-results__option--highlighted .select2-result-repository__watchers {
            color: #c6dcef;
        }

        .select2-result-repository__forks, .select2-result-repository__stargazers {
            margin-right: 1em;
        }
    </style>
<?php $__env->stopSection(); ?>