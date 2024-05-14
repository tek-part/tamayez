<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
<head>
<?php echo $__env->make('website.layouts.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</head>
<body>
<?php echo $__env->make('website.layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->yieldContent('content'); ?>
<?php echo $__env->make('website.layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<script src="asset/js/aos.js"></script>
<script src="asset/js/custom.js"></script>
<script>
    AOS.init();
</script>
</body>
</html>



<?php /**PATH J:\Systems\تميز ERP\tamayez\resources\views/website/layouts/app.blade.php ENDPATH**/ ?>