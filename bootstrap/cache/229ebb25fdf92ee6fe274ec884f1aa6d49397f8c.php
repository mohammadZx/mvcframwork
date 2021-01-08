

<?php $__env->startSection('title', ' dahsboard'); ?>

<?php $__env->startSection('content'); ?>

<?php echo e(csrf()->_token()); ?>

<br>
<?php echo e(session()->get('token')); ?>

<h1>admin dashboard</h1>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\gitrepo\mvcframwork\resources\view/admin/dashboard.blade.php ENDPATH**/ ?>