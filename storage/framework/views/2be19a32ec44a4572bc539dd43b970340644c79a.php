<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" value="<?php echo e(csrf_token()); ?>">
  <title>VE - <?php if (! empty(trim($__env->yieldContent('page-title')))): ?> <?php echo $__env->yieldContent('page-title'); ?> <?php endif; ?></title>
  <link rel="stylesheet" href="<?php echo e(asset('css/bootstrap.min.css')); ?>">

  <?php echo $__env->yieldPushContent('style'); ?>
  <link href="<?php echo e(mix('css/app.css')); ?>" rel="stylesheet">
</head>
<body <?php if (! empty(trim($__env->yieldContent('custom-class')))): ?> <?php echo $__env->yieldContent('custom-class'); ?> <?php endif; ?>>
<?php echo $__env->yieldContent('content'); ?>


<script src="<?php echo e(asset('js/jquery.min.js')); ?>"></script>
<script src="<?php echo e(asset('js/bootstrap.min.js')); ?>"></script>
<script src="<?php echo e(asset('js/popper.min.js')); ?>"></script>
<?php echo $__env->yieldPushContent('script'); ?>
<script src="<?php echo e(mix('js/app.js')); ?>"></script>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\laravel-vue\resources\views/welcome.blade.php ENDPATH**/ ?>