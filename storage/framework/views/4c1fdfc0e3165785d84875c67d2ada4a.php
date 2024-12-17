<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>cấu trúc lặp [foreach, forelse, while,...]</h1>
    <hr>
    <?php for($i = 0;$i < S; $i++): ?>
    <p>the current value is <?php echo e($i); ?></p>
    <?php endfor; ?>
    <hr>
    <?php $__currentLoopData = $name; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <p>this is item: <b><?php echo e($item); ?></b></p>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <hr>
    <?php $__empty_1 = true; $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
        <li><?php echo e($user); ?></li>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
        <p> No user</p>
    <?php endif; ?>
    <?php
     $i=0
    ?>
    <?php while($i < 5): ?>
        <p>current @$i = <?php echo e($i); ?></p>
        <?php
         $i++;
        ?>
    <?php endwhile; ?>
    <hr>
    <?php $__currentLoopData = $arr; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php if($loop->first): ?>
            <?php continue; ?>
        <?php endif; ?>
        <?php if($loop->last): ?>
            <p>this is the last iteration
        <?php endif; ?>
        <li><?php echo e($item); ?></li>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</body>
</html><?php /**PATH C:\Project 1\K23CNT4_LamDucTai_Project1Lab\ldt-lesson04-blade\resources\views/ldt-view3.blade.php ENDPATH**/ ?>