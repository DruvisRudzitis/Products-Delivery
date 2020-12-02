<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="justify-content-center">
        <h1><?php echo e($product->name); ?></h1>
        <p>
            Price: <b><?php echo e($product->getPrice()); ?></b>
            Size: <b><?php echo e($product->getSize()); ?></b>
            Weight: <b><?php echo e($product->getWeight()); ?></b>
        </p>
        <ul>

        </ul>
        <FORM name ="form1" method ="post" action ="radioButton.php">


            <?php $__currentLoopData = $product->deliveries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $delivery): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <Input type = 'Radio' Name ='gender' value= 'male'>
                <li><?php echo e($delivery->name); ?> <?php echo e($delivery->getPrice()); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            <P>
                <Input type = "Submit" Name = "Submit1" VALUE = "Select Delivery">

        </FORM>
    </div>
</div>
<?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/druvis/PhpstormProjects/laravelUzd1/laravel2/resources/views/products/show.blade.php ENDPATH**/ ?>