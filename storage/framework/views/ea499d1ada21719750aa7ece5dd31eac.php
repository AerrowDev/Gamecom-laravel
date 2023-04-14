<?php $__env->startSection('content'); ?>
<div class="container">
    <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="row">
            <div class="col-6 offset-3">
                <a href="/profile/<?php echo e($post->user->id); ?>">
                    <img src="/storage/<?php echo e($post->image); ?>" alt="<?php echo e($post->caption); ?>"  class="w-100">
                </a>
            </div>
        </div>
        <div class="row pt-2 pb-4">
            <div class="col-6 offset-3">
                <div>
                    <p class="mb-0">
                    <span class="font-weight-bold">
                        <a href="/profile/<?php echo e($post->user->id); ?>" class="text-decoration-none">
                            <span class="fw-bold h5 ps-2 mb-0 justify-content-between align-items-baseline text-white"><?php echo e($post->user->username); ?></span>
                        </a>
                    </span> <span class="fs-5"><?php echo e($post->caption); ?> </span>
                    </p>
                    <p class="fw-small fs-6 text-muted ps-2 pt-0 "><?php echo e($post->created_at); ?></p>
                </div>
            </div>
        </div>
        <hr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <div class="row">
            <div class="col-12 d-flex justify-content-center">
                <?php echo e($posts->links('vendor.pagination.my-pagination')); ?>

            </div>

        </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Aaron Prellegera\Desktop\gamecom1 - final\resources\views/posts/index.blade.php ENDPATH**/ ?>