

<?php $__env->startSection(section: 'title'); ?>
    <nav class="mb-8">
        <a href="<?php echo e(route('tasks.index')); ?>" class="link">Back to Task List</a>
    </nav>

    <h1 class="mb-8 text-2xl font-bold"><?php echo e($task->title); ?></h1>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <p class="mb-4 text-lg text-gray-700"><?php echo e($task->description); ?></p>
    
    <?php if($task->long_description): ?>
        <p class="mb-4 text-lg text-gray-700"><?php echo e($task->long_description); ?></p>
    <?php endif; ?>

    <p class="mb-4">
        <?php if($task->completed): ?>
            <span class="text-base text-green-700">Completed</span>
        <?php else: ?>
            <span class="text-base text-red-700">Not Completed</span>
        <?php endif; ?>
    </p>

    <p class="mb-4 text-sm text-gray-500"><?php echo e($task->created_at->diffForHumans()); ?> | <?php echo e($task->updated_at->diffForHumans()); ?></p>

    <div class="flex gap-2">
        <a class="btn" href="<?php echo e(route('tasks.edit', ['task' => $task])); ?>">Edit</a>
        
        <form method="post" action="<?php echo e(route('tasks.toggle-complete', ['task' => $task])); ?>">
            <?php echo csrf_field(); ?>
            <?php echo method_field('put'); ?>
            <button type="submit" class="btn"><?php echo e($task->completed? 'Not Completed' : 'Completed'); ?></button>
        </form>
        
        <form method="post" action="<?php echo e(route('tasks.destroy', ['task' => $task])); ?>">
            <?php echo csrf_field(); ?>
            <?php echo method_field('delete'); ?>
            <button type="submit" class="btn">Delete</button>
        </form>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ngkak\xampp\htdocs\laravel_projects\task-list\resources\views/show.blade.php ENDPATH**/ ?>