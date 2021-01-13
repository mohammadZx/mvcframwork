

<?php $__env->startSection('title', ' product category'); ?>

<?php $__env->startSection('content'); ?>


<h1>product category</h1>

<form action="<?php echo e(public_path() . 'admin/product/categories'); ?>" method="post">
    <input type="text" name="name" placeholder="cat name" id="">
    <input type="hidden" name="token" value="<?php echo e(csrf()->_token()); ?>">
    <input type="submit">
</form>

<form action="<?php echo e(public_path() . 'admin/product/categoriest'); ?>" method="post">
    <input type="text" name="name" placeholder="cat search" id="">
    <input type="submit">
</form>

<?php $__currentLoopData = $cats; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div class="categories" style="display: flex;justify-content: space-around;">
<div class="name"><?php echo e($cat->name); ?></div>
<div class="slug"><?php echo e($cat->slug); ?></div>
<div class="date"><?php echo e($cat->created_at->toFormattedDateString()); ?></div>
<div class="edit"><a href="">edit</a></div>
<div class="edit"><a href="">delete</a></div>
</div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<br>
<br>
<br>
<?php echo $cats->links('pagination::bootstrap-4'); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\gitrepo\mvcecomlog\resources\view/admin/products/category.blade.php ENDPATH**/ ?>