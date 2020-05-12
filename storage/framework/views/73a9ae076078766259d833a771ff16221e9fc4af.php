<?php $__env->startSection('content'); ?>

 <div class="container">
    <div class="row justify-content-center">
        <div class="col-3 p-5">
                    <img src="https://scontent-lhr8-1.cdninstagram.com/v/t51.2885-19/s150x150/87604514_848249612269338_6257783984680337408_n.jpg?_nc_ht=scontent-lhr8-1.cdninstagram.com&_nc_ohc=qdHzj1kOrF0AX_C-G8g&oh=922bbdce3e7c462ac0f0c82ddc91947b&oe=5EDFC47A" class="rounded-circle">
        </div>
    <div class="col-9 pt-5">
        <div class="d-flex justify-content-between">
        <h1><?php echo e($user->username); ?></h1>
             <a href="#">Add New post</a>
          </div>
        <div class="d-flex">
            <div class="pr-4"><strong>2</strong> posts</div>
            <div class="pr-4"><strong>2</strong> followers</div>
            <div class="pr-4"><strong>16</strong> following</div>
        </div>
        <div class="pt-4" font-weight-bold"><?php echo e($user->profile->title); ?></div>
        <div class="pt-4"> <?php echo e($user->profile->description); ?> </div>

<div><a href="#"><?php echo e($user->profile->url ?? 'natural laravel.org23???'); ?></a></div>

<div class="row pt-5">
    <div class="col-4">
        <img src="https://images.unsplash.com/photo-1518800383600-44551b3c739c?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80" class="w-100">
    </div>
    <div class="col-4">
        <img src="https://images.unsplash.com/photo-1518800383600-44551b3c739c?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80" class="w-100">
    </div>
     <div class="col-4">
        <img src="https://images.unsplash.com/photo-1518800383600-44551b3c739c?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80" class="w-100">
    </div>



</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/codehackinggram/resources/views/home.blade.php ENDPATH**/ ?>