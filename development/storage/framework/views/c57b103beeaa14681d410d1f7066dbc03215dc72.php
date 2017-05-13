<?php if($can): ?>
<form class="search-form" id="add_bid" method="post" action="<?php echo e(url('add_bid')); ?>">
    <?php echo e(csrf_field()); ?>

    <div class="financing_calculator" style="    padding: 0 15px;">
        <h3>Bid On <?php echo e($auction->car->title); ?></h3>
        <div class="table-responsive">
            <table class="table no-border no-margin">
                <tbody>
                <?php if(isset($settings['max_allowed_bids'])): ?>
                <tr>
                    <td>Max Allowed Bids:</td>
                    <td><?php echo e($settings['max_allowed_bids']); ?></td>
                </tr>
                <tr>
                    <td>Your Remaining Bids:</td>
                    <td><?php echo e($settings['max_allowed_bids'] - Auth::user()->biddings->count()); ?></td>
                </tr>
                <?php endif; ?>
                <tr>
                    <td>Bid Amount start from (<?php echo e(Helper::currencySymbol()); ?>)<?php echo e($auction->bid_starting_amount); ?>:</td>
                    <td><input type="number" name="bid_amount" id="bidinput" class="number cost" placeholder="<?php echo e($auction->bid_starting_amount); ?>"/></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <button type="submit" class="btn-inventory pull-right calculate">Submit</button>

                    </td>
                </tr>
                </tbody>
            </table>
        </div>


    </div>
</form>
    <?php endif; ?>

<?php if(!\Auth::check()): ?>
    <div class="alert alert-info">
        Please <a href="<?php echo e(url('login')); ?>">Login</a> to bid
    </div>
    <?php endif; ?>

<?php $__env->startSection('js'); ?>
    ##parent-placeholder-93f8bb0eb2c659b85694486c41717eaf0fe23cd4##

    <script>
        $('#add_bid').submit(function (e) {
            e.preventDefault();
            var amount = <?php echo e(isset($auction->bid_starting_amount) ? $auction->bid_starting_amount : 0); ?>;
            if (parseInt($('#bidinput').val()) < amount) {
                alert('Min Bid Amount Is ' + amount);
                return false;
            }
            $(this)[0].submit();
        })
    </script>
<?php $__env->stopSection(); ?>