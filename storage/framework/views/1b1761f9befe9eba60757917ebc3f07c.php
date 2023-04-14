<?php $__env->startSection('content'); ?>
<div class="container">
<div class="container">
    <div class="row">
      <div class="col-8">
        <img src="/storage/<?php echo e($post->image); ?>" alt="post1" class="w-100">
      </div>
      <div class="col-4">
        <div class="d-flex align-items-center">
          <div>
            <img src="<?php echo e($post->user->profile->profileImage()); ?>" alt="<?php echo e($post->caption); ?>" class="rounded-circle w-100" height="50px">
          </div>
          <div class="pt-3">
            <p class="fw-bold h5 ps-2 mb-0 justify-content-between align-items-baseline">
              <a href="/profile/<?php echo e($post->user->id); ?>" class="text-decoration-none">
                <span class="text-dark "> <?php echo e($post->user->username); ?></span>
              </a>
              <a href="#" class="ps-2 text-decoration-none fs-smaller">Follow</a>
            </p>
            <p class="fw-small text-muted ps-2 "><?php echo e($post->created_at); ?></p>
          </div>
        </div>
        <hr>  

      <p>
         <span class="fw-bold h5 ps-2 mb-0 justify-content-between align-items-baseline">
          <a href="/profile/<?php echo e($post->user->id); ?>" class="text-decoration-none">
            <span class="text-dark "> <?php echo e($post->user->username); ?></span>
          </a>
        </span> <?php echo e($post->caption); ?>

      </p>
      </div>  
    </div>
</div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Aaron Prellegera\Desktop\gamecom1 - final\resources\views/posts/show.blade.php ENDPATH**/ ?>