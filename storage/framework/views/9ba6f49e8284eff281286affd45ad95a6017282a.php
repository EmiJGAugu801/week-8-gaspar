<!DOCTYPE html>
<html>
    <head>
	    <meta charset="utf-8">
	    <title>ToDos</title>
    </head>
    <body>
        <form action="toDoClone" method="POST">
            <input type="text" name="tdlist" placeholder="What needs to be done?"> <br></br>
        </form>
        <ul>
        <?php $__currentLoopData = $todolists; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $todolist): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><?php echo e($todolists['what_to_do']); ?></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </body>
</html>	<?php /**PATH C:\Users\Admin 1\toDoList_clone\resources\views/whatToDo.blade.php ENDPATH**/ ?>