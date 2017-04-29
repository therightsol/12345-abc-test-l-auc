

<section class="style-default-bright">
    <div class="section-header">
        <h2 class="text-primary">Choose Image</h2>
    </div>
    <div class="section-body">
        <div class="row no-margin">
            <div class="media-action">
                <div>
                    <button id="bulk-selection" class="btn btn-default">Bulk Select</button>
                </div>
                <div class="hidden">
                    <button class="btn btn-default" id="cancel-bulk">Cancel Selection</button>
                    <button class="btn btn-default" disabled id="delete-bulk">Delete Selected</button>
                    <button style="display: none" class="btn btn-default" disabled id="insert-bulk">Insert Selected</button>
                </div>
                <div class="img-src-container">
                    <strong id="url">URL:</strong> <input type="text" readonly class="form-control img-src"
                                                          name="img-src" id="img-src">
                    <button class="btn btn-primary" id="add-img">Insert Image</button>
                    <input type="hidden" id="db_image_path" value="">
                </div>
            </div>

            
            <?php if(isset($selected_files) && ( sizeof($selected_files) > 0 ) ): ?>

                <div class="media-container row no-margin" id="media-container">
                    <?php $__currentLoopData = $selected_files; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $file_name): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php ($url = url('/') . '/' . $file_name->content); ?>

                        <div class="image-div col-md-1 col-xs-4 col-sm-3">

                            <img  src="<?php echo e($url); ?>" data-source="<?php echo e($url); ?>" data-type="<?php echo e($file_name->mime_type); ?>" width="90" height="90"/>


                            <i class="fa fa-check"></i>
                            <div class="hidden">
                                <div class="file-name"><?php echo e($file_name->content); ?></div>
                                <div class="id"><?php echo e($file_name->id); ?></div>
                                
                            </div>
                        </div>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
                
                <ul class="pagination">
                    <li <?php if($selected_files->currentPage() == 1): ?> class="disabled" <?php endif; ?>>
                        <?php if($selected_files->currentPage() == 1): ?>
                            <span>«</span>
                        <?php else: ?>
                            <a href="#"  class="ajax_page"
                               data-page="1" rel="next">«</a>
                        <?php endif; ?>
                    </li>

                    <?php for($i = 1; $i <=  $selected_files->lastPage(); $i++): ?>

                        <li
                         <?php if($selected_files->currentPage() == $i): ?>
                             class="active"
                         <?php endif; ?>>
                            <a href="#" class="ajax_page" data-page="<?php echo e($i); ?>"><?php echo e($i); ?></a>
                        </li>

                    <?php endfor; ?>

                    <li <?php if($selected_files->currentPage() == $selected_files->lastPage()): ?> class="disabled" <?php endif; ?>>
                        <?php if($selected_files->currentPage() == $selected_files->lastPage()): ?>
                            <span>»</span>
                        <?php else: ?>
                            <a href="#"  class="ajax_page"
                               data-page="<?php echo e($selected_files->lastPage()); ?>" rel="next">»</a>
                        <?php endif; ?>
                    </li>
                </ul>


<?php endif; ?>
</div>
</div>
</section>
